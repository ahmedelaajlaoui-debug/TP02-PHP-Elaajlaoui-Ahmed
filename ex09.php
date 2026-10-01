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

    ?>
        </tbody>
    </table>
    
</body>
</html>