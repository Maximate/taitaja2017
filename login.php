<!--Poistetaan PHP virheilmoitukset ja aloitetaan sessio-->
<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();

	//Koodi lataa toisesta tiedostosta sisäänkirjautumisen palvelimelle
	@require ('config.php');

	$tunnus = $_POST['tunnus'];
	$salasana = $_POST['salasana'];

	$sql = "SELECT id FROM tunnukset WHERE tunnus = '" .$tunnus . "' AND salasana = '" . $salasana . "'";
	$result = $conn->query($sql);

	// jos löytyy rivejä, tunnus on olemassa
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo("id: " . $row["id"] . "<br>");
			$_SESSION['tunnus'] = $tunnus;
		}
	} else { // jos ei löydy, tunnusta ei ole, ei pääsyä
		//echo "0 results";
	 //header("location:register.php");
	  //echo($tunnus . $salasana);
	// exit();
	}
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

<body>
<!--Sisällytetään valikko.php tähän kohtaan-->
<?php include 'valikko.php';?>

<!--Sivun HTML pohjarakenne-->
<div class="main">
	<div class="sisalto">
	<div class="otsikko"><h1>Kirjaudu sisään:</h1></div>
		<?php
			if (strlen($_SESSION['tunnus'])<1) {
		?>
			<form action="login.php" method="post">
			  Käyttäjätunnus:<br>
			  <input type="text" name="tunnus" value="" placeholder="Käyttäjätunnus"><br>
			  Salasana:<br>
			  <input type="password" name="salasana" value="" placeholder="Salasana"><br><br>
			  <input type="submit" id="lahnappi" value="Kirjaudu sisään"><br><br><br>
			</form>

		<?php
			} else {
				echo "Olet kirjautuneena sisään, " . $_SESSION['tunnus'];
				echo "<br><br><a href='logout.php' style='color:#306787'>Kirjaudu ulos</a>";
			}
		?>
	</div>
</div>
		
<?php include 'footer.php';?>

</body>
</html> 