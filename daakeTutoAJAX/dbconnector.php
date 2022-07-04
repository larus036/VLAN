<?php //Extradatei um bei Datenbankänderungen schnell zu reagieren
$connection = mysqli_connect("localhost","root","","kunden");

if(!$connection)
{
    exit("Verbindungsfehler zur Datenbank");
}
?>