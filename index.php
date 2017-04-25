<html>
<head>
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
<h3>A really simple web app that displays crypto currencies that matter.</h3>

<?php
$api_url = 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC,XRP,DASH,XMR,ZEC,DOGE,ETC&tsyms=PHP';

?>

<div class="bottom-text">
<h6>This page will refresh every 30 seconds. This website is made possible with <a target="_blank" href="https://www.cryptocompare.com/api/">CryptoCompare's free API</a>. Without their free API, this website will not exist. I will add more cryptos in the list if I think it's worthy to be added. Made from scratch with love in the Philippines, by <a target="_blank" href="http://www.jehzlau.com/">Jehzeel Laurente</a></h6>
</div>
</div>
</body>
</html>