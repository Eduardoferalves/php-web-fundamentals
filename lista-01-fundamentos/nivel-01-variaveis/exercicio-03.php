<?php
// ==========================================================
// LISTA 1 - NÍVEL 1 - EXERCÍCIO 03
// Conversão de temperatura
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Temperatura em Celsius e a fórmula de conversão para Fahrenheit.
// Fórmula: F = C * 9/5 + 32

$celsius    = 30;
$fahrenheit = $celsius * 9 / 5 + 32;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 1 - Exercício 03 - Conversão de temperatura</title>
</head>
<body>

    <h1>Exercício 03 — Conversão de temperatura</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma variável com uma temperatura em Celsius.<br>
        Converta para Fahrenheit.<br>
        Mostre o resultado.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-03.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Temperatura em Celsius: $celsius °C</p>";
    echo "<p>Temperatura em Fahrenheit: $fahrenheit °F</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
