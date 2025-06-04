<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>

<body>
    <form action="" method="POST">
        <label for="peso">Insira seu peso: </label>
        <input name="peso" id="peso" type="number" step="0.01">

        <label for="altura"> Insira sua altura: </label>
        <input name=altura id="altura" type="number" step="0.01">
        <button type="submit">Calcular IMC</button><br>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if (is_numeric($peso) && is_numeric($altura)) {
        $imc = $peso / ($altura * $altura);
        echo "Seu peso atual é $peso e sua altura é $altura e o seu IMC é $imc";
    } else {
        echo "insira um valor valido!";
    }
}
