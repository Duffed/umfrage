<!doctype html>
<html>
	<head>		
		<title>Umfrage zum Thema Ernährung</title>
		<meta name="author" content="Joscha Diederichs & Max Gundlach">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css"	>
		<meta name="viewport" content="width=device-width, user-scalable=no">
	</head>
<body>
	<div id="wrapper">
		
	<div class="frage fullwidth">
	<?php
		include( 'functions/funktionen.inc.php' );
		$conid = db_connect();
		$tname = "umfrage";
		
		//Neuer Eintrag
		if (isset($_POST["b_absenden"])) {

			$check = true;

			for ($i = 1; $i <= 19; $i++){
				if ( $_POST["frage".$i] == "" ){
					$check = false;
					echo "Noch nicht ausgefüllt: <b>Frage ".$i."</b>";
					echo"<br>";
				}
			}

			if ($check == false) {
				?>
					<br/>
					<p><b>Bitte alle Felder ausfüllen</b></p>
					<p><a href="javascript:history.back()">Zurück</a>
				<?php
			} else {
			
				//vars
				$alter = $_POST["alter"];
				$geschlecht = $_POST["geschlecht"];
				$frage1 = $_POST["frage1"];
				$frage2 = $_POST["frage2"];
				$frage3 = $_POST["frage3"];
				$frage4 = $_POST["frage4"];
				$frage5 = $_POST["frage5"];
				$frage6 = $_POST["frage6"];
				$frage7 = $_POST["frage7"];
				$frage8 = $_POST["frage8"];
				$frage9 = $_POST["frage9"];
				$frage10 = $_POST["frage10"];
				$frage11 = $_POST["frage11"];
				$frage12 = $_POST["frage12"];
				$frage13 = $_POST["frage13"];
				$frage14 = $_POST["frage14"];
				$frage15 = $_POST["frage15"];
				$frage16 = $_POST["frage16"];
				$frage17 = $_POST["frage17"];
				$frage18 = $_POST["frage18"];
				$frage19 = $_POST["frage19"];	

				?>
					<h1>Dankeschön</h1>
				<?php

				mysql_query("INSERT INTO `$tname`(
					`alter`, 
					`geschlecht`, 
					`frage1`,
					`frage2`,
					`frage3`,
					`frage4`,
					`frage5`,
					`frage6`,
					`frage7`,
					`frage8`,
					`frage9`,
					`frage10`,
					`frage11`,
					`frage12`,
					`frage13`,
					`frage14`,
					`frage15`,
					`frage16`,
					`frage17`,
					`frage18`,
					`frage19`
				) VALUES (
					'$alter',
					'$geschlecht', 
					'$frage1',
					'$frage2',
					'$frage3',
					'$frage4',
					'$frage5',
					'$frage6',
					'$frage7',
					'$frage8',
					'$frage9',
					'$frage10',
					'$frage11',
					'$frage12',
					'$frage13',
					'$frage14',
					'$frage15',
					'$frage16',
					'$frage17',
					'$frage18',
					'$frage19'
				)");

			}
		}

	?>
	</div>
	</div>
</body>
</html>
