<?php
// ==========================================================
// LISTA 1 - NÍVEL 6 - EXERCÍCIO 19
// Somar valores de um array
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Um array com 5 números.
// A variável $soma começa em 0 e acumula cada valor do array
// conforme o foreach percorre a lista.

$numeros = [10, 20, 30, 40, 50];

$soma = 0;

foreach ($numeros as $numero) {
    $soma = $soma + $numero;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 6 - Exercício 19 - Somar valores de um array</title>
</head>
<body>

    <h1>Exercício 19 — Somar valores de um array</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um array com 5 números.<br>
        Use <code>foreach</code> para calcular a soma.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-19.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Números do array: " . implode(" + ", $numeros) . "</p>";
    echo "<p>Soma total: <strong>$soma</strong></p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
