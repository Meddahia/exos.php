
<?php
session_start();

// liste infractions 
$infractions = [45, 52, 60, 48, 55];

//calculer la somme des vitesses 
$somme = 0;

foreach ($infractions as $vitesse)
{
    $somme += $vitesse;
}

//calcul de la moyenne des vitesses
$moyenne = $somme / count($infractions);

//verif si une vitesse au dessus de 50km/h
$somme = false;

foreach ($infractions as $vitesse)
{
    if ($vitesse > 50)
    {
        $amende = true;
        break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        liste des infractions de vitesses
    </h1>
    <!-- lste des infractions -->
    <ul>
        <?php foreach ($infractions as $vitesse): ?>
            <li> <?= $vitesse ?> km/h</li>
            <?php endforeach;?>
    </ul>
    <!-- affivhage de la somme des vitesses -->
    <p>
            Somme des vitesse : <?=$somme ?>km/h
    </p>
    <!-- affichage de la moyenne des vitesses -->
    <p>
        Moyenne des vitesses : <?= number_format($moyenne,2) ?> km/h
    </p>
    <!-- affichage du message d'amende -->
    <h2>
        <?php 
        if ($amende):?>
        Amende : Une ou plusieurs vitesses depassent 50 km/h.
        <?php else:?>
            Felicitation : Tu roule bien !
            <?php endif;?>
    </h2>
</body>
</html>