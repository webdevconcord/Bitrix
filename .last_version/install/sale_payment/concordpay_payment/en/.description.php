<?php
global $MESS;
$MESS["CONCORDPAY_MERCHANT_ID"]              = "Merchant Account";
$MESS["CONCORDPAY_MERCHANT_ID_DESC"]         = "Given to Merchant by ConcordPay";
$MESS["CONCORDPAY_SECRET_KEY"]               = "Secret key";
$MESS["CONCORDPAY_SECRET_KEY_DESC"]          = "Given to Merchant by ConcordPay";
$MESS["CONCORDPAY_PRICE_CURRENCY"]           = "Currency";
$MESS["CONCORDPAY_PRICE_CURRENCY_DESC"]      = "Attention! This value should correspond to UAH";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL"]      = "URL of the result information";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL_DESC"] = "URL where information about the payment result will be received. Default: http://{YOUR_SITE}/bitrix/tools/concordpay_payment/concordpay_result.php";
$MESS["CONCORDPAY_APPROVE_URL"]              = "Successful payment redirect URL";
$MESS["CONCORDPAY_APPROVE_URL_DESC"]         = "URL to which the client will return upon successful payment. Default: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_DECLINE_URL"]              = "Redirect URL failed to pay";
$MESS["CONCORDPAY_DECLINE_URL_DESC"]         = "URL to which the client will return if the payment is not successful. Default: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_CANCEL_URL"]               = "Redirect URL in case of failure to make payment";
$MESS["CONCORDPAY_CANCEL_URL_DESC"]          = "URL to which the client will return if he canceled the payment. Default: http://{YOUR_SITE}/personal/order/";
$MESS["CONCORDPAY_LANGUAGE"]                 = "Payment page language";
$MESS["CONCORDPAY_LANGUAGE_DESC"]            = "Default: RU";
$MESS["CONCORDPAY_DESCRIPTION"]              = "Payment by card on the site";
$MESS["CONCORDPAY_SIGNATURE_ERROR"]          = "Invalid payment signature";
?>