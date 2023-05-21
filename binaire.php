<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Binaire</title>
</head>
<body>
    <h2>Calculatrice Binaire</h2>
    <form method="post" action="">
        <label for="number">Entier N :</label>
        <input type="number" name="numb" id="numb" required>
        <input type="submit" value="Convertir">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["numb"];
        $binary = decbin($number);

        echo "Le binaire de $number est : $binary";
    }
    ?>
</body>
</html>
