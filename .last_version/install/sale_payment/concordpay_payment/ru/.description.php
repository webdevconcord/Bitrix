<?php
global $MESS;
$MESS["CONCORDPAY_MERCHANT_ID"]              = "Идентификатор продавца";
$MESS["CONCORDPAY_MERCHANT_ID_DESC"]         = "Выдаётся продавцу системой ConcordPay";
$MESS["CONCORDPAY_SECRET_KEY"]               = "Секретный ключ";
$MESS["CONCORDPAY_SECRET_KEY_DESC"]          = "Выдаётся продавцу системой ConcordPay";
$MESS["CONCORDPAY_PRICE_CURRENCY"]           = "Валюта платежа";
$MESS["CONCORDPAY_PRICE_CURRENCY_DESC"]      = "Внимание! Это значение должно соответствовать UAH";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL"]      = "URL для информации об оплате";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL_DESC"] = "URL, по которому будет приходить информация о результате платежа. По умолчанию: http://{YOUR_SITE}/bitrix/tools/concordpay_payment/concordpay_result.php";
$MESS["CONCORDPAY_APPROVE_URL"]              = "URL перенаправления при успешном платеже";
$MESS["CONCORDPAY_APPROVE_URL_DESC"]         = "URL, на который вернется клиент при успешной оплате. По умолчанию: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_DECLINE_URL"]              = "URL перенаправления при неудачном платеже";
$MESS["CONCORDPAY_DECLINE_URL_DESC"]         = "URL, на который вернется клиент, если платеж не успешен. По умолчанию: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_CANCEL_URL"]               = "URL перенаправления при отмене платежа";
$MESS["CONCORDPAY_CANCEL_URL_DESC"]          = "URL, на который вернётся клиент, если он отменил платеж. По умолчанию: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_LANGUAGE"]                 = "Язык страницы платежной системы";
$MESS["CONCORDPAY_LANGUAGE_DESC"]            = "По умолчанию: RU";
$MESS["CONCORDPAY_DESCRIPTION"]              = "Оплата картой на сайте";
$MESS["CONCORDPAY_SIGNATURE_ERROR"]          = "Неправильная подпись платежа";
?>