<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
    <?php echo("<h1 style='position:absolute; top:0%; margin-top:0px;'>Datenbank-Eintrag vorhanden</h1>");
    ?>
    <div >
        <button id="dmbtn" type="image" onclick=dmmode(); ><img class="moon" id="bild" src="img/moon.png" style="width:50px; height:50px"></button>
    </div>
    <form action="pdfcreater.php" method="POST" style='margin-left:25%'>

        <h2> Bitte folgende Daten ausfüllen für Check:</h2>
        
        <input type="text" name="vname" placeholder="Vorname" required>
        <input type="text" name="nname" placeholder="Nachname">
        <p>
        <input type="email" name="email" placeholder="E-mail">
        <input type="tel" name="phone" placeholder="Telefon">
        <p>
        <textarea style='width:350px; height:75px' name="message" placeholder="Deine Nachricht"></textarea>
        <p>
        <button type="submit" name="PDF abschicken" onclick="pdfp()">PDF machen daraus!</button>

    </form>
    <div id="BtnElemente">
        <button type=button onclick="zähler()">
            Ich bin <span id="zahl">0</span> schon gedrückt worden
        </button>
        <button type=button onclick="reset()">
            Reset
        </button>
    </div>

    <script>
        var i = 0;
        var zahl = document.getElementById("zahl");
        function zähler(){
            i++;
            zahl.innerHTML = i;
        }

        function reset(){
            i = 0;
            zahl.innerHTML = i;
        }
    </script>

    <script> //Darkmodeimplementation
        function dmmode(){
            var btnclick = document.body;
            var bild = document.getElementById("bild"); //Holt sich die Elemente aus ID
            
            btnclick.classList.toggle("darkmode");      // Fügt der Klasse den Namen Darkmode hinzu

            if(bild.className == "moon"){
                	console.log("Test");
                bild.src = "img/sun.png";
                bild.className = "sun";
            }
            else{
                bild.src = "img/moon.png";
                console.log(bild.className);
                bild.className = "moon";
            }
        }
    </script>
    </body>
</html>
