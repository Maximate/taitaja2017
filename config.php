<?php //Kirjaudutaan tietokantaan
$servername = "MYSQLCONNSTR_localdb";
$username = "azure";
$password = "password";
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
