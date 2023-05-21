<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la somme des chiffres</title>
</head>
<body>
    <form method="POST" action="">
        <label for="number">Entier N :</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sum = 0;
        $digits = str_split($number);

        foreach ($digits as $digit) {
            $sum += $digit;
        }

        echo "<p>La somme des chiffres de $number est : $sum</p>";
    }
    ?>
</body>
</html>
