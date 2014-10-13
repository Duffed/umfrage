<!doctype html>
<html>
	<head>		
		<title>Umfrage zum Thema Ernährung</title>
		<meta name="author" content="Joscha Diederichs & Max Gundlach">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css"	>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<script>
			// Prüft, ob wert eine Zahl ist
			// Anwenden mit (onChange=)checkValue('idname')
			function checkValue(i) {
				var eingabe = document.getElementById(i).value;
				if ( !isNaN(eingabe) ) {
					// Wert ist eine Zahl
					document.getElementById(i).value = eingabe;
				} else {
					// Wert ist keine Zahl
					alert(eingabe+" ist keine Zahl");
					document.getElementById(i).value = '';
				}
			}

			function checkif0to10(i) {
				var eingabe = document.getElementById(i).value;
				if ( !isNaN(eingabe) ) {
					// Wert ist eine Zahl
					if (eingabe >= 0 && eingabe <= 10) {
						document.getElementById(i).value = eingabe;
					} else {
						alert("Bitte ein Zahl zwischen 0 und 10 eingeben");
						document.getElementById(i).value = '';
					}
					
				} else {
					// Wert ist keine Zahl
					alert(eingabe+" ist keine Zahl");
					document.getElementById(i).value = '';
				}
			}

		</script>
	</head>
