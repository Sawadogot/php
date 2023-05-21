<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> calcul php</title>
</head>
<body>
    <h1>Calcul de la somme des N premiers nombres entiers</h1>
    <form method="post" action="">
        <label for="number">Entrez un nombre entier (N) :</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        $sum = 0;

        for ($i = 1; $i <= $number; $i++) {
            $sum += $i;
        }

        echo "<p>La somme des $number premiers nombres entiers est : $sum</p>";
    }
    ?>
</body>
</html>



