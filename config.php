<?php //Kirjaudutaan tietokantaan
$servername = "localhost";
$username = "T2017051004";
$password = "7ff679a2f3";
$dbname = "T2017051004";

// Luodaan yhteys
$conn = new mysqli($servername, $username, $password, $dbname);
// Tarkistetaan että yhteys toimii
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Määritetään käytettäväksi UTF-8 merkistöä tietokannan tiedoille
mysqli_set_charset($conn,"utf8");
?>