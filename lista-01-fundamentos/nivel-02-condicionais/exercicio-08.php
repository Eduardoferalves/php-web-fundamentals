<?php
// ==========================================================
// LISTA 1 - NÍVEL 2 - EXERCÍCIO 08
// Calculadora simples
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Duas variáveis numéricas e uma variável com o símbolo da
// operação escolhida (+, -, *, /). O if decide qual conta fazer.

$numero1  = 8;
$numero2  = 4;
$operacao = "/";

if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
} elseif ($operacao == "-") {
    $resultado = $numero1 - $numero2;
} elseif ($operacao == "*") {
    $resultado = $numero1 * $numero2;
} elseif ($operacao == "/") {
    $resultado = $numero1 / $numero2;
} else {
    $resultado = "Operação inválida";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 2 - Exercício 08 - Calculadora simples</title>
</head>
<body>

    <h1>Exercício 08 — Calculadora simples</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie duas variáveis numéricas e uma variável com a operação (+, -, *, /).<br>
        Use <code>if</code> para executar a operação escolhida.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-08.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Operação escolhida: $numero1 $operacao $numero2</p>";
    echo "<p>Resultado: <strong>$resultado</strong></p>";
    echo "<p><em>Dica: troque o valor de \$operacao no topo do arquivo para +, -, * ou / e veja o resultado mudar.</em></p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
