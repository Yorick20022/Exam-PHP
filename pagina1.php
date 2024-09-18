<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klantgegevens</title>
</head>

<body>

    <!-- De form hier onder is er voor zodat je je informatie kan invullen op de klantgegevens pagina -->
    <!-- Ik heb er breaks in verwerkt aan de hand van <br> zodat het er wat netter uit ziet -->
    <!-- Als je hier klikt op "volgende" dan wordt de data meegenomen naar de volgende pagina -->
    <!-- Het required gedeelte betekent dat dit veld moet worden ingevuld, anders kan je niet verder -->
    <form method="post" action="pagina2.php">
        <label for="voornaam">Voornaam:</label>
        <input type="text" placeholder="Voornaam" name="voornaam" required></input>
        <br><br>
        <label for="voornaam">Achternaam:</label>
        <input type="text" placeholder="Achternaam" name="achternaam" required></input>
        <br><br>
        <label for="voornaam">E-mailadres:</label>
        <input type="text" placeholder="E-Mailadres" name="emailadres" required></input>
        <br><br>
        <label for="voornaam">Telefoonnummer:</label>
        <input type="text" placeholder="Telefoonnummer" name="telefoonnummer"></input>
        <br><br>
        <input type="submit" value="Volgende"></input>
    </form>

</body>

</html>