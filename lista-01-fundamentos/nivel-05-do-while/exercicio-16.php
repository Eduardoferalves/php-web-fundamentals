<?php
// ==========================================================
// LISTA 1 - NÍVEL 5 - EXERCÍCIO 16
// Executar pelo menos uma vez
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O do...while executa o bloco PRIMEIRO e só depois testa a
// condição. Repare: a condição ($contador < 10) já é FALSA
// desde o início, e mesmo assim o bloco executa uma vez!

$contador = 10; // já começa em 10, ou seja, condição falsa desde o começo
$mensagem = "";

do {
    $mensagem = "Esta mensagem apareceu, mesmo com a condição sendo falsa desde o início!";
    $contador = $contador + 1;
} while ($contador < 10);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 5 - Exercício 16 - Executar pelo menos uma vez</title>
</head>
<body>

    <h1>Exercício 16 — Executar pelo menos uma vez</h1>

    <h2>📌 Enunciado</h2>
    <p>Use <code>do...while</code> para imprimir uma mensagem pelo menos uma vez.</p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-16.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p><strong>$mensagem</strong></p>";
    echo "<p>Valor de \$contador depois do loop: $contador</p>";
    echo "<p><em>Compare: com um while comum, esse bloco não teria executado nenhuma vez.</em></p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
