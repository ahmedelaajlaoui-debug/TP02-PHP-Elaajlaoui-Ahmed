<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
</head>
<body>
    <?php 
    if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['groupe'])) {
        $nom = trim($_GET['nom']);
        $prenom = trim($_GET['prenom']);
        $groupe = trim($_GET['groupe']);
        if($nom === "" || $prenom === "" || $groupe === "") {
            echo "<h2>Veuillez remplir tous les champs.</h2>";
        } else {
            $nom = htmlspecialchars($nom,ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenom,ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupe,ENT_QUOTES, 'UTF-8');
        echo "Bienvenue, $prenom $nom <br>";
        echo "Vous êtes dans le groupe : $groupe";
    } 
    }else {
        echo "<h2>Aucune information reçue.</h2>";

    }?>
    <br>
    <a href="ex10_get.html">Retour au formulaire</a>
    
</body>
</html>