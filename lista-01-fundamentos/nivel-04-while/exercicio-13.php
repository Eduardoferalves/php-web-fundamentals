<?php
// ==========================================================
// LISTA 1 - NÍVEL 4 - EXERCÍCIO 13
// Contagem até 10
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O while repete enquanto a condição for verdadeira.
// Aqui, $i começa em 1 e ganha +1 a cada volta, até passar de 10.

$i = 1;

$numeros = "";

while ($i <= 10) {
    $numeros = $numeros . $i . " ";
    $i++; // incremento: sem ele, o loop nunca terminaria!
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 4 - Exercício 13 - Contagem até 10</title>
</head>
<body>

    <h1>Exercício 13 — Contagem até 10</h1>

    <h2>📌 Enunciado</h2>
    <p>Use <code>while</code> para imprimir números de 1 a 10.</p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-13.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Contagem: $numeros</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
