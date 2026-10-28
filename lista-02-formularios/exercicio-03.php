<?php
// ==========================================================
// LISTA 2 - EXERCÍCIO 03 - Tabuada Dinâmica
// Objetivo: trabalhar repetição (for).
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O formulário envia o número via POST. Se ele chegou,
// o for monta as 10 linhas da tabuada em uma tabela HTML.

$numero = null;

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $numero = (int) ($_POST['numero'] ?? 0);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 03 - Tabuada Dinâmica</title>
</head>
<body>

    <h1>Exercício 03 — Tabuada Dinâmica</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um formulário com: um campo para digitar um número e um botão "Gerar Tabuada".<br>
        Ao enviar, mostre a tabuada do número de 1 a 10.<br>
        Exibir em formato de lista ou tabela HTML.
    </p>
    <p><strong>Exemplo esperado:</strong> 5 x 1 = 5, 5 x 2 = 10, ...</p>
    <h3>Requisitos</h3>
    <ul>
        <li>Usar POST</li>
        <li>Usar estrutura de repetição</li>
        <li>Exibir dentro de &lt;table&gt; ou &lt;ul&gt;</li>
    </ul>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-03.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Funcionando</h2>

    <form action="" method="POST">
        <label>Digite um número:
            <input type="number" name="numero" required>
        </label>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php if ($numero !== null): ?>
        <h3>Tabuada do <?= $numero ?></h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>Operação</th>
                <th>Resultado</th>
            </tr>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <td><?= $numero ?> x <?= $i ?></td>
                    <td><?= $numero * $i ?></td>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>

    <p><a href="../index.php">← Voltar ao índice</a></p>

</body>
</html>
