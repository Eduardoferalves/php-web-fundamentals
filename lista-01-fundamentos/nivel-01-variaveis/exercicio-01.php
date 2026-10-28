<?php
// ==========================================================
// LISTA 1 - NÍVEL 1 - EXERCÍCIO 01
// Criar variáveis básicas
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Criamos três variáveis simples com tipos diferentes:
// string (texto), int (número inteiro) e float (número decimal).

$nome   = "Eduardo";
$idade  = 25;
$altura = 1.75;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 1 - Exercício 01 - Criar variáveis básicas</title>
</head>
<body>

    <h1>Exercício 01 — Criar variáveis básicas</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie variáveis para armazenar: seu nome, sua idade e sua altura.<br>
        Exiba todas usando <code>echo</code>.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-01.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    // Exibindo cada variável com echo
    echo "<p>Nome: $nome</p>";
    echo "<p>Idade: $idade anos</p>";
    echo "<p>Altura: $altura m</p>";
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
