<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secuencia de Collatz</title>
</head>
<body>
<h1>Calculadora de la Secuencia de Collatz</h1>
<form method="post" action="">
    <label for="numero">Ingresa un número N (mayor o igual a 1):</label>
    <input type="number" id="numero" name="numero" required min="1">
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = (int)$_POST["numero"];

    function collatzSequence($n) {
        $sequence = [];
        while ($n != 1) {
            $sequence[] = $n;
            if ($n % 2 == 0) {
                $n = $n / 2;
            } else {
                $n = 3 * $n + 1;
            }
        }
        $sequence[] = 1;
        return $sequence;
    }

    $collatz = collatzSequence($N);
    echo "<h2>La secuencia de Collatz para el número $N es:</h2>";
    echo "<p>" . implode(", ", $collatz) . "</p>";
}
?>
</body>
</html>
