<!DOCTYPE html>
<html lang="de">
<head>
    <title>B117 LF09 Projekt</title>
    <link href="Index.css" rel="stylesheet">
</head>
<body>

<?php
//PHP Sektion mit SQL Verbindung
        $database =  new mysqli("localhost", "root", "", "b217");
        $switches = $database->query("SELECT * FROM switch");
        $vlan = $database->query("SELECT * FROM vlan");
        $vcolor = $database->query("SELECT vlan_farbe FROM VLAN");
        echo $vcolor;
    ?>


    <img class="robo" src="img/robo.png">
    <img class="toto" src="img/toto.png">
    <p class="title">B 117</p>
    <div class="vlan_cont">
        <div class="vlan"style="background-color:{$vcolor};">1
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: 
            <?php echo $vcolor?> </span>
        </div>
        <div class="vlan">2
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">3
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">4
            <span class="text">TID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">5
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">11
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">12
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">13
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">14
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">15
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">6
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">7
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">8
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">9
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">10
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">16
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">17
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">18
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">19
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        <div class="vlan">20
            <span class="text">ID: 1<br>VLAN: 2<br>Farbe: Blau</span>
        </div>
        
    </div>
    <div id="Hinzufügen">
        <button type="button" value="Hinzufügen">Push me Baby for new VLAN BABIES</button>        
    </div>
</body>
</html>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Switches</title>
</head>
<body>
-->

<?php
/*
        $database =  new mysqli("localhost", "root", "", "b217");
        $switches = $database->query("SELECT * FROM switch");
        echo("<ul>");
        while($switch = $switches->fetch_object()){
            echo("<li>");
            echo("ID: " . $switch->switch_id . " Standort: " . $switch->switch_standort . "<br>");
            $ports = $database->query("SELECT * FROM port WHERE switch_id =" . $switch->switch_id);
            echo("<ul>");
            while($port = $ports->fetch_object()){
                echo("<li>Port: " . $port->port_nummer . "</li>");
                echo("<ul>");
                $vlans = $database->query("SELECT * FROM ktb_vlan_ports WHERE port_id =" . $port->port_id);
                while($vlan = $vlans->fetch_object()){
                    echo("<li>VLAN: " . $vlan->vlan_id . "</li>");
                }
                echo("</ul>");
            }
            echo("</ul>");
            echo("</li>");
        }
        echo("</ul>");
*/
    ?>
    <!--
</body>
</html>
    -->