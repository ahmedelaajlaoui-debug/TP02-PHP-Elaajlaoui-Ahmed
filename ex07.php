<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice7</title>
</head>
<body>
   <section style="background-color: green; color: white; padding: 15px;">
    <?php
    $nombre=7;
    for ($i=1; $i <=10 ; $i++) { 
        echo $nombre." x ".$i." = ".$nombre*$i."<br>";
    }
    
    ?>
    </section>
    <section style="background-color: purple; color: white; padding: 15px;">
    <?php
    $s="*";
    for($i=0;$i<6;$i++){
        for ($j=0; $j <$i; $j++) { 
            
            echo  "$i $s" ;
        }
        echo"<br>";
    }   
    ?>
    </section>
</body>
</html>