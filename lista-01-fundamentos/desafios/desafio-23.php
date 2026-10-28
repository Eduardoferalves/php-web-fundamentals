<?php
// ==========================================================
// LISTA 1 - DESAFIO 23
// Contar vogais em uma palavra
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O for percorre cada LETRA da palavra (posição 0 até a última,
// dada por strlen() - 1). O if verifica se a letra está na lista
// de vogais e, se estiver, soma +1 no contador.

$palavra = "programacao";

$totalVogais = 0;
$vogais      = ["a", "e", "i", "o", "u"];

for ($i = 0; $i < strlen($palavra); $i++) {
    $letra = $palavra[$i];

    if (in_array($letra, $vogais)) {
        $totalVogais = $totalVogais + 1;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Desafio 23 - Contar vogais em uma palavra</title>
</head>
<body>

    <h1>Desafio 23 — Contar vogais em uma palavra</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma variável com uma palavra.<br>
        Percorra usando <code>for</code>.<br>
        Conte quantas vogais existem.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>desafio-23.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>A palavra <strong>$palavra</strong> tem <strong>$totalVogais</strong> vogais.</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
