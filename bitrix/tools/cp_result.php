<?php
#ini_set( "display_errors", true );
#error_reporting( E_ALL );

if ($_SERVER["REQUEST_METHOD"] !== "POST") die();
if (!require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php")) die('prolog_before.php not found!');

if (CModule::IncludeModule('sale')) {
    $data = json_decode(file_get_contents("php://input"), true);

    $ORDER_ID = $data['orderReference'];
    $arOrder = CSaleOrder::GetByID($ORDER_ID);

    $payID = $arOrder['PAY_SYSTEM_ID'];
    CSalePaySystemAction::InitParamArrays($arOrder, $arOrder['ID']);
    $secret_key = CSalePaySystemAction::GetParamValue('CP_SECRET_KEY');

    include $_SERVER['DOCUMENT_ROOT'] . "/bitrix/php_interface/include/sale_payment/concordpay/concordpay.php";

    $concordpayPayment = new Concordpay();

    $CPResult = $concordpayPayment->isPaymentValid($data);

    if($CPResult === true){
        $arFields = array(
            /*Статус P=payed, если Вы используете другой финальный статус, то замените STATUS_ID на нужный*/
            "STATUS_ID" => "P",
            "PS_STATUS" => "Y",
            "PS_STATUS_CODE" => $data['transactionStatus'],
            "PS_STATUS_DESCRIPTION" => $data['transactionStatus'] . " " . $payID,
            "PS_STATUS_MESSAGE" => " - ",
            "PS_SUM" => $data['amount'],
            "PS_CURRENCY" => $data['currency'],
            "PS_RESPONSE_DATE" => date("d.m.Y H:i:s"),
        );
        CSaleOrder::Update($ORDER_ID, $arFields);
        CSaleOrder::PayOrder($arOrder['ID'], 'Y');

    } else {
        print_r($CPResult);
    }

}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php");

