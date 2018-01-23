<html>
<head>

<link rel="apple-touch-icon" href="cryptoph.png">
<link rel="icon" href="cryptoph.png">

<meta http-equiv="refresh" content="30">
<title>CryptoCurrency.ph</title>
<style>
body {
margin: 0;
padding: 0;
}

.ccrow {
font-size: xx-large;
font-family: Arial;
}

.ccrow .ccx {
background: #eee;
padding: 10px;
border: 2px solid #fff;
}

.ccrow .cct {
background: #ddd;
padding: 10px;
border: 2px solid #fff;
}

.bottom-text {
padding-top: 10px;
font-style: italic;
clear: both;
}

</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Real-Time Crypto Currency Exchange Rates in Philippine Pesos</h1>
<h3>A really simple web app that displays crypto currencies that matter. <a href="https://www.cryptocurrency.ph/btc/">View exchange rates in BTC</a>. If you are bored while staring at the table, watch the <a href="https://www.cryptocurrency.ph/run/">live race here</a>.</h3>

<?php
$api_url = 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=IOT,BTC,ADA,ARK,NEO,GAS,DGB,XEM,XLM,XRP,ETH,LTC,DASH,XMR,ZEC,DOGE&tsyms=PHP';
$cryptocurrency = file_get_contents($api_url);
$json=json_decode($cryptocurrency,true);
 
foreach($json as $cc => $value) {
   echo '<div class="ccrow"><div class="col-xs-6 ccx"><span>'. $cc.'</span></div><div class="col-xs-6 cct"><span>'. $value['PHP'] .'</span></div></div>';
}


?>

<div class="bottom-text">
<h6>Prices update in real-time. This website is made possible by the powerful and awesome <a target="_blank" href="https://www.cryptocompare.com/api/">CryptoCompare API</a>. Without their free API, this website won't be here and you won't be reading this footer text that you're reading right now. I will add more cryptos in the list if it's worthy to be part of the list. Made from scratch with love in the Philippines, by <a target="_blank" href="http://www.jehzlau.com/">Jehzeel Laurente</a>.</h6>

</div>
</div>
</body>
</html>
