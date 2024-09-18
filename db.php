<?php

//Hier definen we de informatie van de database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookWorld";

// Verbinding maken met de DB
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Onderstaande code zorgt er voor dat er een error wordt gegenereerd zodra de connectie niet werkt
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Als de connectie met de DB is gefaald dan laat hij dat hier zien.
    echo "Connection failed: " . $e->getMessage();
    die();
}

?>