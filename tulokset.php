<!--Poistetaan PHP virheilmoitukset, ei tärkeitä-->
<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>

<!--Aloitetaan HTML koodi-->
<!DOCTYPE html>
<head>

<?php
@include('header.php');
?>

<!--Määritetään sivun otsikko-->
<title>Yleisurheilutaitaja</title>
</head>

<!--Ladataan sisäänkirjautuminen tietokantaan-->
<?php
@require ('config.php');
?>

<body>
<!--Sisällytetään valikko.php tähän kohtaan-->
<?php include 'valikko.php';?>

<!--Sivun HTML pohjarakenne-->
<div class="main">
	<div class="sisalto">
	<div class="otsikko"><h1>Oma tasoitus</h1></div>
		<div class="laatikko">
		<p>Tällä sivulla voit syöttää omia yleisurheilutuloksiasi järjestelmään ja näet tasoituksesi. Muista kirjautua sisään, jotta tuloksesi tallentuvat tunnuksellesi! Sisäänkirjautumisen löydät valikkopalkista.</p>
		<div class="laskuri">
			<h3>Tulosten syöttäminen</h3>
			<form action="tulokset.php" method="post">
			<div class="puolikas">
			<p>Pikajuoksut</p>
				<input type="number" step="any" name="40m" value="" placeholder="40m"><br>
				<input type="number" step="any" name="60m" value="" placeholder="60m"><br>
				<input type="number" step="any" name="80m" value="" placeholder="80m"><br>
				<input type="number" step="any" name="100m" value="" placeholder="100m"><br>
				<input type="number" step="any" name="150m" value="" placeholder="150m"><br>
				<input type="number" step="any" name="200m" value="" placeholder="200m"><br>
				<input type="number" step="any" name="300m" value="" placeholder="300m"><br>
				<input type="number" step="any" name="400m" value="" placeholder="400m"><br>
				<input type="number" step="any" name="60maj" value="" placeholder="60maj"><br>
				<input type="number" step="any" name="80maj" value="" placeholder="80maj"><br>
				<input type="number" step="any" name="100maj" value="" placeholder="100maj"><br>
				<input type="number" step="any" name="200maj" value="" placeholder="200maj"><br>
			</div>
			<div class="puolikas">
			<p>Kestävyys</p>
			  <input type="number" step="any" name="600m" value="" placeholder="600m"><br>
			  <input type="number" step="any" name="800m" value="" placeholder="800m"><br>
			  <input type="number" step="any" name="1000m" value="" placeholder="1000m"><br>
			  <input type="number" step="any" name="1500m" value="" placeholder="1500m"><br>
			  <input type="number" step="any" name="2000m" value="" placeholder="2000m"><br>
			  <input type="number" step="any" name="3000m" value="" placeholder="3000m"><br>
			</div>
			<div class="puolikas">
			<p>Hypyt</p>
			  <input type="number" name="korkeus" value="" placeholder="korkeus"><br>
			  <input type="number" name="seivas" value="" placeholder="seiväs"><br>
			  <input type="number" name="pituus" value="" placeholder="pituus"><br>
			  <input type="number" name="kolmiloikka" value="" placeholder="kolmiloikka"><br>
			</div>
			<div class="puolikas">
			<p>Heitot</p>
			  <input type="number" step="any" name="kuula" value="" placeholder="kuula"><br>
			  <input type="number" step="any" name="kiekko" value="" placeholder="kiekko"><br>
			  <input type="number" step="any" name="moukari" value="" placeholder="moukari"><br>
			  <input type="number" step="any" name="keihas" value="" placeholder="keihäs"><br>
			  <input type="number" step="any" name="pallo" value="" placeholder="pallo"><br>
			</div>
				<input type="submit" id="lahnappi" value="Tallenna"><br>
			</form>
		</div><br><br>
		</div>
	</div>
</div>

<?php
$_SESSION['neljak'] = $_POST['40m'];
$_SESSION['kuusik'] = $_POST['60m'];
$_SESSION['kahdeks'] = $_POST['80m'];
$_SESSION['satak'] = $_POST['100m'];
$_SESSION['satavik'] = $_POST['150m'];
$_SESSION['kasatak'] = $_POST['200m'];
$_SESSION['kosatak'] = $_POST['300m'];
$_SESSION['nesatak'] = $_POST['400m'];
$_SESSION['kuusikmaj'] = $_POST['60maj'];
$_SESSION['kahdeksmaj'] = $_POST['80maj'];
$_SESSION['satakmaj'] = $_POST['100maj'];
$_SESSION['kasatakmaj'] = $_POST['200maj'];

if (empty($_SESSION['neljak'] or $_SESSION['kahdeks'] or $_SESSION['kuusik'] or $_SESSION['satak'] or $_SESSION['satavik'] or $_SESSION['kasatak'] or $_SESSION['kosatak'] or $_SESSION['nesatak'] or $_SESSION['kuusikmaj'] or $_SESSION['kahdeksmaj'] or $_SESSION['satakmaj'] or $_SESSION['kasatakmaj'])) {
	echo "Et ole syöttänyt yhteenkään pikajuoksun kenttään tulosta!<br>";
	$denied = 1;
};

