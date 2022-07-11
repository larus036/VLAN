<?php
    $name = $_POST['username'];
    $password = $_POST['password'];

    if($name =="" || $password=="")
    {
        //Feld darf nicht leer sein
        echo("<h1> Ein Feld war leer"); 
        
    }
    else
    {
        //dbconnector wird eingebunden. Auch alle damit verwendeten $Variabeln
        include("dbconnector.php");
        
        //Query Abfrage wird in einer Variabel gespeichert
        $TheQuery = "SELECT * FROM login WHERE username ='$name' AND pw ='$password'";

        //Verbindung mit der Tabelle mit der Query Abfrage
        $resultUsers = mysqli_query($connection,$TheQuery);

        //Menge wird geprüft, durch num_rows (Anzahl der gefundenen Einträge)
        $menge = mysqli_num_rows($resultUsers);

        if ($menge == 0)
        {
            echo("User nicht gefunden<p>");
        }
        else
        {
            if($menge == 1)
            {
                
                header('Location:form.php');
            }
        }
    }
?>