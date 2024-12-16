<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    $resultado = 0;

    switch($operacao){
        
        case '+':
        $resultado = $numero1 + $numero2;
        break;

        case '-':
        $resultado = $numero1 - $numero2;
        break;

        case '*':
        $resultado = $numero1 * $numero2;
        break;

        case '/':
            // Verifica se o segundo número não é zero para evitar divisão por zero
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Erro: Divisão por zero não permitida.";
            }
            break;
        default:
            $resultado = "Operação inválida.";
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    
    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br><br>

        <label for="operacao">Operação:</label>
        <select name="operacao" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Exibe o resultado se houver
    if (isset($resultado)) {
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>