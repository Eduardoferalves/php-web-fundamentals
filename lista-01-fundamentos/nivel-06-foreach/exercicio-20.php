<?php
// ==========================================================
// LISTA 1 - NÍVEL 6 - EXERCÍCIO 20
// Exibir produtos e preços
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Um array ASSOCIATIVO: a chave é o nome do produto e o valor
// é o preço. No foreach, usamos "chave => valor" para receber
// os dois em cada volta.

$produtos = [
    "Arroz"    => 25.90,
    "Feijão"   => 8.50,
    "Macarrão" => 4.99,
    "Leite"    => 6.75,
];

$saida = "";

foreach ($produtos as $produto => $preco) {
    $saida = $saida . "Produto: $produto - Preço: R$ $preco<br>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 6 - Exercício 20 - Exibir produtos e preços</title>
</head>
<body>

    <h1>Exercício 20 — Exibir produtos e preços</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um array associativo com produtos e preços.<br>
        Use <code>foreach</code> para exibir:<br>
        <code>Produto: X - Preço: Y</code>
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-20.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo $saida;
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
