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
	<div class="otsikko"><h1>Mikä ihmeen tasoitus?</h1></div>
		<div class="laatikko">
		<p>Tässä tullaan kertomaan mitä tasoitus tarkoittaa, kunhan päivitetään.</p>
		</div>
	</div>
</div>

<?php include 'footer.php';?>

</body>
</html> 