<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?><?php
include(GetLangFileName(__DIR__ . "/", "/.description.php"));

$psTitle = "ConcordPay";
$psDescription = "<a href=\"https://pay.concord.ua\" target=\"_blank\">https://pay.concord.ua</a>";

$array = array(
    'concordpay_merchant',
    'concordpay_secret_key',
    'concordpay_price_currency',
    'concordpay_server_callback_url',
    'concordpay_response_url',
    'concordpay_language'
);

$arPSCorrespondence = array(
    "CP_MERCHANT_ID" => array(
        "NAME" => GetMessage("CONCORDPAY_MERCHANT_ID"),
        "DESCR" => GetMessage("CONCORDPAY_MERCHANT_ID_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CP_SECRET_KEY" => array(
        "NAME" => GetMessage("CONCORDPAY_SECRET_KEY"),
        "DESCR" => GetMessage("CONCORDPAY_SECRET_KEY_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CP_PRICE_CURRENCY" => array(
        "NAME" => GetMessage("CONCORDPAY_PRICE_CURRENCY"),
        "DESCR" => GetMessage("CONCORDPAY_PRICE_CURRENCY_DESC"),
        "VALUE" => "CURRENCY",
        "TYPE" => "ORDER"
    ),
    "CP_APPROVE_URL" => array(
        "NAME" => GetMessage("CONCORDPAY_APPROVE_URL"),
        "DESCR" => GetMessage("CONCORDPAY_APPROVE_URL_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CP_DECLINE_URL" => array(
        "NAME" => GetMessage("CONCORDPAY_DECLINE_URL"),
        "DESCR" => GetMessage("CONCORDPAY_DECLINE_URL_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CP_CANCEL_URL" => array(
        "NAME" => GetMessage("CONCORDPAY_CANCEL_URL"),
        "DESCR" => GetMessage("CONCORDPAY_CANCEL_URL_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CP_SERVER_CALLBACK_URL" => array(
        "NAME" => GetMessage("CONCORDPAY_SERVER_CALLBACK_URL"),
        "DESCR" => GetMessage("CONCORDPAY_SERVER_CALLBACK_URL_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CP_LANGUAGE" => array(
        "NAME" => GetMessage("CONCORDPAY_LANGUAGE"),
        "DESCR" => GetMessage("CONCORDPAY_LANGUAGE_DESC"),
        "VALUE" => "RU",
        "TYPE" => ""
    ),
);
?>