$_SESSION['kusatak'] = $_POST['600m'];
$_SESSION['kahdsatak'] = $_POST['800m'];
$_SESSION['tuhatk'] = $_POST['1000m'];
$_SESSION['tuhavik'] = $_POST['1500m'];
$_SESSION['katuhak'] = $_POST['2000m'];
$_SESSION['kotuhak'] = $_POST['3000m'];

if (empty($_SESSION['kusatak'] or $_SESSION['kahdsatak'] or $_SESSION['tuhatk'] or $_SESSION['tuhavik'] or $_SESSION['katuhak'] or $_SESSION['kotuhak'] )) {
	echo "Et ole syöttänyt yhteenkään kestävyyden kenttään tulosta!<br>";
	$denied = 1;
};

$_SESSION['korkeus1'] = $_POST['korkeus'];
$_SESSION['seivas1'] = $_POST['seivas'];
$_SESSION['pituus1'] = $_POST['pituus'];
$_SESSION['kolmiloikka1'] = $_POST['kolmiloikka'];

if (empty($_SESSION['korkeus1'] or $_SESSION['seivas1'] or $_SESSION['pituus1'] or $_SESSION['kolmiloikka1'])) {
	echo "Et ole syöttänyt yhteenkään hypyt kenttään tulosta!<br>";
	$denied = 1;
};

$_SESSION['kuula1'] = $_POST['kuula'];
$_SESSION['kiekko1'] = $_POST['kiekko'];
$_SESSION['moukari1'] = $_POST['moukari'];
$_SESSION['keihas1'] = $_POST['keihas'];
$_SESSION['pallo1'] = $_POST['pallo'];

