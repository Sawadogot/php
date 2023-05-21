<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de la divisibilité</title>
</head>
<body>
    <h1>Vérification de la divisibilité</h1>

    <form method="post" action="">
        <label for="number_a">Entier A :</label>
        <input type="number" id="number_a" name="number_a" required><br><br>

        <label for="number_b">Entier B :</label>
        <input type="number" id="number_b" name="number_b" required><br>

        <input type="submit" value="Vérifier">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberA = $_POST["number_a"];
        $numberB = $_POST["number_b"];

        if ($numberB != 0 && $numberA % $numberB == 0) {
            echo "<p>$numberA est divisible par $numberB.</p>";
        } else {
            echo "<p>$numberA n'est pas divisible par $numberB.</p>";
        }
    }
    ?>
</body>
</html>
