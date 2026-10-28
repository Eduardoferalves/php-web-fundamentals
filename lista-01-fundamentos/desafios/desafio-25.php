<?php
// ==========================================================
// LISTA 1 - DESAFIO 25
// Simular caixa eletrônico
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Uma variável com o saldo inicial e dois saques simulados:
// um dentro do saldo e outro acima. O if verifica se há
// saldo suficiente antes de liberar cada saque.

$saldo = 1000.00;

$valorSaque1 = 250.00;  // saque dentro do saldo
$valorSaque2 = 2000.00; // saque acima do saldo

// ---- Saque 1 ----
if ($valorSaque1 <= $saldo) {
    $saldo      = $saldo - $valorSaque1;
    $resultado1 = "Saque de R$ $valorSaque1 realizado com sucesso!";
} else {
    $resultado1 = "Saldo insuficiente para sacar R$ $valorSaque1.";
}

// ---- Saque 2 ----
if ($valorSaque2 <= $saldo) {
    $saldo      = $saldo - $valorSaque2;
    $resultado2 = "Saque de R$ $valorSaque2 realizado com sucesso!";
} else {
    $resultado2 = "Saldo insuficiente para sacar R$ $valorSaque2.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Desafio 25 - Simular caixa eletrônico</title>
</head>
<body>

    <h1>Desafio 25 — Simular caixa eletrônico</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma variável com saldo inicial.<br>
        Simule saque.<br>
        Use <code>if</code> para verificar se há saldo suficiente.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>desafio-25.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Saldo inicial: R$ 1000,00</p>";
    echo "<p>1º saque (R$ 250,00): $resultado1</p>";
    echo "<p>2º saque (R$ 2000,00): $resultado2</p>";
    echo "<p>Saldo final: R$ $saldo</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
