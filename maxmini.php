<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche du minimum et du maximum</title>
</head>
<body>
    <h1>Recherche du minimum et du maximum</h1>

    <form method="POST" action="">
        <label for="numbers">Entrez les nombres (séparés par des virgules) :</label>
        <input type="text" name="numbers" id="numbers" required>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numbers = $_POST['numbers'];

        // Convertir la chaîne de caractères en tableau de nombres
        $numbersArray = explode(',', $numbers);

        // Supprimer les espaces vides autour de chaque nombre
        $numbersArray = array_map('trim', $numbersArray);

        // Supprimer les nombres vides
        $numbersArray = array_filter($numbersArray);

        if (count($numbersArray) > 0) {
            // Recherche du minimum et du maximum
            $minimum = min($numbersArray);
            $maximum = max($numbersArray);

            echo "<p>Ensemble de nombres : $numbers</p>";
            echo "<p>Minimum : $minimum</p>";
            echo "<p>Maximum : $maximum</p>";
        } else {
            echo "<p>Aucun nombre n'a été saisi.</p>";
        }
    }
    ?>
</body>
</html>


