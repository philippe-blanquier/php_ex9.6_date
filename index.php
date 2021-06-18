<?php
    declare(strict_types = 1);
    /*  Afficher le nombre de jour dans le mois de février de l'année 2016.
    */
    $numberOfDay= cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 9.6 Date</title>
    </head>
    <body >
        <p>nombre de jour dans le mois de février de l'année 2016: <?= $numberOfDay ?></p>
    </body>
</html>