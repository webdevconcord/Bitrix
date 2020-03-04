<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
include dirname(__FILE__) . "/concordpay.php";

if (isset($arResult['ORDER_ID'])) {
    $ORDER_ID = $arResult['ORDER_ID'];
} else {
    $ORDER_ID = $_GET['ORDER_ID'];
}

$concordpay = new Concordpay();

$arOrder = CSaleOrder::GetByID($ORDER_ID);
$dbBasket = CSaleBasket::GetList(Array("ID" => "ASC"), Array("ORDER_ID" => $ORDER_ID));

$basket = $dbBasket->arResult;
$rsUser = CUser::GetByID($arOrder['USER_ID']);
$arUser = $rsUser->Fetch();
$orderID = $ORDER_ID;

$proPhone = CSaleOrderPropsValue::GetList(array("SORT" => "ASC"),
    array("ORDER_ID" => $ORDER_ID, "ORDER_PROPS_ID" => 3));
$proPhone = $proPhone->arResult[0]['VALUE_ORIG'];

$proCity = CSaleOrderPropsValue::GetList(array("SORT" => "ASC"),
    array("ORDER_ID" => $ORDER_ID, "ORDER_PROPS_ID" => 5));
$proCity = $proCity->arResult[0]['VALUE_ORIG'];

$proAddress = CSaleOrderPropsValue::GetList(array("SORT" => "ASC"),
    array("ORDER_ID" => $ORDER_ID, "ORDER_PROPS_ID" => 7));
$proAddress = $proAddress->arResult[0]['VALUE_ORIG'];

$formFields = array();

$formFields['operation'] = 'Purchase';
$formFields['merchant_id'] = CSalePaySystemAction::GetParamValue("CP_MERCHANT_ID");
$formFields['amount'] = round($arOrder['PRICE'], 2);
$formFields['signature'] = '';
$formFields['order_id'] = $orderID;
$formFields['currency_iso'] = CSalePaySystemAction::GetParamValue("CP_PRICE_CURRENCY");
$formFields['description'] = "Покупка в :" . $_SERVER['HTTP_HOST'];
$formFields['add_params'] = "";
$formFields['approve_url'] = CSalePaySystemAction::GetParamValue("CP_APPROVE_URL");
$formFields['decline_url'] = CSalePaySystemAction::GetParamValue("CP_DECLINE_URL");
$formFields['cancel_url'] = CSalePaySystemAction::GetParamValue("CP_CANCEL_URL");
$formFields['callback_url'] = CSalePaySystemAction::GetParamValue("CP_SERVER_CALLBACK_URL");


$productNames = array();
$productQty = array();
$productPrices = array();

foreach ($basket as $item) {
    $productNames[] = addslashes($item['NAME']);
    $productPrices[] = round($item['PRICE'], 2);
    $productQty[] = (int)$item['QUANTITY'];
}

/* if basket is empty */
if (
    empty($productNames) &&
    empty($productPrices) &&
    empty($productQty)
) {
    $productNames  = array('Purchase on '.$formFields['merchantDomainName']);
    $productPrices =  array($formFields['amount']);
    $productQty    = array(1);
}

$formFields['productName'] = $productNames;
$formFields['productPrice'] = $productPrices;
$formFields['productCount'] = $productQty;

/**
 * Check phone
 */
if ($arUser['PERSONAL_MOBILE'] != '') {
    $phone = $arUser['PERSONAL_MOBILE'];
} else {
    $phone = $proPhone;
}

$phone = str_replace(array('+', ' ', '(', ')', '-'), array(
    '',
    '',
    '',
    '',
    ''
), $phone);
if (strlen($phone) == 10) {
    $phone = '38' . $phone;
} elseif (strlen($phone) == 11) {
    $phone = '3' . $phone;
}

$name = $arOrder['USER_NAME'];
$street = $arUser['PERSONAL_STREET'];
$mailbox = $arUser['PERSONAL_MAILBOX'];
$city = $arUser['PERSONAL_CITY'];
$last_name = $arOrder['USER_LAST_NAME'];

$formFields['clientFirstName'] = isset($name) ? $name : '';
$formFields['clientLastName'] = isset($last_name) ? $last_name : '';
$formFields['clientEmail'] = $arOrder['USER_EMAIL'];
$formFields['clientPhone'] = $phone;

if ($city != '') {
    $formFields['clientCity'] = $city;
} else {
    $formFields['clientCity'] = $proCity;
}

if ($street != '' && $mailbox != '' && $city != '') {
    $formFields['clientAddress'] = $city . ', ' . $street . ', ' . $mailbox;
} else {
    $formFields['clientAddress'] = $proCity . ', ' . $proAddress;
}

$formFields['language'] = CSalePaySystemAction::GetParamValue("CP_LANGUAGE");

$formFields['signature'] = $concordpay->getRequestSignature($formFields);

echo '	<form action="' . Concordpay::URL . '" method="post" id="cp_payment_form" accept-charset="utf-8">';
foreach ($formFields as $name => $field) {
    if (is_array($field)) {
        foreach ($field as $aField) {
            echo '<input type="hidden" name="' . $name . '[]" value="' . htmlspecialchars($aField) . '" />';
        }
    } else {
        echo '<input type="hidden" name="' . $name . '" value="' . htmlspecialchars($field) . '" />';
    }
}
echo '<input type="submit" /></form>';
echo "<script> setTimeout(function() {
     document.getElementById('cp_payment_form').submit();
     }, 100);
    </script>";
