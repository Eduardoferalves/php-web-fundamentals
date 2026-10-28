<?php
// ==========================================================
// LISTA 1 - NÍVEL 2 - EXERCÍCIO 06
// Número positivo, negativo ou zero
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Uma variável numérica e um if / elseif / else para classificar.

$numero = -5;

if ($numero > 0) {
    $classificacao = "positivo";
} elseif ($numero < 0) {
    $classificacao = "negativo";
} else {
    $classificacao = "zero";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 2 - Exercício 06 - Número positivo, negativo ou zero</title>
</head>
<body>

    <h1>Exercício 06 — Número positivo, negativo ou zero</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma variável numérica.<br>
        Verifique se é positivo, negativo ou zero.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-06.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>O número $numero é <strong>$classificacao</strong>.</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
