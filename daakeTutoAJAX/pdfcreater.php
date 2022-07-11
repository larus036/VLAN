<?php

require_once __DIR__ . '/vendor/autoload.php';

//Postet Inhalte in Variabeln speichern:
$vname = $_POST['vname'];
$nname = $_POST['nname'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$message = $_POST['message'];

//PDF Instanz schaffen
$mpdf = new mPDF('utf-8','A4', '');

//PDF machen
$data = '';

//Überschrift
$data .= '<h1> Deine Daten=</h1><p>';

$data .= '<strong> Vorname</strong> ' .$vname. '<br />';
$data .= '<strong> Nachname</strong> ' .$nname. '<br />';
$data .= '<strong> Email</strong> ' .$email. '<br />';
$data .= '<strong> Telefonnummer</strong> ' .$tel. '<br />';

if($message){
    $data .= '<strong> Deine Nachricht</strong> ' .$message. '<br />';
}

//PDF schreiben

$mpdf->WriteHTML($data);

//Dem Browser schicken

$mpdf->Output('DeinePDF.pdf', 'D');

