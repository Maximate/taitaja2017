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

<!--Etusivun tekstit ja kuvat:-->
<?php
$kuva1 = "<img src='kuvat/kuva1.jpg'>";
$teksti1 = 'Tältä sivustolta löydät uuden ja liikkumiseen innostavan palvelun. Yleisurheilun tasoitusjärjestelmän! Saatat nyt miettiä mitä tasoitus tarkoittaa. Tasoitus on tavallaan sinun oma taitosi muutettuna pisteiksi. Löydät lisätietoja aiheesti sivustoltamme kohdasta "Mikä ihmeen tasoitus?". ';
$kuva2 = '<img src="kuvat/kuva3.jpg">';
$teksti2 = 'Oman kehityksen seuraaminen voi olla välillä hankalaa. Tuloksista pitäisi pitää kirjaa paperille, joka kuitenkin hukkuisi tai menisi pilalle sateessa. Onneksi tähän on nyt saatavilla uusi ja moderni palvelu!';
$kuva3 = '<img src="kuvat/kuva2.jpg">';
$teksti3 = 'Palvelun käyttäminen on täysin maksutonta ja helppoa. Kirjaudut vain palveluun ja alat syöttää tuloksiasi. Palvelu antaa sinulle välittömän palautteen ja innostaa sinua parantamaan tulostasi. Voit myös vertailla tuloksia kavereidesi kanssa!';
?>

<!--Sivun HTML pohjarakenne-->
<div class="main">
	<div class="sisalto">
	<div class="otsikko"><h1>Miten tää toimii?</h1></div>

	
		<div class="vasen" id="tietokone"><?php echo $kuva1; ?></div>
		<div class="oikea" id="tietokone"><?php echo $teksti1; ?></div>
		
		<div class="vasen" id="tietokone"><?php echo $teksti2; ?></div>
		<div class="oikea" id="tietokone"><?php echo $kuva2; ?></div>
		
		<div class="vasen" id="tietokone"><?php echo $kuva3; ?></div>
		<div class="oikea" id="tietokone"><?php echo $teksti3; ?></div>
		
		
		<div class="vasen" id="mobiili"><?php echo $kuva1; ?></div>
		<div class="oikea" id="mobiili"><?php echo $teksti1; ?></div>
		
		<div class="vasen" id="mobiili"><?php echo $kuva2; ?></div>
		<div class="oikea" id="mobiili"><?php echo $teksti2; ?></div>
		
		<div class="vasen" id="mobiili"><?php echo $kuva3; ?></div>
		<div class="oikea" id="mobiili"><?php echo $teksti3; ?></div>

	</div>
</div>

<?php include 'footer.php';?>

</body>
</html> 