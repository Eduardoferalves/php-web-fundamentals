<?php
// ==========================================================
// LISTA 1 - DESAFIO 24
// Maior número de um array
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Começamos assumindo que o maior número é o PRIMEIRO do array.
// Depois, o foreach percorre os demais e, a cada número maior
// que o "atual campeão", ele vira o novo maior.

$numeros = [12, 45, 7, 89, 23, 56];

$maior = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Desafio 24 - Maior número de um array</title>
</head>
<body>

    <h1>Desafio 24 — Maior número de um array</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um array com números.<br>
        Use <code>foreach</code> para encontrar o maior número.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>desafio-24.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Array: " . implode(", ", $numeros) . "</p>";
    echo "<p>O maior número é: <strong>$maior</strong></p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
