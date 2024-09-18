<?php

//Ik start hier de session die de data ophaalt van pagina1.php

session_start();

// De code hier onder zorgt er voor dat de data van de vorige pagina onthouden blijft tussen de pagina's.
$_SESSION["voornaam"] = $_POST["voornaam"];
$_SESSION["achternaam"] = $_POST["achternaam"];
$_SESSION["emailadres"] = $_POST["emailadres"];
$_SESSION["telefoonnummer"] = $_POST["telefoonnummer"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bestelling</title>
</head>

<body>

</body>

</html>

<?php

// De code hier onder zorgt er voor dat de ingevulde gegevens van pagina 1 te zien zijn op pagina 2.
echo "Voornaam: " . $_SESSION["voornaam"] . "</br>";
echo "Achternaam: " . $_SESSION["achternaam"] . "<br>";
echo "E-mailadres: " . $_SESSION["emailadres"] . "<br>";
echo "Telefoonnummer: " . $_SESSION["telefoonnummer"] . "<br>";

// Hier onder staat een array met een aantal verschillende opties die later worden gebruikt in een drop down menu.
$boeken = array(
  "Girl Forgotten – Karin Slaughter",
  "The 6:20 Man – David Baldacci",
  "Ready Player One – Ernest Cline",
  "Vermist – Ellen de Vriend",
  "The Outrun – Amy Liptrot",
  "Digital Fortress – Dan Brown",
  "The Hitchhikers Guide to the Galaxy –
Douglas Adams",
  "The Hobbit – J.R.R. Tolkien"
);


// De code hier onder laat het drop down menu zien en aan de hand van de array die hier boven te zien is.
echo "
<p1>Kies een boek:</p1>
<br><br>
<form method='post' action='pagina3.php'>
  <select name='boeken'>
    <option selected='selected'>Selecteer een boek</option>";
foreach ($boeken as $boek) {
  echo "<option value='$boek'>$boek</option>"; // For each loop die door alle opties heen loopt in de array.
}

// De code hier onder zorgt er voor dat er een invoerveld staat om een nummer in te vullen, in dit geval voor het aantal boeken.

echo "
  </select>
  <br><br>
  Aantal boeken: <br><br> <input type='number' name='aantalboeken' required placeholder='Aantal boeken'>"; // Invoerveld voor aantal boeken
echo "<br> <br>";

// Hier wordt een select menu gedefined waardoor je kan selecteren of je een normale verzending wilt of een spoed

echo "
<label for='keuzeverzending'>Keuze voor verzending:</label>
<br><br>
<select name='keuzeverzending'>
  <option value='normaal'>Normaal</option>
  <option value='spoed'>Spoed</option>
</select>
";

echo "<br> <br>";

// Het select menu hier onder laat 3 opties zien voor betaalmethodes, ideal, paypal en creditcard.

echo "
<label for='keuzebetaalmiddel'>Keuze voor betaalmidden:</label>
<br><br>
<select name='keuzebetaalmiddel'>
  <option value='ideal'>iDeal</option>
  <option value='paypal'>PayPal</option>
  <option value='creditcard'>Creditcard</option>
</select>
";

// Als je op deze knop klikt dan ga je naar de volgende pagina toe, pagina3.php.

echo "
  <br><br>
  <input type='submit' value='Volgende' name='opslaan'> 
</form>
";

?>