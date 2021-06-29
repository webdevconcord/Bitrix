<?php
global $MESS;
$MESS["CONCORDPAY_MERCHANT_ID"]              = "Ідентифікатор продавця";
$MESS["CONCORDPAY_MERCHANT_ID_DESC"]         = "Надається продавцю системою ConcordPay";
$MESS["CONCORDPAY_SECRET_KEY"]               = "Секретний ключ";
$MESS["CONCORDPAY_SECRET_KEY_DESC"]          = "Надається продавцю системою ConcordPay";
$MESS["CONCORDPAY_PRICE_CURRENCY"]           = "Валюта платежу";
$MESS["CONCORDPAY_PRICE_CURRENCY_DESC"]      = "Увага! Це значення має відповідати UAH";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL"]      = "URL для інформації про результат";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL_DESC"] = "URL на який буде надходити інформація про результат платежу. За замовчуванням: http://{YOUR_SITE}/bitrix/tools/concordpay_payment/concordpay_result.php";
$MESS["CONCORDPAY_APPROVE_URL"]              = "URL переадресації для успішного платежу";
$MESS["CONCORDPAY_APPROVE_URL_DESC"]         = "URL, на який повернеться клієнт при успішній оплаті. За замовчуванням: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_DECLINE_URL"]              = "URL переадресації для невдалого платежу";
$MESS["CONCORDPAY_DECLINE_URL_DESC"]         = "URL, на який повернеться клієнт при невдалій оплаті. За замовчуванням: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_CANCEL_URL"]               = "URL переадресації для відміненого платежу";
$MESS["CONCORDPAY_CANCEL_URL_DESC"]          = "URL, на який повернеться клієнт при відмові від оплати. За замовчуванням: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_LANGUAGE"]                 = "Мова сторінки платіжної системи";
$MESS["CONCORDPAY_LANGUAGE_DESC"]            = "За замовчуванням: RU";
$MESS["CONCORDPAY_DESCRIPTION"]              = "Оплата карткою на сайті";
$MESS["CONCORDPAY_SIGNATURE_ERROR"]          = "Неправильний підпис платежу";
?>