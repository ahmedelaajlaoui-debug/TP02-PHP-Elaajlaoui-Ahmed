<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice9</title>
</head>
<body>
    <table border="1" style="border-collapse: collapse; width: 50%; text-align: center;">
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th>Etudiant</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10];
        foreach ($notes as $etudiant => $note) {
            echo "<tr><td>$etudiant</td><td>$note</td></tr>";
        }
        echo "<tr><th colspan='2'>Étudiants ayant obtenu au moins 10/20</th></tr>";
        foreach ($notes as $etudiant => $note) {
            if ($note >= 10) {
                echo "<tr><td>$etudiant est validé</td><td>$note</td></tr>";
            }
        }
        $somme = array_sum($notes);
        $moyenne = $somme / count($notes);
        
        echo "<tr><th colspan='2'>Moyenne de la classe : $moyenne</th></tr>";
        echo "<tr><th colspan='2'>le nombre des étudiants validé sont  : " . count($notes) . "</th></tr>";
        $meillereNote = max($notes);
        $etudiantMeilleur = array_search($meillereNote, $notes);
        echo "<tr><th colspan='2'>L'étudiant ayant la meilleure note est : $etudiantMeilleur avec une note de $meillereNote</th></tr>";
        ?>
        </tbody>
    </table>
    
</body>
</html>