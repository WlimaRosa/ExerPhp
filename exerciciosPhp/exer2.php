<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar Numeros</title>
</head>

<body>
    <form action="" method="POST">
        <label for="valor1">Insira o primeiro valor:</label>
        <input name="valor1" id="valor1" type="number" required>

        <label for="valor2">Insira o segundo valor:</label>
        <input name="valor2" id="valor2" type="number" required>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    if (is_numeric($valor1) && is_numeric($valor2)) {
        $soma = $valor1 + $valor2;
        echo "<p>A soma de $valor1 e $valor2 é <strong>$soma</strong>.</p>";
    } else {
        echo "<p>Por favor, insira números válidos.</p>";
    }
}
