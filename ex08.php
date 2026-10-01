<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
</head>
<body>
    <section style="background-color: purple; color: white; padding: 15px;">
        <?php
    $i=2;
    while ($i<=20) {
        if ($i==10) {
            echo "<h1> $i</h1>";
        }
        else{
            echo $i;}
        echo "<br>";
        $i+=2;
        echo "<br>";
    }
    ?>
    </section>
    <section style="background-color: green; color: white; padding: 15px;">
        <?php
        $compteur=5;
        $i=0;
        while ($compteur<5){
            $i+=1;

        }
        echo " le nombre de l'executuion de while est :".$i."";
        echo "<br>";
        $i=0;

        do {
            $i+=1;
        } while ($compteur<5);
        echo " le nombre de l'executuion de do_while est :".$i."";

        ?>
    </section>
    <section>
    <?php
    for($i=1;$i<20;$i++){
        if($i%3==0){
            continue;
        }
        if($i==16){
            break;  
        }
        echo $i."<br>";

        }
    ?>
    </section>
</body>
</html>