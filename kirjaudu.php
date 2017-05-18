<!--Poistetaan PHP virheilmoitukset, ei tärkeitä-->
<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
header( "refresh:3;url=tulokset.php");
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
	<div class="otsikko"><h1>Sisäänkirjautuminen</h1></div>
		<div class="laatikko">
			 <?php

		//muuttujat käyttäjän antamille tiedoille
			$ktunnus=$_POST['ktunnus'];
			$ksalasana=$_POST['ksalasana'];

			$sql = "SELECT * FROM tunnukset WHERE tunnus='$ktunnus' AND salasana='$ksalasana'";

			if ($conn->query($sql) === TRUE) {
				echo "Olet kirjautunut sisään onnistuneesti. Sinut ohjataan palveluun...";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			?>
		</div>
	</div>
</div>

<?php include 'footer.php';?>

</body>
</html> 