<!DOCTYPE html>

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
    <?php echo("<h2>Datenbank-Eintrag vorhanden</h2>");
    ?>
    
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
    </body>
</html>
