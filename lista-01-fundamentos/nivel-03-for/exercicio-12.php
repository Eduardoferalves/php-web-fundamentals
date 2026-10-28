<?php
// ==========================================================
// LISTA 1 - NÍVEL 3 - EXERCÍCIO 12
// Soma dos números de 1 a 100
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// A variável $soma começa em 0 e, a cada volta do for,
// "acumula" o valor de $i. No final, ela guarda o total.

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma = $soma + $i;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 3 - Exercício 12 - Soma dos números de 1 a 100</title>
</head>
<body>

    <h1>Exercício 12 — Soma dos números de 1 a 100</h1>

    <h2>📌 Enunciado</h2>
    <p>Use <code>for</code> para calcular a soma total.</p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-12.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>A soma dos números de 1 a 100 é: <strong>$soma</strong></p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
