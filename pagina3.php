<?php
//Ik start hier de session die de data ophaalt van pagina2.php
session_start();

// De lijn hier onder zorgt er voor dat de functie van functions.php kan worden gebruikt in deze file.
include "functions.php";

// De code hier onder zorgt er voor dat de data van de vorige pagina onthouden blijft tussen de pagina's.
$_SESSION["boeken"] = $_POST["boeken"];
$_SESSION["aantalboeken"] = $_POST["aantalboeken"];
$_SESSION["keuzeverzending"] = $_POST["keuzeverzending"];
$_SESSION["keuzebetaalmiddel"] = $_POST["keuzebetaalmiddel"];
$_SESSION['totalekosten'] = totaleKosten($_SESSION["aantalboeken"], $_SESSION["keuzeverzending"], $_SESSION["keuzebetaalmiddel"]);
?>

<?php
// De code hier onder zorgt er voor dat de ingevulde gegevens van pagina 1 en 2 te zien zijn op pagina 3.
echo "Voornaam: " . $_SESSION["voornaam"] . "</br>";
echo "Achternaam: " . $_SESSION["achternaam"] . "<br>";
echo "E-mailadres: " . $_SESSION["emailadres"] . "<br>";
echo "Telefoonnummer: " . $_SESSION["telefoonnummer"] . "<br>";
echo "Aantal boeken: " . $_SESSION["aantalboeken"] . "<br>";
echo "Keuze verzending: " . $_SESSION["keuzeverzending"] . "</br>";
echo "Keuze betaalmiddel: " . $_SESSION["keuzebetaalmiddel"] . "</br>";
echo "Totale kosten: " . $_SESSION["totalekosten"] . "</br>";

echo "<br>";

?>

<?php
// De lijn hier onder roept de code op die van db.php. Dit doe ik zo omdat ik het fijn vind om een nette code te hebben.
include_once("db.php");

// Hier onder worden de variables defined die de form data moeten gaan ophalen waarmee ik de INSERT vervolgens doe.
$voornaam = $_SESSION["voornaam"];
$achternaam = $_SESSION["achternaam"];
$emailAdres = $_SESSION["emailadres"];
$telefoonNummer = $_SESSION["telefoonnummer"];
$boeken = $_SESSION["boeken"];
$aantalBoeken = $_SESSION["aantalboeken"];
$keuzeVerzending = $_SESSION["keuzeverzending"];
$keuzeBetaalMiddel = $_SESSION["keuzebetaalmiddel"];
$totaleKosten = $_SESSION["totalekosten"];

// De lines hier onder zeggen "als $voornaam niet leeg is gelaten doe dan de INSERT query in de database"
if (!empty($voornaam)) {
    $stmt = $conn->prepare("INSERT INTO bestellingen (voornaam, achternaam, email, telefoon, boek, aantal, Verzending, Betaalmiddel, totale_kosten)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");

    $stmt->bindParam(1, $voornaam);
    $stmt->bindParam(2, $achternaam);
    $stmt->bindParam(3, $emailAdres);
    $stmt->bindParam(4, $telefoonNummer);
    $stmt->bindParam(5, $boeken);
    $stmt->bindParam(6, $aantalBoeken);
    $stmt->bindParam(7, $keuzeVerzending);
    $stmt->bindParam(8, $keuzeBetaalMiddel);
    $stmt->bindParam(9, $totaleKosten);

    // De codee hier onder zorgt er voor dat de database actie executed wordt

    $stmt->execute();

    // Dit is een error handler voor het geval dat de data niet naar de database is gestuurd.

    if ($stmt->rowCount() > 0) {
        echo "Data succesvol opgeslagen";
    } else {
        echo "Error" . $stmt->errorInfo();
    }

    $stmt->closeCursor();
} else {
    echo "Error";
}


?>