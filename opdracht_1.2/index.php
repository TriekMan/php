<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht1_3.6</title>
</head>
<body>
    <?php
    $vandaag = date("l d F Y");
    $dagvandaag = date("l");
    $dagjaar = date("z");
    $dagweek = date("w");
    $maanddagen = date("");
    $maand = date("F");

    echo "<p>Het is vandaag: $vandaag.</p>";
    echo "<p>Vandaag is het de " . $dagjaar . "e dag van het jaar.</p>";
    echo "<p>$dagvandaag is de " . $dagweek . "e dag van de week.</p>";
    echo "<p>De maand $maand heeft in totaal $date</p>";
    ?>
</body>
</html>