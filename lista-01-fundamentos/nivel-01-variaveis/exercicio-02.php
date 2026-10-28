<?php
// ==========================================================
// LISTA 1 - NÍVEL 1 - EXERCÍCIO 02
// Soma de dois números
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Duas variáveis numéricas e as quatro operações entre elas.

$numero1 = 10;
$numero2 = 5;

$soma          = $numero1 + $numero2;
$subtracao     = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao       = $numero1 / $numero2;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 1 - Exercício 02 - Soma de dois números</title>
</head>
<body>

    <h1>Exercício 02 — Soma de dois números</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie duas variáveis numéricas.<br>
        Exiba a soma, subtração, multiplicação e divisão entre elas.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-02.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>$numero1 + $numero2 = $soma</p>";
    echo "<p>$numero1 - $numero2 = $subtracao</p>";
    echo "<p>$numero1 * $numero2 = $multiplicacao</p>";
    echo "<p>$numero1 / $numero2 = $divisao</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