<body>

	<div id="wrapper">
		<h1>Umfrage: <b>Bekleidung</b></h1>
		<p class="intro">Die Umfrage ist völlig Anonym und dient nur zu Schulungszwecken</p>
		<!--img-->

		<form action="danke.php" method="POST">

			<!-- Alter & Geschlecht -->
			<div class="category cat1">

				<!-- Alter -->
				<div class="fragen_wrapper clearfix">
		
					<div class="frage fullwidth">
						<h3>Alter:</h3>
						<p><input onChange="checkValue('alter')" id="alter" type="text" name="alter"></p>
					</div>
				</div>

				<!-- Geschlecht -->
				<div class="fragen_wrapper clearfix">
			
					<div class="frage fullwidth">
						<h3>Geschlecht:</h3>
						<p><input type="radio" name="geschlecht" id="geschlecht_m" value="m"><label for="geschlecht_m">Männlich</label></p>
						<p><input type="radio" name="geschlecht" id="geschlecht_w" value="w"><label for="geschlecht_w">Weiblich</label></p>
					</div>
				</div>

			</div>

			<!-- Kategorie 1: Konsumverhalten -->
			<div class="category cat2">
				<h2>Konsumverhalten</h2>

				<!-- Frage 1 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">1</div>
					<div class="frage">
						<h3>Schätzen Sie, wie viele Kleidungsstücke Sie besitzen (ausgenommen Unterwäsche & Schuhe)</h3>
						<p><input type="text" onChange="checkValue('frage1')" id="frage1" name="frage1"></p>
					</div>
				</div>

				<!-- Frage 2 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">2</div>
					<div class="frage">
						<h3>Wie viele Kleidungsstücke besitzen Sie, bei denen Sie sich nicht daran erinnern können, wann Sie sie das letzte Mal getragen haben?</h3>
						<p><input type="text" onChange="checkValue('frage2')" id="frage2" name="frage2"></p>
					</div>
				</div>

				<!-- Frage 3 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">3</div>
					<div class="frage">
						<h3>Wie oft gehen Sie shoppen/Klamotten kaufen?</h3>
						<p><input type="radio" name="frage3" id="frage3_1" value="mehrmals die woche"><label for="frage3_1">Mehrmals die Woche</label></p>
						<p><input type="radio" name="frage3" id="frage3_2" value="woechentlich"><label for="frage3_2">Wöchtenlich</label></p>
						<p><input type="radio" name="frage3" id="frage3_3" value="monatlich"><label for="frage3_3">Monatlich</label></p>
						<p><input type="radio" name="frage3" id="frage3_4" value="2 mal im jahr"><label for="frage3_4">2-3x im Jahr</label></p>
						<p><input type="radio" name="frage3" id="frage3_5" value="jaehrlich"><label for="frage3_5">Jährlich</label></p>
					</div>
				</div>

				<!-- Frage 4 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">4</div>
					<div class="frage">
						<h3>Wieviel Geld geben Sie jährlich ca. für Klamotten aus?</h3>
						<p><input type="radio" name="frage4" id="frage4_1" value="0-100"><label for="frage4_1">0-50</label></p>
						<p><input type="radio" name="frage4" id="frage4_2" value="50-150"><label for="frage4_2">50-150</label></p>
						<p><input type="radio" name="frage4" id="frage4_3" value="150-300"><label for="frage4_3">150-300</label></p>
						<p><input type="radio" name="frage4" id="frage4_4" value="300-600"><label for="frage4_4">300-600</label></p>
						<p><input type="radio" name="frage4" id="frage4_5" value="600-1000"><label for="frage4_5">600-1000</label></p>
						<p><input type="radio" name="frage4" id="frage4_6" value=">1000"><label for="frage4_6">Mehr als 1000</label></p>
					</div>
				</div>

			</div>


			<!-- Kategorie 2 -->
			<div class="category cat3">
				<h2>Finanzieller Aspekt</h2>

				<!-- Frage 5 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">5</div>
					<div class="frage">
						<h3>Wieviel Geld geben Sie im Schnitt für eine <b>Winterjacke</b> aus?</h3>
						<p><input type="text" onChange="checkValue('frage5')" id="frage5" name="frage5"></p>
					</div>
				</div>

				<!-- Frage 6 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">6</div>
					<div class="frage">
						<h3>Wieviel Geld geben Sie im Schnitt für einen <b>Pullover</b> aus?</h3>
						<p><input type="text" onChange="checkValue('frage6')" id="frage6" name="frage6"></p>
					</div>
				</div>

				<!-- Frage 7 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">7</div>
					<div class="frage">
						<h3>Wieviel Geld geben Sie im Schnitt für eine <b>T-Shirt/Top</b> aus?</h3>
						<p><input type="text" onChange="checkValue('frage7')" id="frage7" name="frage7"></p>
					</div>
				</div>

				<!-- Frage 8 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">8</div>
					<div class="frage">
						<h3>Wieviel Geld geben Sie im Schnitt für ein/eine <b>Hemd/Bluse</b> aus?</h3>
						<p><input type="text" onChange="checkValue('frage8')" id="frage8" name="frage8"></p>
					</div>
				</div>

				<!-- Frage 9 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">9</div>
					<div class="frage">
						<h3>Wieviel Geld geben Sie im Schnitt für eine <b>Hose/Jeans</b> aus?</h3>
						<p><input type="text" onChange="checkValue('frage9')" id="frage9" name="frage9"></p>
					</div>
				</div>

			</div>

			<!-- Kategorie 3 -->
			<div class="category cat4">
				<h2>Sonstike Kaufkriterien</h2>

				<!-- Frage 10 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">10</div>
					<div class="frage">
						<h3>Kreuzen Sie bitte an, was Ihnen beim Kauf von Kleidungsstücken generell wichtig ist</h3>
						<p><input type="checkbox" name="frage10" id="frage10_1" value="Marke"><label for="frage10_1">Die Marke/Firma</p>
						<p><input type="checkbox" name="frage10" id="frage10_2" value="Qualitaet"><label for="frage10_2">Die Qualität des Produktes</p>
						<p><input type="checkbox" name="frage10" id="frage10_3" value="Trend"><label for="frage10_3">Das Produkt soll im Trend liegen/in der Mode sein</p>
						<p><input type="checkbox" name="frage10" id="frage10_4" value="Preis"><label for="frage10_4">Der Preis sollte möglichst niedrig sein</p>
						<p><input type="checkbox" name="frage10" id="frage10_5" value="Herstellungsbedingungen"><label for="frage10_5">Die Bedingungen bei der Herstellung für die Arbeiter (Fairtrade)</p>
						<p><input type="checkbox" name="frage10" id="frage10_6" value="Pflegeleicht"><label for="frage10_6">Das Kleidungsstück muss Pflegeleicht sein</p>
					</div>
				</div>

				<!-- Frage 11 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">11</div>
					<div class="frage">
						<h3>Und was ist am wichtigsten?</h3>
						<p><input type="radio" name="frage11" id="frage11_1" value="Marke"><label for="frage11_1">Die Marke/Firma</label></p>
						<p><input type="radio" name="frage11" id="frage11_2" value="Qualitaet"><label for="frage11_2">Die Qualität des Produktes</label></p>
						<p><input type="radio" name="frage11" id="frage11_3" value="Trend"><label for="frage11_3">Das Produkt soll im Trend liegen/in der Mode sein</label></p>
						<p><input type="radio" name="frage11" id="frage11_4" value="Kein Trend"><label for="frage11_4">Das Produkt soll <b>nicht</b> im Trend liegen/in der Mode sein</label></p>
						<p><input type="radio" name="frage11" id="frage11_5" value="Preis"><label for="frage11_5">Der Preis sollte möglichst niedrig sein</label></p>
						<p><input type="radio" name="frage11" id="frage11_6" value="Herstellungsbedingungen"><label for="frage11_6">Die Bedingungen bei der Herstellung für die Arbeiter (Fairtrade)</label></p>
						<p><input type="radio" name="frage11" id="frage11_7" value="Pflegeleicht"><label for="frage11_7">Das Kleidungsstück muss Pflegeleicht sein</label></p>
					</div>
				</div>

				<!-- Frage 12 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">12</div>
					<div class="frage">
						<h3>Ist Ihnen die Marke der Kleidungsstücke Ihrer Kinder wichtig?</h3>
						<p><input type="radio" name="frage12" id="frage12_1" value="ja"><label for="frage12_1">Ja, immer</label></p>
						<p><input type="radio" name="frage12" id="frage12_2" value="bei bestimmten"><label for="frage12_2">Nur bei bestimmten Kleidungsstücke (z.B.) Schuhe</label></p>
						<p><input type="radio" name="frage12" id="frage12_3" value="nein"><label for="frage12_3">Nein</label></p>
						<p><input type="radio" name="frage12" id="frage12_4" value="keine kinder"><label for="frage12_4">Ich habe keine Kinder</label></p>
					</div>
				</div>

			</div>

			<!-- Kategorie 4 -->
			<div class="category cat5">
				<h2>Kaufverhalten</h2>

				<!-- Frage 13 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">13</div>
					<div class="frage">
						<h3>Wann bzw. warum kaufen Sie Klamotten?</h3>
						<p><input type="radio" name="frage13" id="frage13_1" value="wenn noetig"><label for="frage13_1">Nur, wenn ich wirklich neue brauche</label></p>
						<p><input type="radio" name="frage13" id="frage13_2" value="neuer trend"><label for="frage13_2">Sobald neue Kollektionen erscheinen/neue Trends</label></p>
						<p><input type="radio" name="frage13" id="frage13_3" value="spontan"><label for="frage13_3">Spontan, wenn mir danach ist</label></p>
					</div>
				</div>

				<!-- Frage 14 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">14</div>
					<div class="frage">
						<h3>Kaufen Sie Mode eher bewusst oder spontan ein?</h3> 
						<p>0 = Ich überlege genau, bevor ich mir neue Klamotten kaufe </p>
						<p>10 = Ich liebe shoppen und erwische mich regelmäßig dabei, spontan etwas zu kaufen</p>
						<p><input type="text" name="frage14" id="frage14" onChange="checkif0to10('frage14')"></p>
					</div>
				</div>

				<!-- Frage 15 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">15</div>
					<div class="frage">
						<h3>Wo kaufen Sie am liebsten Klamotten?</h3> 
						<p><input type="radio" name="frage15" id="frage15_1" value="internet"><label for="frage15_1">Im Internet</label></p>
						<p><input type="radio" name="frage15" id="frage15_2" value="klamottengeschaeft"><label for="frage15_2">Im Klamotten-Geschäft</label></p>
						<p><input type="radio" name="frage15" id="frage15_3" value="supermarkt"><label for="frage15_3">Im Supermarkt</label></p>
						<p><input type="radio" name="frage15" id="frage15_4" value="gebraucht"><label for="frage15_4">Gebraucht (Flohmarkt, Kleiderkreisel, eBay, ...)</label></p>
					</div>
				</div>

			</div>


			<!-- Kategorie 5 -->
			<div class="category cat6">
				<h2>Psychologischer Aspekt</h2>

				<!-- Frage 16 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">16</div>
					<div class="frage">
						<h3>Wie denken Sie über Klamotten, die unter fragwürdigen Bedingungen hergestellt wurden?</h3> 
						<p><input type="radio" name="frage16" id="frage16_1" value="egal"><label for="frage16_1">Ist mir egal, hauptsache günstig.</label></p>
						<p><input type="radio" name="frage16" id="frage16_2" value="wuerde gerne"><label for="frage16_2">Ich würde gerne darauf achten, aber wo soll man dann noch etwas kaufen?</label></p>
						<p><input type="radio" name="frage16" id="frage16_3" value="wenn moeglich"><label for="frage16_3">Wenn möglich, kaufe ich nur Kleidung, die nicht unter schlechten Bedingungen hergestellt wird.</label></p>
						<p><input type="radio" name="frage16" id="frage16_4" value="wichtig"><label for="frage16_4">Ich achte sehr darauf und kaufe keine Kleidung, die unter schlechten Bedingungen hergestellt wird.</label></p>
					</div>
				</div>

				<!-- Frage 17 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">17</div>
					<div class="frage">
						<h3>Wie wichtig ist es Ihnen, im Trend zu liegen?</h3> 
						<p>0 = Überhaupt nicht</p>
						<p>10 = Sehr wichtig</p>
						<p><input type="text" name="frage17" id="frage17" onChange="checkif0to10('frage17')"></p>
					</div>
				</div>

				<!-- Frage 18 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">18</div>
					<div class="frage">
						<h3>Sind Sie jemand der einer bestimmten Marke aufgrund von Image, Qualität oder Design immer treu bleibt?</h3> 
						<p><input type="radio" name="frage18" id="frage18_1" value="ja"><label for="frage18_1">Ja</label></p>
						<p><input type="radio" name="frage18" id="frage18_2" value="nein"><label for="frage18_2">Nein</label></p>
					</div>
				</div>

				<!-- Frage 19 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">19</div>
					<div class="frage">
						<h3>Ist Ihnen die Präsentation eines Produktes im Geschäft oder im Online-Shop wichtig?</h3> 
						<p><input type="radio" name="frage19" id="frage19_1" value="ja"><label for="frage19_1">Ja</label></p>
						<p><input type="radio" name="frage19" id="frage19_2" value="nein"><label for="frage19_2">Nein</label></p>
					</div>
				</div>

			</div>

			<input id="b_submit" onclick="checkifeverythingisfilledyey()" type="submit" name="b_absenden">
		</form>
	</div>
</body>
</html>
