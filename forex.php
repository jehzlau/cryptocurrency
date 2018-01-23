<?php
function currencyConverter($from_currency, $to_currency, $amount) {
$from_Currency = urlencode($from_currency);
$to_Currency = urlencode($to_currency);
$encode_amount = urlencode($amount);
$get = file_get_contents("https://www.google.com/finance/converter?a=$encode_amount&from=$from_Currency&to=$to_Currency");
$get = explode("<span class=bld>",$get);
$get = explode("</span>",$get[1]);
$converted_currency = preg_replace("/[^0-9\.]/", null, $get[0]);
return $converted_currency;
}

$amount = 1;
$from_currency ="USD";
$to_currency ="PHP";
$converted_currency = currencyConverter($from_currency, $to_currency, $amount);
echo $converted_currency;
?>