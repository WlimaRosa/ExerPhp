<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou Par</title>
</head>

<body>

    <form action="" method="POST">
        <label for="valor">Insira o valor:</label>
        <input name="valor" id="valor" type="number" required>
        <button type="submit">Calcular</button>
    </form>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];

    if (is_numeric($valor)) {
        if ($valor > 0)
            if ($valor % 2 == 0) {
                echo "<p>O número $valor é <strong>par</strong>.</p>";
            } else {
                echo "<p>O número $valor é <strong>ímpar</strong>.</p>";
            }
    } else {
        echo "<p>Por favor, insira um número válido.</p>";
    }
}
?>