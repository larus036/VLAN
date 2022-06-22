<?php

    $db = mysqli_connect ("localhost", "root", "", "testfirma");	
    if(!$db)
    {
        exit("Verbindungsfehler: ".mysqli_connect_error());
    }

?>