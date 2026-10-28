<?php
// ==========================================================
// LISTA 1 - DESAFIO 22
// Números pares de 1 a 50
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O for percorre de 1 a 50 e o if "filtra" apenas os números
// cujo resto da divisão por 2 é zero (os pares).

$numerosPares = "";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $numerosPares = $numerosPares . $i . " ";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Desafio 22 - Números pares de 1 a 50</title>
</head>
<body>

    <h1>Desafio 22 — Números pares de 1 a 50</h1>

    <h2>📌 Enunciado</h2>
    <p>Use <code>for</code> + <code>if</code> para exibir apenas números pares.</p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>desafio-22.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Números pares de 1 a 50:</p>";
    echo "<p>$numerosPares</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
