<?php
// ==========================================================
// LISTA 1 - NÍVEL 3 - EXERCÍCIO 10
// Contagem regressiva
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Mesmo for, mas agora começando em 10 e DECREMENTANDO ($i--),
// até chegar em 1.

$numeros = "";

for ($i = 10; $i >= 1; $i--) {
    $numeros = $numeros . $i . " ";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 3 - Exercício 10 - Contagem regressiva</title>
</head>
<body>

    <h1>Exercício 10 — Contagem regressiva</h1>

    <h2>📌 Enunciado</h2>
    <p>Use <code>for</code> para imprimir de 10 até 1.</p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-10.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Contagem regressiva: $numeros</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
