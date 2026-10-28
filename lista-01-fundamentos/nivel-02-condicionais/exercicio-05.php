<?php
// ==========================================================
// LISTA 1 - NÍVEL 2 - EXERCÍCIO 05
// Verificar maioridade
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Uma variável com a idade e um if para decidir a mensagem.

$idade = 17;

if ($idade >= 18) {
    $mensagem = "Maior de idade";
} else {
    $mensagem = "Menor de idade";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 2 - Exercício 05 - Verificar maioridade</title>
</head>
<body>

    <h1>Exercício 05 — Verificar maioridade</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie uma variável <code>$idade</code>.<br>
        Se for maior ou igual a 18, exiba "Maior de idade".<br>
        Caso contrário, exiba "Menor de idade".
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-05.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Idade informada: $idade anos</p>";
    echo "<p><strong>$mensagem</strong></p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
