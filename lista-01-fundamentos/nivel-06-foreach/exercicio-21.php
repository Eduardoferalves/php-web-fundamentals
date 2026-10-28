<?php
// ==========================================================
// LISTA 1 - NÍVEL 6 - EXERCÍCIO 21
// Verificar aprovação de alunos
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Array associativo: chave = nome do aluno, valor = nota.
// O foreach percorre os alunos e, dentro dele, um if decide
// se o aluno está "Aprovado" (nota >= 7) ou "Reprovado".

$alunos = [
    "Ana"   => 8.5,
    "Bruno" => 6.0,
    "Carla" => 9.2,
    "Diego" => 4.5,
];

$saida = "";

foreach ($alunos as $aluno => $nota) {
    if ($nota >= 7) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    $saida = $saida . "$aluno: nota $nota - <strong>$situacao</strong><br>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 6 - Exercício 21 - Verificar aprovação de alunos</title>
</head>
<body>

    <h1>Exercício 21 — Verificar aprovação de alunos</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um array associativo com nomes e notas.<br>
        Use <code>foreach</code> e <code>if</code> para exibir se cada aluno está
        "Aprovado" (nota ≥ 7) ou "Reprovado".
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-21.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo $saida;
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
