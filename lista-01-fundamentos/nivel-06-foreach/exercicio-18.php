<?php
// ==========================================================
// LISTA 1 - NÍVEL 6 - EXERCÍCIO 18
// Lista de nomes
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Um array simples (lista) com 5 nomes.
// O foreach percorre o array e, a cada volta, a variável
// $nome recebe um item da lista.

$nomes = ["Ana", "Bruno", "Carla", "Diego", "Elisa"];

$saida = "";

foreach ($nomes as $nome) {
    $saida = $saida . $nome . "<br>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 6 - Exercício 18 - Lista de nomes</title>
</head>
<body>

    <h1>Exercício 18 — Lista de nomes</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um array com 5 nomes.<br>
        Use <code>foreach</code> para exibir cada nome.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-18.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Nomes do array:</p>";
    echo $saida;
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
