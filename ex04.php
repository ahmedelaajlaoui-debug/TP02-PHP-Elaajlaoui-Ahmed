<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

<pre>
<?php 
    $a = 42;
    $b = "42";
    $c = 15.8;
    $d = true;
    $e = false;
    $f = null;

    echo "a : ";
    var_dump($a);

    echo "b : ";
    var_dump($b);

    echo "c :";
    var_dump($c);

    echo "d :";
    var_dump($d);

    echo "e :";
    var_dump($e);

    echo "f : ";
    
    var_dump($f);
    echo "0.0:";
    var_dump(floatval("0.0"));
    echo "PHP:";
    var_dump(floatval("PHP"));
    $arry = array();
    echo "Array:";
    var_dump(floatval($arry));

    echo "veréfication pour les entier :<br>";
    echo "15.8:<br>";
    $int=15.8;
    var_dump($int);
    $int=intval($int);
    var_dump($int);
    echo "15.8 is an integer: ";
    var_dump(is_int($int));
?>
</pre>

</body>
</html>