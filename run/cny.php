<!DOCTYPE html>
<?php
$api_url = 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=NEO,EOS,ETC,XLM,DOGE,DASH,IOT,XMR,ETH,LTC,XRP,BTC,ZEC&tsyms=CNY';
$cryptocurrency = file_get_contents($api_url);
$json=json_decode($cryptocurrency);

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
$the_moon = 30000;
$half_moon = 4000;
$small_moon = 2000;
$mini_moon = 500;

$fx = $converted_currency;
$BTC = round($json->BTC->CNY,2);
$ETH = round($json->ETH->CNY,2);
$DOGE = round($json->DOGE->CNY,2);
$DASH = round($json->DASH->CNY,2);
$IOT = round($json->IOT->CNY,2);
$XMR = round($json->XMR->CNY,2);
$LTC = round($json->LTC->CNY,2);
$XRP = round($json->XRP->CNY,2);
$ZEC = round($json->ZEC->CNY,2);
$XLM = round($json->XLM->CNY,2);
$ETC = round($json->ETC->CNY,2);
$EOS = round($json->EOS->CNY,2);
$NEO = round($json->NEO->CNY,2);

$BTCP = ($BTC / $the_moon) * 100;
$ETHP = ($ETH / $half_moon) * 100;
$ZECP = ($ZEC/ $half_moon) * 100;
$DASHP = ($DASH / $half_moon) * 100;
$NEOP = ($NEO / $small_moon) * 100;
$ETCP = ($ETC / $small_moon) * 100;
$XMRP = ($XMR / $small_moon) * 100;
$LTCP = ($LTC / $small_moon) * 100;
$IOTP = ($IOT / $mini_moon) * 100;
$XRPP = ($XRP / $mini_moon) * 100;
$EOSP = ($EOS / $mini_moon) * 100;
?>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="300">
<link rel="apple-touch-icon" href="crypto-run.png">
<link rel="icon" href="crypto-run.png">

<title>CryptoCurrency.ph Race</title>

<style type="text/css">
.cryptovalue::before {
    content: "\0024" !important;
}

.stick_holder11{bottom:0%; left:<?php echo $NEOP; ?>%;}
.stick_holder10{bottom:-20%; left:<?php echo $EOSP; ?>%;}
.stick_holder9{bottom:21%; left:<?php echo $ETCP; ?>%;}
.stick_holder8{bottom:-10%;left:<?php echo $DASHP; ?>%;}
.stick_holder7{bottom:1%;left:<?php echo $XMRP; ?>%;}
.stick_holder6{bottom:1%;left:<?php echo $IOTP; ?>%;}
.stick_holder5{bottom:5%;left:<?php echo $ZECP; ?>%;}
.stick_holder4{bottom:27%;left:<?php echo $XRPP; ?>%;}
.stick_holder3{bottom:30%;left:<?php echo $LTCP; ?>%;}
.stick_holder2{bottom: 25%;left:<?php echo $ETHP; ?>%;}
.stick_holder{bottom:10%; left:<?php echo $BTCP; ?>%;}
.stickcontainer, .stellar_rocket_holder {
	transform: scale(0.5);
	position: absolute;
	height: 400px;
	width:200px;
	margin: auto;
	top: 0;
	right: auto;
}

.sc-human .cryptovalue {
    background: rgba(255, 255, 255, 0.47) !important;
    border-radius: 10px !important;
    }
    
.stellar_rocket_holder {
	left: -2%;
	top: -10%;
}
.the-rocket {
	transform: rotate(55deg);
	animation: move 5s ease-in-out infinite alternate;
	position: absolute;
}

@keyframes move
{
  0% { top: 0; }
  50% {top: 25px;}
  100%   { top: 100px; }

}
.the-rocket .cryptovalue {
    transform: rotate(-55deg);
    left: -100px;
    top: 100px;
}
  </style>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="clouds.css">
    <link rel="stylesheet" href="dog10.css">
    <link rel="stylesheet" href="runners-moon9.css">

</head>
<body>
<div class="themoon">
<img src="moon.png">
</div>

<div id="clouds">
	<div class="x4"><div class="tothemoon">To the moooooooon!</div></div>
	<div class="cloud x1"></div>
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>


<div class="stellar_rocket_holder">
<div class="the-rocket">
<div class="cryptovalue"><?php echo $XLM; ?></div>
<img src="stellar.png">
</div>
</div>

	<div class="dogstick_holder stickcontainer">
		<div class="dog">
			<div class="tail"></div>
			<div class="dogstick_hands part_1">
					<div class="dogleg2"></div>
			</div>
			<div class="dogstick_legs part_1">
				<div class="dogleg1">
				</div>
			</div>
			<div class="dogstick_body"></div>
			<div class="dogstick_legs part_2">
				<div class="dogleg1">
				</div>
			</div>
			<div class="dogstick_hands part_2">
					<div class="dogleg2"></div>
			</div>
			<div class="dogstick_head">
			</div>
			<div class="ears">
				<div class="ears-inner"></div>
			</div>
			<div class="ears2">
				<div class="ears2-inner"></div>
			</div>
		</div>
		<div class="cryptovalue"><?php echo $DOGE; ?></div>
	</div>

	<div class="stick_holder stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $BTC; ?></div>
	</div>

	<div class="stick_holder2 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $ETH; ?></div>
	</div>

	<div class="stick_holder3 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $LTC; ?></div>
	</div>

		<div class="stick_holder4 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $XRP; ?></div>
	</div>
	
		<div class="stick_holder5 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $ZEC; ?></div>
	</div>

		<div class="stick_holder6 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $IOT; ?></div>
	</div>

		<div class="stick_holder7 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $XMR; ?></div>
	</div>
	
		<div class="stick_holder8 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $DASH; ?></div>
	</div>
	

		<div class="stick_holder9 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $ETC; ?></div>
	</div>	



		<div class="stick_holder10 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $EOS; ?></div>
	</div>	
	
		<div class="stick_holder11 stickcontainer sc-human">
		<div class="human">
			<div class="stick_hands part_1">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_legs part_1">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_body"></div>
			<div class="stick_legs part_2">
				<div class="leg1">
					<div class="leg2">
						<div class="leg3"></div>
					</div>
				</div>
			</div>
			<div class="stick_hands part_2">
				<div class="hand1">
					<div class="hand2"></div>
				</div>
			</div>
			<div class="stick_head"></div>
		</div>
		<div class="cryptovalue"><?php echo $NEO; ?></div>
	</div>		
	
	

<div class="footer">
Made in the Philippines by <a target="_blank" href="https://www.jehzlau-concepts.com">jehzlau</a>. Data is freely provided by <a target="_blank" href="https://www.cryptocompare.com/api">CryptoCompare API</a>. Return to the <a target="_blank" href="https://www.cryptocurrency.ph">homepage</a>.
</div>

</body></html>