<?php
// ==========================================================
// LISTA 1 - NÍVEL 4 - EXERCÍCIO 14
// Somar números até atingir 100
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Somamos 1, depois 2, depois 3... até a soma ULTRAPASSAR 100.
// O while para quando $soma passa de 100, e guardamos cada
// passo do cálculo em $passos para mostrar depois.

$soma   = 0;
$numero = 1;
$passos = "";

while ($soma <= 100) {
    $passos = $passos . "$soma + $numero = " . ($soma + $numero) . "<br>";
    $soma   = $soma + $numero;
    $numero = $numero + 1;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 4 - Exercício 14 - Somar números até atingir 100</title>
</head>
<body>

    <h1>Exercício 14 — Somar números até atingir 100</h1>

    <h2>📌 Enunciado</h2>
    <p>Use <code>while</code> para somar números consecutivos até que a soma ultrapasse 100.</p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-14.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Passo a passo da soma:</p>";
    echo $passos;
    echo "<p>A soma final é <strong>$soma</strong>, ultrapassou 100 depois de somar " . ($numero - 1) . " números consecutivos.</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
