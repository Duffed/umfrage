<!doctype html>
<html>
	<head>		
		<title>Poll: Clothing</title>
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
					alert(eingabe+" is not a number");
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
						alert("Please choose a number between 0 and 10");
						document.getElementById(i).value = '';
					}
					
				} else {
					// Wert ist keine Zahl
					alert(eingabe+" is not a number");
					document.getElementById(i).value = '';
				}
			}

			function checkage(i) {
				var eingabe = document.getElementById(i).value;
				if ( !isNaN(eingabe) ) {
					// Wert ist eine Zahl
					if (eingabe >= 8 && eingabe <= 100) {
						document.getElementById(i).value = eingabe;
					} else {
						alert("Please tell us your real age");
						document.getElementById(i).value = '';
					}
					
				} else {
					// Wert ist keine Zahl
					alert(eingabe+" is not a number");
					document.getElementById(i).value = '';
				}
			}

		</script>
	</head>
<body>

	<div id="wrapper">
		<h1>Poll: <b>Clothing</b></h1>
		<p class="intro">Used only for training purposes</p>
		<p class="intro">Currency: <b>Euro</b></p>
		<p class="intro"><a href="index.php">Deutsche Version</a></p>
		<!--img-->

		<form action="thanks.php" method="POST">

			<!-- Alter & Geschlecht -->
			<div class="category cat1">

				<!-- Alter -->
				<div class="fragen_wrapper clearfix">
		
					<div class="frage fullwidth">
						<h3>Age:</h3>
						<p><input onChange="checkage('alter')" id="alter" type="text" name="alter"></p>
					</div>
				</div>

				<!-- Geschlecht -->
				<div class="fragen_wrapper clearfix">
			
					<div class="frage fullwidth">
						<h3>Sex:</h3>
						<p><input type="radio" name="geschlecht" id="geschlecht_m" value="m"><label for="geschlecht_m">Male</label></p>
						<p><input type="radio" name="geschlecht" id="geschlecht_w" value="w"><label for="geschlecht_w">Female</label></p>
					</div>
				</div>

			</div>

			<!-- Kategorie 1: Konsumverhalten -->
			<div class="category cat2">
				<h2>Consumer behavior</h2>
				<!-- Frage 1 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">1</div>
					<div class="frage">
						<h3>Estimate how many pieces of clothing you own (except underwear and shoes)</h3>
						<p><input type="text" onChange="checkValue('frage1')" id="frage1" name="frage1"></p>
					</div>
				</div>

				<!-- Frage 2 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">2</div>
					<div class="frage">
						<h3>How many pieces of clothing you own, where you can not remember when you wore it the last time?</h3>
						<p><input type="text" onChange="checkValue('frage2')" id="frage2" name="frage2"></p>
					</div>
				</div>

				<!-- Frage 3 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">3</div>
					<div class="frage">
						<h3>How often do you shop / buy clothes?</h3>
						<p><input type="radio" name="frage3" id="frage3_1" value="mehrmals die woche"><label for="frage3_1">Several times a week</label></p>
						<p><input type="radio" name="frage3" id="frage3_2" value="woechentlich"><label for="frage3_2">Weekly</label></p>
						<p><input type="radio" name="frage3" id="frage3_6" value="2-3x monatlich"><label for="frage3_6">2-3x a month</label></p>
						<p><input type="radio" name="frage3" id="frage3_3" value="monatlich"><label for="frage3_3">Monthly</label></p>
						<p><input type="radio" name="frage3" id="frage3_5" value="jaehrlich"><label for="frage3_5">Yearly</label></p>
					</div>
				</div>

				<!-- Frage 4 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">4</div>
					<div class="frage">
						<h3>About how much money do you spend per year for clothes?</h3>
						<p><input type="radio" name="frage4" id="frage4_1" value="0-100"><label for="frage4_1">0-50</label></p>
						<p><input type="radio" name="frage4" id="frage4_2" value="50-150"><label for="frage4_2">50-150</label></p>
						<p><input type="radio" name="frage4" id="frage4_3" value="150-300"><label for="frage4_3">150-300</label></p>
						<p><input type="radio" name="frage4" id="frage4_4" value="300-600"><label for="frage4_4">300-600</label></p>
						<p><input type="radio" name="frage4" id="frage4_5" value="600-1000"><label for="frage4_5">600-1000</label></p>
						<p><input type="radio" name="frage4" id="frage4_6" value=">1000"><label for="frage4_6">More than 1000</label></p>
					</div>
				</div>

			</div>


			<!-- Kategorie 2 -->
			<div class="category cat3">
				<h2>Financial aspect</h2>

				<!-- Frage 5 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">5</div>
					<div class="frage">
						<h3>How much money do you spend on average for a winter jacket?</h3>
						<p><input type="text" onChange="checkValue('frage5')" id="frage5" name="frage5"></p>
					</div>
				</div>

				<!-- Frage 6 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">6</div>
					<div class="frage">
						<h3>How much money do you spend on average for a sweater?</h3>
						<p><input type="text" onChange="checkValue('frage6')" id="frage6" name="frage6"></p>
					</div>
				</div>

				<!-- Frage 7 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">7</div>
					<div class="frage">
						<h3>How much money do you spend on average for a t-shirt?</h3>
						<p><input type="text" onChange="checkValue('frage7')" id="frage7" name="frage7"></p>
					</div>
				</div>

				<!-- Frage 8 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">8</div>
					<div class="frage">
						<h3>How much money do you spend on average for a shirt?</h3>
						<p><input type="text" onChange="checkValue('frage8')" id="frage8" name="frage8"></p>
					</div>
				</div>

				<!-- Frage 9 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">9</div>
					<div class="frage">
						<h3>How much money do you spend on average for a pair of jeans/pants?</h3>
						<p><input type="text" onChange="checkValue('frage9')" id="frage9" name="frage9"></p>
					</div>
				</div>

			</div>

			<!-- Kategorie 3 -->
			<div class="category cat4">
				<h2>Other purchase criteria</h2>
				<!-- Frage 10 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">10</div>
					<div class="frage">
						<h3>Please mark what is generally important to you when buying clothes</h3>
						<p><input type="checkbox" name="frage10[]" id="frage10_1" value="Marke"><label for="frage10_1">The brand</p>
						<p><input type="checkbox" name="frage10[]" id="frage10_2" value="Qualitaet"><label for="frage10_2">The quality</p>
						<p><input type="checkbox" name="frage10[]" id="frage10_3" value="Trend"><label for="frage10_3">Trend/Fashion</p>
						<p><input type="checkbox" name="frage10[]" id="frage10_4" value="Preis"><label for="frage10_4">Low price</p>
						<p><input type="checkbox" name="frage10[]" id="frage10_5" value="Herstellungsbedingungen"><label for="frage10_5">Fairtrade</p>
						<p><input type="checkbox" name="frage10[]" id="frage10_6" value="Pflegeleicht"><label for="frage10_6">Easy to clean</p>
					</div>
				</div>

				<!-- Frage 11 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">11</div>
					<div class="frage">
						<h3>And what is the most important??</h3>
						<p><input type="radio" name="frage11" id="frage11_1" value="Marke"><label for="frage11_1">The brand</label></p>
						<p><input type="radio" name="frage11" id="frage11_2" value="Qualitaet"><label for="frage11_2">The quality</label></p>
						<p><input type="radio" name="frage11" id="frage11_3" value="Trend"><label for="frage11_3">Trend/Fashion</label></p>
						<p><input type="radio" name="frage11" id="frage11_4" value="Kein Trend"><label for="frage11_4"><b>Not</b> in trend</label></p>
						<p><input type="radio" name="frage11" id="frage11_5" value="Preis"><label for="frage11_5">Low price</label></p>
						<p><input type="radio" name="frage11" id="frage11_6" value="Herstellungsbedingungen"><label for="frage11_6">Fairtrade</label></p>
						<p><input type="radio" name="frage11" id="frage11_7" value="Pflegeleicht"><label for="frage11_7">Easy to clean</label></p>
					</div>
				</div>

				<!-- Frage 12 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">12</div>
					<div class="frage">
						<h3>Is the brand of your kids clothes important to you??</h3>
						<p><input type="radio" name="frage12" id="frage12_1" value="ja"><label for="frage12_1">Yes always</label></p>
						<p><input type="radio" name="frage12" id="frage12_2" value="bei bestimmten"><label for="frage12_2">Only for certain parts like shoes for exmaple</label></p>
						<p><input type="radio" name="frage12" id="frage12_3" value="nein"><label for="frage12_3">No</label></p>
						<p><input type="radio" name="frage12" id="frage12_4" value="keine kinder"><label for="frage12_4">I don't have any kids</label></p>
					</div>
				</div>

			</div>

			<!-- Kategorie 4 -->
			<div class="category cat5">
				<h2>Buying behavior</h2>

				<!-- Frage 13 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">13</div>
					<div class="frage">
						<h3>When or why do you buy new clothes?</h3>
						<p><input type="radio" name="frage13" id="frage13_1" value="wenn noetig"><label for="frage13_1">Only when I really need new ones</label></p>
						<p><input type="radio" name="frage13" id="frage13_2" value="neuer trend"><label for="frage13_2">As soon as new collections come out</label></p>
						<p><input type="radio" name="frage13" id="frage13_3" value="spontan"><label for="frage13_3">Rather Spontaneously</label></p>
					</div>
				</div>

				<!-- Frage 14 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">14</div>
					<div class="frage">
						<h3>Do you buy new clothes rather spontaneously, or rather consciously?</h3> 
						<p>0 = I think carefully before I buy new clothes </p>
						<p>10 = I love shopping and find myself regularly going to spontaneously buy something</p>
						<p><input type="text" name="frage14" id="frage14" onChange="checkif0to10('frage14')"></p>
					</div>
				</div>

				<!-- Frage 15 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">15</div>
					<div class="frage">
						<h3>Where do you buy clothes?</h3> 
						<p><input type="radio" name="frage15" id="frage15_1" value="internet"><label for="frage15_1">Internet</label></p>
						<p><input type="radio" name="frage15" id="frage15_2" value="klamottengeschaeft"><label for="frage15_2">Clothing store</label></p>
						<p><input type="radio" name="frage15" id="frage15_3" value="supermarkt"><label for="frage15_3">Supermarket</label></p>
						<p><input type="radio" name="frage15" id="frage15_4" value="gebraucht"><label for="frage15_4">Used clothes (Flea market, eBay, ...)</label></p>
					</div>
				</div>

			</div>
				

			<!-- Kategorie 5 -->
			<div class="category cat6">
				<h2>Miscellaneous</h2>

				<!-- Frage 16 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">16</div>
					<div class="frage">
						<h3>What do you think about clothes that were made under questionable conditions?</h3> 
						<p><input type="radio" name="frage16" id="frage16_1" value="egal"><label for="frage16_1">I don't care as long as it's cheap</label></p>
						<p><input type="radio" name="frage16" id="frage16_2" value="wuerde gerne"><label for="frage16_2">I'd like to pay more attention to it but where am I supposed to buy clothes then?</label></p>
						<p><input type="radio" name="frage16" id="frage16_3" value="wenn moeglich"><label for="frage16_3">If possible I buy clothes that are produced under good conditions</label></p>
						<p><input type="radio" name="frage16" id="frage16_4" value="wichtig"><label for="frage16_4">I only buy clothes that are produced under good conditions.</label></p>
					</div>
				</div>

				<!-- Frage 17 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">17</div>
					<div class="frage">
						<h3>How important is it to you to be in "trend"?</h3> 
						<p>0 = Not at all</p>
						<p>10 = Very important</p>
						<p><input type="text" name="frage17" id="frage17" onChange="checkif0to10('frage17')"></p>
					</div>
				</div>

				<!-- Frage 18 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">18</div>
					<div class="frage">
						<h3>Do you stay faithful to a brand because of image quality or design?</h3> 
						<p><input type="radio" name="frage18" id="frage18_1" value="ja"><label for="frage18_1">Yes</label></p>
						<p><input type="radio" name="frage18" id="frage18_2" value="nein"><label for="frage18_2">No</label></p>
					</div>
				</div>

				<!-- Frage 19 -->
				<div class="fragen_wrapper clearfix">
					<div class="counter">19</div>
					<div class="frage">
						<h3>Is the presentation of a product in a clothing store or online important to you?</h3> 
						<p><input type="radio" name="frage19" id="frage19_1" value="ja"><label for="frage19_1">Yes</label></p>
						<p><input type="radio" name="frage19" id="frage19_2" value="nein"><label for="frage19_2">No</label></p>
					</div>
				</div>

			</div>

			<input value="Send" id="b_submit" type="submit" name="b_absenden">
		</form>
	</div>
</body>
</html>
