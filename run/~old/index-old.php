<!DOCTYPE html>

<?php
$api_url = 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=DASH,IOT,XMR,ETH,LTC,XRP,BTC,ZEC&tsyms=PHP';
$cryptocurrency = file_get_contents($api_url);
$json=json_decode($cryptocurrency);
?>


<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>CryptoCurrency.ph Race</title>
  
  <style type="text/css">
  .footer {
    position: absolute;
    bottom: 100px;
    right: 0;
    left: 0;
    margin: auto;
    width: 100%;
    text-align: center;
    font-family: Arial;
    font-size: x-small;
}
  </style>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="clouds.css">
    <link rel="stylesheet" href="runners-moon3.css">

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


	<div class="stick_holder stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->BTC->PHP; ?></div>
	</div>

	<div class="stick_holder2 stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->ETH->PHP; ?></div>
	</div>

	<div class="stick_holder3 stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->LTC->PHP; ?></div>
	</div>

		<div class="stick_holder4 stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->XRP->PHP; ?></div>
	</div>
	
		<div class="stick_holder5 stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->ZEC->PHP; ?></div>
	</div>

		<div class="stick_holder6 stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->IOT->PHP; ?></div>
	</div>

		<div class="stick_holder7 stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->XMR->PHP; ?></div>
	</div>
	
		<div class="stick_holder8 stickcontainer">
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
		<div class="cryptovalue"><?php echo $json->DASH->PHP; ?></div>
	</div>

<div class="footer">
Made in the Philippines by <a target="_blank" href="https://www.jehzlau-concepts.com">jehzlau</a>. Data is freely provided by <a target="_blank" href="https://www.cryptocompare.com/api">CryptoCompare API</a>. Return to the <a target="_blank" href="https://www.cryptocurrency.ph">homepage</a>.
</div>

</body></html>