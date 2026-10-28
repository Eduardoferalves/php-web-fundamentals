<?php
// ==========================================================
// LISTA 2 - DESAFIO EXTRA
// Modificação do Exercício 05: contar maiores de idade
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// Igual ao exercício 05, mas agora, além da tabela, contamos
// quantas pessoas cadastradas são maiores de idade (idade >= 18)
// e mostramos essa informação ao final da tabela.

session_start();

if (isset($_GET['limpar'])) {
    $_SESSION['pessoas_desafio'] = [];
}

// Lista atual de pessoas cadastradas (ou vazia, se ainda não houver)
$pessoas = $_SESSION['pessoas_desafio'] ?? [];

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {

    $nome  = trim($_POST['nome'] ?? '');
    $idade = (int) ($_POST['idade'] ?? 0);

    // Só cadastra se o nome não estiver vazio
    if ($nome !== '') {
        $pessoas[] = [
            'nome'  => $nome,
            'idade' => $idade,
        ];
        $_SESSION['pessoas_desafio'] = $pessoas;
    }
}

// Conta quantas pessoas são maiores de idade
$totalMaiores = 0;

foreach ($pessoas as $pessoa) {
    if ($pessoa['idade'] >= 18) {
        $totalMaiores++;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Desafio Extra - Contar maiores de idade</title>
</head>
<body>

    <h1>Desafio Extra — Contar maiores de idade</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Modificar o exercício 5 para:<br>
        contar quantas pessoas são maiores de idade<br>
        e mostrar essa informação ao final da tabela.
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>desafio-extra.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Funcionando</h2>

    <form action="" method="POST">
        <label>Nome:
            <input type="text" name="nome" required>
        </label><br><br>

        <label>Idade:
            <input type="number" min="0" name="idade" required>
        </label><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <h3>Pessoas cadastradas (<?= count($pessoas) ?>)</h3>

    <table border="1" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Situação</th>
        </tr>
        <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?= $pessoa['nome'] ?></td>
                <td><?= $pessoa['idade'] ?></td>
                <td>
                    <?php if ($pessoa['idade'] >= 18): ?>
                        Maior de idade
                    <?php else: ?>
                        Menor de idade
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if (count($pessoas) === 0): ?>
            <tr>
                <td colspan="3">Nenhuma pessoa cadastrada ainda.</td>
            </tr>
        <?php endif; ?>
    </table>

    <p><strong>Total de maiores de idade: <?= $totalMaiores ?></strong></p>

    <p><a href="?limpar=1">🗑 Limpar lista</a></p>

    <p><a href="../index.php">← Voltar ao índice</a></p>

</body>
</html>
