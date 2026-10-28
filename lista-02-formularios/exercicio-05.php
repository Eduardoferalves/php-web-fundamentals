<?php
// ==========================================================
// LISTA 2 - EXERCÍCIO 05 - Mini Sistema de Cadastro com Lista
// Objetivo: trabalhar repetição + arrays simples.
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// session_start() inicia a sessão: assim a lista de pessoas
// continua salva entre um envio e outro (senão, cada envio
// apagaria o anterior).
//
// O link "Limpar lista" (GET ?limpar=1) esvazia a sessão.

session_start();

if (isset($_GET['limpar'])) {
    $_SESSION['pessoas'] = [];
}

// Lista atual de pessoas cadastradas (ou vazia, se ainda não houver)
$pessoas = $_SESSION['pessoas'] ?? [];

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {

    $nome  = trim($_POST['nome'] ?? '');
    $idade = (int) ($_POST['idade'] ?? 0);

    // Só cadastra se o nome não estiver vazio
    if ($nome !== '') {
        $pessoas[] = [
            'nome'  => $nome,
            'idade' => $idade,
        ];
        $_SESSION['pessoas'] = $pessoas;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 2 - Exercício 05 - Mini Sistema de Cadastro com Lista</title>
</head>
<body>

    <h1>Exercício 05 — Mini Sistema de Cadastro com Lista</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Crie um formulário para cadastrar: nome e idade.<br>
        Ao enviar, armazene os dados em um array e mostre uma tabela com:
        nome, idade e situação (menor de idade &lt; 18 / maior de idade &gt;= 18).
    </p>
    <h3>Requisitos</h3>
    <ul>
        <li>Usar POST</li>
        <li>Usar array</li>
        <li>Usar foreach ou for</li>
        <li>Exibir em &lt;table&gt;</li>
    </ul>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-05.php</code>):</p>
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

    <p><a href="?limpar=1">🗑 Limpar lista</a></p>

    <p><a href="../index.php">← Voltar ao índice</a></p>

</body>
</html>
