<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php
    $moyenne = 21;
    if ($moyenne > 20 || $moyenne < 0) {
        echo "Note invalide";
        #`-1`, `9`, `10`, `12`, `14`, `16` et `21` en changeant la variable.
    } else {
        if ($moyenne < 10) {
            echo "Non validé";
        } else if ($moyenne >= 10 && $moyenne < 12) {
            echo "Passable";
        }else if( $moyenne >= 12 && $moyenne < 14) {
            echo "Assez bien";
        }else if( $moyenne >= 14 && $moyenne < 16) {
            echo "Bien";
        }
        else 
            echo "Très bien";
    }  
        
    ?>
    
</body>
</html>