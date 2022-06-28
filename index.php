<!DOCTYPE html>
<html lang="de">
<head>
    <title>B117 LF09 Projekt</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">  
     <script type="text/javascript" src="index.js"></script>
</head>
<body>
<!--<script type="text/javascript">
        function myFunction()
        {
            alert("bcvhdskABÖFGHSKAFBVSHkafbhsKAÖGFBHJSqkaö");
        }
    </script>-->
   
<?php
//PHP Sektion mit SQL Verbindung

        $database =  new mysqli("localhost", "root", "", "b217");
        print_r ($database->connect_error);
        $database->set_charset('utf8');
        echo "<pre>"; //<pre> Übersichtliches Anzeigen von Formatierten Text

        $switches = $database->query("SELECT * FROM switch");
        $switchtabelle = $switches->fetch_all(MYSQLI_ASSOC); //fetc_assoc()<-- Zusammenfassen eines Array-Objektes in übersichtlicher und benannter Objektstruktur
        //print_r($switchtabelle);

        $port = $database->query("SELECT * FROM port");
        $porttabelle = $port->fetch_all(MYSQLI_ASSOC);
        //print_r($porttabelle[1]['port_id']);
        $portanzahl = $port->num_rows;
        //echo("<h1>".$portanzahl."</h1>");


        $vlan = $database->query("SELECT * FROM vlan");
        $vlantabelle= $vlan->fetch_all(MYSQLI_ASSOC);
        $vlananzahl = $vlan->num_rows;
        //echo("<h1>".$vlananzahl."</h1>");
     

        //print_r($vlantabelle[1]['vlan_name']); //<-- Direkter Befehl auf entsprechenden Indexeintrag mit Wert
    

        $vcolor = $database->query("SELECT port_id, vlan_farbe FROM `b217`.`vlan`,`b217`.`port` WHERE vlan.vlan_id = port.vlan_id ORDER BY port_id ASC;");
        $vfarbetabelle = $vcolor->fetch_all(MYSQLI_ASSOC);
        //print_r($vfarbetabelle);
        echo "</pre>";

       
    ?>
<div>
</div>
    <img class="robo " src="img/robo.png">
    <img class="toto " src="img/toto.png">
    <p class="title">B 117</p>
    <br>
    <br><br><br><br><br><br><br>
    <div class="columns is-primary is-multiline vlan_cont">
        <?php 
        
        $i= 0;
        while($i<$portanzahl)
        {
            echo ("<div class='column is-2 mr-4 mt-4 mb-4 vlan dropdown-trigger'style=background-color:".$vfarbetabelle[$i]['vlan_farbe'].">".$porttabelle[$i]['port_id']);
            echo ("<span class='text'>Portnr.: ".$i."<br>VLAN ".$porttabelle[$i]['vlan_id']."</span></div>");
            $i++;
        }
        ?> 
    </div>
    <br><br>
    <div id="Hinzufügen">
        <button type="button" value="Hinzufügen">Neues VLAN</button>
        <button type="button" onClick="myFunction()" value="Hinzufügen">PDF generieren</button>        
    </div>

 
    <br><br><br>
    <div id="tabelle" class='columns has- is-half is-offset-one-quarter'>
        <?php
            echo("<table class='table is-striped is-hoverable content has-text-centered is-large' style=width:50%><th class='has-text-centered'>Vlan-Name</th><th class='has-text-centered'>Vlan-Farbe</th>");
            $k=0;
            while($k<$vlananzahl){
                echo ("<tr><td>".$vlantabelle[$k]['vlan_name']."</td>");
                echo("<td style=background-color:".$vlantabelle[$k]['vlan_farbe']."></td>");
                $k++;
            }
            echo("</table>");
        ?>
    </div>
    <div id='Formular' class='Formular' style="margin: left 50%;">
        <form action="localhost\server.php" method="POST">
            <input type="text" name="werte">
            <button type="submit">Sende mich</button>

        </form>

    </div> 
</body>
</html>
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