if (empty($_SESSION['kuula1'] or $_SESSION['kiekko1'] or $_SESSION['moukari1'] or $_SESSION['keihas1'] or $_SESSION['pallo1'])) {
	echo "Et ole syöttänyt yhteenkään heitot kenttään tulosta!<br>";
	$denied = 1;
};

	if(!empty($_SESSION['neljak'])) {
		$juoksu1 = $_SESSION['neljak'] / 5.36;
		$juoksu11 = 1010 / pow($juoksu1, 5.2632) -10;
	} else {};
	
	if(!empty($_SESSION['kuusik'])) {
		$juoksu2 = $_SESSION['kuusik'] / 7.38;
		$juoksu22 = 1010 / pow($juoksu2, 4.7619) -10;
	} else {};
	
	if(!empty($_SESSION['kahdeks'])) {
		$juoksu3 = $_SESSION['kahdeks'] / 9.43;
		$juoksu33 = 1010 / pow($juoksu3, 4.5455) -10;
	} else {};
	
	if(!empty($_SESSION['satak'])) {
		$juoksu4 = $_SESSION['satak'] / 11.41;
		$juoksu44 = 1010 / pow($juoksu4, 4.6512) -10;
	} else {};
	
	if(!empty($_SESSION['satavik'])) {
		$juoksu5 = $_SESSION['satavik'] / 17.21;
		$juoksu55 = 1010 / pow($juoksu5, 4.4444) -10;
	} else {};
	
	if(!empty($_SESSION['kasatak'])) {
		$juoksu6 = $_SESSION['kasatak'] / 23.09;
		$juoksu66 = 1010 / pow($juoksu6, 4.3478) -10;
	} else {};
	
	if(!empty($_SESSION['kosatak'])) {
		$juoksu7 = $_SESSION['kosatak'] / 37.25;
		$juoksu77 = 1010 / pow($juoksu7, 4.0816) -10;
	} else {};
	
	if(!empty($_SESSION['nesatak'])) {
		$juoksu8 = $_SESSION['nesatak'] / 51.59;
		$juoksu88 = 1010 / pow($juoksu8, 3.9216) -10;
	} else {};
	
	if(!empty($_SESSION['kuusikmaj'])) {
		$juoksu9 = $_SESSION['kuusikmaj'] / 8.57;
		$juoksu99 = 1010 / pow($juoksu9, 3.2258) -10;
	} else {};
	
	if(!empty($_SESSION['kahdeksmaj'])) {
		$juoksu10 = $_SESSION['kahdeksmaj'] / 11.07;
		$juoksu1010 = 1010 / pow($juoksu10, 3.2258) -10;
	} else {};
	
	if(!empty($_SESSION['satakmaj'])) {
		$juoksu11 = $_SESSION['satakmaj'] / 13.62;
		$juoksu1111 = 1010 / pow($juoksu11, 3.2258) -10;
	} else {};
	
	if(!empty($_SESSION['kasatakmaj'])) {
		$juoksu12 = $_SESSION['kasatakmaj'] / 26.69;
		$juoksu1212 = 1010 / pow($juoksu12, 3.5088) -10;
	} else {};

	if(!empty($_SESSION['kusatak'])) {
		$kestavyys1 = $_SESSION['kusatak'] / 86.48;
		$kestavyys11 = 1010 / pow($kestavyys1, 4) -10;
	} else {};
	
	if(!empty($_SESSION['kahdsatak'])) {
		$kestavyys2 = $_SESSION['kahdsatak'] / 120.83;
		$kestavyys22 = 1010 / pow($kestavyys2, 4) -10;
	} else {};
	
	if(!empty($_SESSION['tuhatk'])) {
		$kestavyys3 = $_SESSION['tuhatk'] / 156.99;
		$kestavyys33 = 1010 / pow($kestavyys3, 4) -10;
	} else {};
	
	if(!empty($_SESSION['tuhavik'])) {
		$kestavyys4 = $_SESSION['tuhavik'] / 247.03;
		$kestavyys44 = 1010 / pow($kestavyys4, 3.9216) -10;
	} else {};
	
	if(!empty($_SESSION['katuhak'])) {
		$kestavyys5 = $_SESSION['katuhak'] / 344.2;
		$kestavyys55 = 1010 / pow($kestavyys5, 3.8462) -10;
	} else {};
	
	if(!empty($_SESSION['kotuhak'])) {
		$kestavyys6 = $_SESSION['kotuhak'] / 534.16;
		$kestavyys66 = 1010 / pow($kestavyys6, 3.7736) -10;
	} else {};

	if(!empty($_SESSION['korkeus1'])) {
		$hypyt1 = 194.45 / $_SESSION['korkeus1'];
		$hypyt11 = 1010 / pow($hypyt1, 2.9412) -10;
	} else {};
	
	if(!empty($_SESSION['seivas1'])) {
		$hypyt2 = 437.5 / $_SESSION['seivas1'];
		$hypyt22 = 1010 / pow($hypyt2, 1.9417) -10;
	} else {};
	
	if(!empty($_SESSION['pituus1'])) {
		$hypyt3 = 676.5 / $_SESSION['pituus1'];
		$hypyt33 = 1010 / pow($hypyt3, 2.439) -10;
	} else {};
	
	if(!empty($_SESSION['kolmiloikka1'])) {
		$hypyt4 = 13.94 / $_SESSION['kolmiloikka1'];
		$hypyt44 = 1010 / pow($hypyt4, 2.5316) -10;
	} else {};
	
	if(!empty($_SESSION['kuula1'])) {
		$heitot1 = 18.28 / $_SESSION['kuula1'];
		$heitot11 = 1010 / pow($heitot1, 1.2195) -10;
	} else {};
	
	if(!empty($_SESSION['kiekko1'])) {
		$heitot2 = 60.38 / $_SESSION['kiekko1'];
		$heitot22 = 1010 / pow($heitot2, 1.1765) -10;
	} else {};
	
	if(!empty($_SESSION['moukari1'])) {
		$heitot3 = 62.58 / $_SESSION['moukari1'];
		$heitot33 = 1010 / pow($heitot3, 1.0309) -10;
	} else {};
	
	if(!empty($_SESSION['keihas1'])) {
		$heitot4 = 71.02 / $_SESSION['keihas1'];
		$heitot44 = 1010 / pow($heitot4, 1.1765) -10;
	} else {};
	
	if(!empty($_SESSION['pallo1'])) {
		$heitot5 = 95.94 / $_SESSION['pallo1'];
		$heitot55 = 1010 / pow($heitot5, 1.4493) -10;
	} else {};

	echo "<b>Juoksulajit:</b> <br>40m: " . $juoksu11 . "<br>60m: ". $juoksu22. "<br>80m: ". $juoksu33 . "<br>100m: ". $juoksu44 . "<br>150m: ". $juoksu55 . "<br>200m: ". $juoksu66 . "<br>300m: ". $juoksu77 . "<br>400m: ". $juoksu88 . "<br>60maj: ". $juoksu99. "<br>80maj: ". $juoksu1010 . "<br>100maj: ". $juoksu1111. "<br>200maj: ". $juoksu1212 . "<br>";
	echo "<b>Kestävyyslajit:</b> <br>600m: " . $kestavyys11. "<br>800m: ". $kestavyys22. "<br>1000m: ". $kestavyys33. "<br>1500m: ". $kestavyys44. "<br>2000m: ". $kestavyys55. "<br>3000m: ". $kestavyys66 . "<br>";
	echo "<b>Hyppylajit:</b> <br>Korkeus: " . $hypyt11. "<br>Seiväs: ". $hypyt22. "<br>Pituus: ". $hypyt33. "<br>Kolmiloikka: ". $hypyt44 . "<br>";
	echo "<b>Heittolajit:</b> <br>Kuula: " . $heitot11. "<br>Kiekko: ". $heitot22. "<br>Moukari: ". $heitot33. "<br>Keihäs: ". $heitot44. "<br>Pallo: ". $heitot55 . "<br>";
	
?>
<span style="font-size:1.6em;">Tasoituksesi on</span> <span style="font-size:2.4em;color:green;">22,8</span><br><br><br><br><br>
<?php include 'footer.php';?>

</body>
</html> 