<?php
// ==========================================================
// LISTA 1 - NÍVEL 1 - EXERCÍCIO 04
// Concatenação de strings
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Duas variáveis e a junção delas usando o operador de concatenação ( . )

$nome      = "Maria";
$sobrenome = "Silva";

$nomeCompleto = $nome . " " . $sobrenome;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 1 - Exercício 04 - Concatenação de strings</title>
</head>
<body>

    <h1>Exercício 04 — Concatenação de strings</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie variáveis <code>$nome</code> e <code>$sobrenome</code>.<br>
        Exiba o nome completo concatenado.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-04.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    // Exibindo as variáveis separadas e depois concatenadas
    echo "<p>Nome: $nome</p>";
    echo "<p>Sobrenome: $sobrenome</p>";
    echo "<p>Nome completo: $nomeCompleto</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
