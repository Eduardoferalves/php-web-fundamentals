<?php
// ==========================================================
// LISTA 2 - EXERCÍCIO 01 - Calculadora Simples
// Objetivo: trabalhar POST, variáveis e condicionais (switch).
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O formulário abaixo envia os dados via POST para ESTE MESMO
// arquivo. Quando o método for POST, pegamos os valores de
// $_POST e executamos a operação escolhida com um switch.

$resultado = null;
$erro      = null;
$simbolo   = "";

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {

    $numero1  = (float) ($_POST['numero1'] ?? 0);
    $numero2  = (float) ($_POST['numero2'] ?? 0);
    $operacao = $_POST['operacao'] ?? '';

    switch ($operacao) {
        case 'soma':
            $resultado = $numero1 + $numero2;
            $simbolo   = "+";
            break;

        case 'subtracao':
            $resultado = $numero1 - $numero2;
            $simbolo   = "-";
            break;

        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            $simbolo   = "*";
            break;

        case 'divisao':
            // Tratamento da divisão por zero
            if ($numero2 == 0) {
                $erro = "Não é possível dividir por zero.";
            } else {
                $resultado = $numero1 / $numero2;
                $simbolo   = "/";
            }
            break;

        default:
            $erro = "Selecione uma operação válida.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 01 - Calculadora Simples</title>
</head>
<body>

    <h1>Exercício 01 — Calculadora Simples</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma página com um formulário contendo: dois campos numéricos, um <code>&lt;select&gt;</code>
        com as operações (soma, subtração, multiplicação e divisão) e um botão "Calcular".<br>
        Ao enviar o formulário, mostre o resultado da operação escolhida.<br>
        Se for divisão, trate o caso de divisão por zero.
    </p>
    <h3>Requisitos</h3>
    <ul>
        <li>Usar POST</li>
        <li>Usar if ou switch</li>
    </ul>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-01.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Funcionando</h2>

    <form action="" method="POST">
        <label>Número 1:
            <input type="number" step="any" name="numero1" required>
        </label><br><br>

        <label>Operação:
            <select name="operacao">
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (*)</option>
                <option value="divisao">Divisão (/)</option>
            </select>
        </label><br><br>

        <label>Número 2:
            <input type="number" step="any" name="numero2" required>
        </label><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($erro !== null): ?>
        <p>⚠ <strong><?= $erro ?></strong></p>
    <?php elseif ($resultado !== null): ?>
        <p><strong>Resultado: <?= $numero1 ?> <?= $simbolo ?> <?= $numero2 ?> = <?= $resultado ?></strong></p>
    <?php endif; ?>

    <p><a href="../index.php">← Voltar ao índice</a></p>

</body>
</html>
