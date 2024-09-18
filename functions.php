<?php

// Function defined die wordt gebruikt in pagina3.php.
function totaleKosten($aantalBoeken, $spoedVerzending, $betaalMiddel)
{

    // Hier onder worden de variables defined die ik later gebruik in de function
    $aantalBoeken = $_POST["aantalboeken"] * 12.95;
    $spoedVerzending = 4.99;
    $betaalMiddel = 0;

    // De if else statement hier onder verteld eigenlijk "als het antwoord bij keuzeverzending spoed is dan is het 4.99 extra, als het niet zo is, dan is het niks extra.
    if ($_POST["keuzeverzending"] == "spoed") {
        $spoedVerzending = 4.99;
    } else {
        if ($_POST["keuzeverzending"] == "normaal") {
            $spoedVerzending = 0;
        }
    }
    // Hier worden de keuzes voor betaalmiddel bepaald in de function aan de hand van if/else statements
    if ($_POST["keuzebetaalmiddel"] == "ideal") {
        $betaalMiddel = 0;
    } else {
        if ($_POST["keuzebetaalmiddel"] == "paypal") {
            $betaalMiddel = 1.99;
        } else {
            if ($_POST["keuzebetaalmiddel"] == "creditcard") {
                $betaalMiddel = 2.50;
            }
        }
    }

    // De totale kosten van het boek worden hier opgeslagen in een variable aan de hand van een simpele + rekensom
    $totaleKosten = ($aantalBoeken + $spoedVerzending + $betaalMiddel);
    // De return "returnd" eigenlijk het antwoord van $totaleKosten
    return $totaleKosten;
}

?>