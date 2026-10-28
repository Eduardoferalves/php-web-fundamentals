<?php
// ==========================================================
// LISTA 2 - EXERCÍCIO 04 - Sistema de Notas
// Objetivo: trabalhar múltiplas variáveis, média e condição.
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O formulário envia nome e três notas via POST.
// Calculamos a média e usamos if / elseif / else para decidir
// a situação do aluno.

$nome     = "";
$media    = null;
$situacao = "";
$erro     = null;

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {

    $nome  = trim($_POST['nome'] ?? '');
    $nota1 = (float) ($_POST['nota1'] ?? 0);
    $nota2 = (float) ($_POST['nota2'] ?? 0);
    $nota3 = (float) ($_POST['nota3'] ?? 0);

    if ($nome === '') {
        $erro = "Informe o nome do aluno.";
    } else {
        $media = ($nota1 + $nota2 + $nota3) / 3;

        if ($media >= 7) {
            $situacao = "Aprovado";
        } elseif ($media >= 5 && $media < 7) {
            $situacao = "Recuperação";
        } else {
            $situacao = "Reprovado";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 04 - Sistema de Notas</title>
</head>
<body>

    <h1>Exercício 04 — Sistema de Notas</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um formulário com: nome do aluno, nota 1, nota 2 e nota 3.<br>
        Ao enviar, calcule a média e exiba: nome do aluno, média e situação:<br>
        Média &gt;= 7 → Aprovado | Média &gt;= 5 e &lt; 7 → Recuperação | Média &lt; 5 → Reprovado.
    </p>
    <h3>Requisitos</h3>
    <ul>
        <li>Usar POST</li>
        <li>Usar operadores relacionais</li>
        <li>Mostrar mensagem formatada com HTML</li>
    </ul>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-04.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Funcionando</h2>

    <form action="" method="POST">
        <label>Nome do aluno:
            <input type="text" name="nome" required>
        </label><br><br>

        <label>Nota 1:
            <input type="number" step="0.1" min="0" max="10" name="nota1" required>
        </label><br><br>

        <label>Nota 2:
            <input type="number" step="0.1" min="0" max="10" name="nota2" required>
        </label><br><br>

        <label>Nota 3:
            <input type="number" step="0.1" min="0" max="10" name="nota3" required>
        </label><br><br>

        <button type="submit">Calcular Média</button>
    </form>

    <?php if ($erro !== null): ?>
        <p>⚠ <strong><?= $erro ?></strong></p>
    <?php elseif ($media !== null): ?>
        <h3>Resultado</h3>
        <p><strong>Aluno:</strong> <?= $nome ?></p>
        <p><strong>Média:</strong> <?= number_format($media, 2, ',', '.') ?></p>
        <p><strong>Situação:</strong> <?= $situacao ?></p>
    <?php endif; ?>

    <p><a href="../index.php">← Voltar ao índice</a></p>

</body>
</html>
