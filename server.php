<?php  
/***********************************
Autor: KAAN der Unermüdliche
Verion: 0.1
INFO: Bewerbungsaufgabe, Registrierung von Usern auf Website und speichern in Datenbank in PHP
*************************************/

session_start();

////////////////////////////////////////////////////////////////////
//Variablen initialisieren

$vorname = "";
$nachname = "";
$email = "";
$firma = "";

$errors = array();

////////////////////////////////////////////////////////////////////
//Mit der Datenbank verbinden oder Fehler ausgeben
$db = mysqli_connect('mysql04.manitu.net','u82468','6TnMwXcU6wxAQ13U', 'db82468') or die("Konnte nicht mit Datenbank verbinden");


////////////////////////////////////////////////////////////////////
//Benutzer registrieren
$vorname = mysqli_real_escape_string($db, $_POST['vorname']);
$nachname = mysqli_real_escape_string($db, $_POST['nachname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$firma = mysqli_real_escape_string($db, $_POST['firma']);


////////////////////////////////////////////////////////////////////
//Form Validierung, Fehler ausgeben wenn Felder leer
if(empty($vorname)) {
    array_push($errors, "Vorname darf nicht leer sein!");
}
if(empty($nachname)) {
    array_push($errors, "Nachname darf nicht leer sein!");
}
if(empty($email)) {
    array_push($errors, "Email darf nicht leer sein!");
}
if(empty($firma)) {
    array_push($errors, "Firma darf nicht leer sein!");
}

////////////////////////////////////////////////////////////////////////////////////////
//Überprüfe, ob gleiche Person (email) bereits in Datenbank existiert und gib Fehler aus
$benutzer_check_query = "SELECT * FROM benutzer WHERE wtc_email = '$email' LIMIT 1";

$ergebnis = mysqli_query($db, $benutzer_check_query);
$benutzer = mysqli_fetch_assoc($ergebnis);

if($benutzer){
    if($benutzer['email'] === $email) {
        array_push($errors, "Ihre Email ist bereits registriert!");
    }
}

////////////////////////////////////////////////////////////////////
//Registrieren ohne Fehler und Eingabe in Datenbank abspeichern
if(count($errors) == 0){
    $query = "INSERT INTO benutzer(wtc_vorname, wtc_nachname, wtc_email , wtc_firma) VALUES ('$vorname','$nachname', '$email', '$firma')";

    mysqli_query($db, $query);
}
?>