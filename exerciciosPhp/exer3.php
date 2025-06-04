<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>

<body>
    <form action="" method="POST">
        <label for="nota1">Insira a primeira nota: </label>
        <input name="nota1" id="nota1" type="double" required>

        <label for="nota2">Insira a segunda nota: </label>
        <input name="nota2" id="nota2" type="double" required>

        <label for="nota3">Insira a terceira nota: </label>
        <input name="nota3" id="nota3" type="double" required>
        <button type="submit">Calcular</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3)) {
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "A media das notas é <strong>$media</strong>.";
    }
    if ($media >= 7) {
        echo "APROVADO!";
    } else {
        echo "REPROVADO!";
    }
}
