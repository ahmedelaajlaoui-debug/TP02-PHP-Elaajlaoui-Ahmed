<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <?php
    const TAUX_TVA = 20;
    define("DEVISE", "MAD");
    $HT=60;
    $qantite=3;
    $totalHT=$HT*$qantite;
    $TVA=$totalHT*(TAUX_TVA/100);
    $totalTTC=$totalHT+$TVA;
    echo "Le total HT est: $totalHT " . DEVISE . " <br>";
    echo "Le total TVA est: $TVA " . DEVISE . " <br>";
    echo "Le total TTC est: $totalTTC " . DEVISE . " <br>";
    $totalTTC+=15;
    echo "Le montant final est: $totalTTC " . DEVISE . " <br>";
    $exist=defined("TAUX_TVA");
    echo "defined(TAUXTVA): " . ($exist ? "Oui" : "Non");
    
    ?>
    
</body>

</html>            