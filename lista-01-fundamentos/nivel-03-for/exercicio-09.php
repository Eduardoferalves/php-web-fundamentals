<?php
// ==========================================================
// LISTA 1 - NÍVEL 3 - EXERCÍCIO 09
// Contagem de 1 a 10
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O for tem 3 partes: início ($i = 1), condição ($i <= 10) e
// incremento ($i++). A cada volta, $i ganha +1.
// Vamos montando uma string com os números separados por espaço.

$numeros = "";

for ($i = 1; $i <= 10; $i++) {
    $numeros = $numeros . $i . " ";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 3 - Exercício 09 - Contagem de 1 a 10</title>
</head>
<body>

    <h1>Exercício 09 — Contagem de 1 a 10</h1>

    <h2>📌 Enunciado</h2>
    <p>Use <code>for</code> para imprimir números de 1 a 10.</p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-09.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Contagem: $numeros</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
