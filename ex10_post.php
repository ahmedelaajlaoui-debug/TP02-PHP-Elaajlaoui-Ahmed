<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <?php 
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['groupe'])) {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $groupe = trim($_POST['groupe']);
        if($nom === "" || $prenom === "" || $groupe === "") {
            echo "<h2>Veuillez remplir tous les champs.</h2>";
        } else {
            $nom = htmlspecialchars($nom,ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenom,ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupe,ENT_QUOTES, 'UTF-8');

        echo "Bienvenue, $prenom $nom !<br>";
        echo "Vous êtes dans le groupe : $groupe";
    } 
    }else {
        echo "<h2>Aucune information reçue.</h2>";

    }?>
    <br>
    
    <a href="ex10_post.html">Retour au formulaire</a>
</body>
</html>