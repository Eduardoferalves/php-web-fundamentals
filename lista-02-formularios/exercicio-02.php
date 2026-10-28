<?php
// ==========================================================
// LISTA 2 - EXERCÍCIO 02 - Verificador de Número Par ou Ímpar
// Objetivo: trabalhar GET e estrutura condicional.
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Desta vez os dados chegam via GET (dá para ver os valores
// na própria URL, depois do "?"). Verificamos duas coisas:
// se o número é par ou ímpar, e se é positivo, negativo ou zero.

$numero   = null;
$paridade = null;
$sinal    = null;

if (isset($_GET['numero']) && $_GET['numero'] !== '') {
    $numero = (int) $_GET['numero'];

    // Par ou ímpar
    if ($numero % 2 == 0) {
        $paridade = "par";
    } else {
        $paridade = "ímpar";
    }

    // Positivo, negativo ou zero
    if ($numero > 0) {
        $sinal = "positivo";
    } elseif ($numero < 0) {
        $sinal = "negativo";
    } else {
        $sinal = "zero";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 02 - Verificador de Número Par ou Ímpar</title>
</head>
<body>

    <h1>Exercício 02 — Verificador de Número Par ou Ímpar</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma página com: um campo para digitar um número e um botão "Verificar".<br>
        Ao enviar, mostre se o número é par ou ímpar.<br>
        Mostre também se é positivo, negativo ou zero.
    </p>
    <h3>Requisitos</h3>
    <ul>
        <li>Enviar via GET</li>
        <li>Usar if / elseif / else</li>
    </ul>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-02.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Funcionando</h2>

    <form action="" method="GET">
        <label>Digite um número:
            <input type="number" name="numero" required>
        </label>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($numero !== null): ?>
        <p>
            O número <strong><?= $numero ?></strong> é <strong><?= $paridade ?></strong> e é <strong><?= $sinal ?></strong>.
        </p>
    <?php endif; ?>

    <p><a href="../index.php">← Voltar ao índice</a></p>

</body>
</html>
