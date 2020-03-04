<?
global $MESS;
$MESS["CONCORDPAY_MERCHANT_ID"] = "Идентификатор мерчанта";
$MESS["CONCORDPAY_MERCHANT_ID_DESC"] = "Полученный от на https://pay.concord.ua";
$MESS["CONCORDPAY_SECRET_KEY"] = "Секретный ключ";
$MESS["CONCORDPAY_SECRET_KEY_DESC"] = "";
$MESS["CONCORDPAY_PRICE_CURRENCY"] = "Валюта платежа.";
$MESS["CONCORDPAY_PRICE_CURRENCY_DESC"] = "<b style='color=#aeaeae;'>Внимание!</b> Это значение должно соответствовать UAH!";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL"] = "Ссылка ответа для платежной системы.";
$MESS["CONCORDPAY_SERVER_CALLBACK_URL_DESC"] = "Ссылка, на которую зайдет система для завершения заказа.<br>Например http://{yourdomain}/tools/cp_result.php";
$MESS["CONCORDPAY_APPROVE_URL"] = "Ссылка возврата клиента при успешной оплате";
$MESS["CONCORDPAY_APPROVE_URL_DESC"] = "Ссылка, на которую вернется клиент при успешной оплате <br>Например http://{yourdomain}/personal/order/";
$MESS["CONCORDPAY_DECLINE_URL"] = "Ссылка возврата клиента, если платеж не успешен";
$MESS["CONCORDPAY_DECLINE_URL_DESC"] = "Ссылка, на которую вернется клиент, если платеж не успешен. <br>Например http://{yourdomain}/personal/order/";
$MESS["CONCORDPAY_CANCEL_URL"] = "Ссылка возврата, если клиент отменил платеж";
$MESS["CONCORDPAY_CANCEL_URL_DESC"] = "Ссылка, если клиент отменил платеж <br>Например http://{yourdomain}/personal/order/";
$MESS["CONCORDPAY_LANGUAGE"] = "Язык страницы платежной системы.";
$MESS["CONCORDPAY_LANGUAGE_DESC"] = "Например : RU";
?>