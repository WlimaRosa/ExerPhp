<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Temperatura</title>
</head>

<body>
    <form action="" method="POST">
        <label for="celcius">Insira a temperatura em celcius: </label>
        <input name="temperatura" id="temperatura" type="double" >
        <button type="submit">Converter para Fahreint</button>

        <label for="F">Insira a temperatura em Fahreint: </label>
        <input name="temperatura2" id="temperatura2" type="double" >
        <button type="submit">Converter para Celcius</button>
    </form>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["temperatura"])) {
        $temperatura = $_POST["temperatura"];
        if (is_numeric($temperatura)) {
            $fahrenheit = ($temperatura * 9/5) + 32;
            echo "<p>A temperatura de $temperatura °C é equivalente a <strong>$fahrenheit °F</strong>.</p>";
        } else {
            echo "<p>Por favor, insira um número válido.</p>";
        }
    }

    if (isset($_POST["temperatura2"])) {
        $temperatura2 = $_POST["temperatura2"];
        if (is_numeric($temperatura2)) {
            $celcius = ($temperatura2 - 32) * 5/9;
            echo "<p>A temperatura de $temperatura2 °F é equivalente a <strong>$celcius °C</strong>.</p>";
        } else {
            echo "<p>Por favor, insira um número válido.</p>";
        }
    }
}
