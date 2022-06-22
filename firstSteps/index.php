<!<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="">
	</head>
	<body>
	
<?php
	include("scripts/conn.php");
	include("scripts/vergleich.php");

	if($db != null)
	{
		$abfrage = "SELECT * FROM artikel";
		$ergebnis = mysqli_query ($db, $abfrage);	//Abfrage wird zwischengespeichert
		if($ergebnis != null)
		{
			echo("Die 'For-Schleife Methode' <br>");
			 for($i = 0;$i < $ergebnis->num_rows; $i++ ) //num_rows gibt die Anzahl der Rows an, die in dem Objekt gespeichert wurden
			 {
				$row = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC);
				echo($row["A_Nr"]." - ".$row['A_Name']." - ".$row['A_Preis']."<br>"); 
			 }
			 echo("<br> <br>");
			 $ergebnis = mysqli_query ($db, $abfrage);

			 echo("Die 'While-Schleife Methode' <br>");
			 while($row = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC))
			 {
				echo($row["A_Nr"]." - ".$row['A_Name']." - ".$row['A_Preis']."<br>");
			 }

		}
	}
?>
<br>
<br>
<form name="login" method="post" action="scripts/vergleich.php">
	<input type= "text" name="bname" id="bname">
	<input type="password" name="pw" id="pw">
	<input type="button" name="submit" id="submit" value="Lets Go!">

		
	</body>
</html>

