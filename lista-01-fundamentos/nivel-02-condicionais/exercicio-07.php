<?php
// ==========================================================
// LISTA 1 - NÍVEL 2 - EXERCÍCIO 07
// Verificar número par ou ímpar
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Um número é par quando o resto da divisão por 2 é zero.
// O operador % (módulo) devolve o resto de uma divisão.

$numero = 7;

if ($numero % 2 == 0) {
    $paridade = "par";
} else {
    $paridade = "ímpar";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 2 - Exercício 07 - Verificar número par ou ímpar</title>
</head>
<body>

    <h1>Exercício 07 — Verificar número par ou ímpar</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um número.<br>
        Use <code>if</code> para verificar se é par ou ímpar.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-07.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>O número $numero é <strong>$paridade</strong>.</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
