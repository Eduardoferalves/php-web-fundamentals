<?php
// ==========================================================
// LISTA 1 - NÍVEL 3 - EXERCÍCIO 11
// Tabuada
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Uma variável com o número da tabuada e um for de 1 a 10.
// Cada linha guarda uma conta da tabuada, separada por <br>.

$numero = 7;

$tabuada = "";

for ($i = 1; $i <= 10; $i++) {
    $tabuada = $tabuada . "$numero x $i = " . ($numero * $i) . "<br>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 3 - Exercício 11 - Tabuada</title>
</head>
<body>

    <h1>Exercício 11 — Tabuada</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma variável com um número.<br>
        Use <code>for</code> para mostrar a tabuada desse número.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-11.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Tabuada do $numero:</p>";
    echo $tabuada;
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
