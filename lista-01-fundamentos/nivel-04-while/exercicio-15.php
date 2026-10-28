<?php
// ==========================================================
// LISTA 1 - NÍVEL 4 - EXERCÍCIO 15
// Validação simples (senha)
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// A senha correta fica guardada em uma variável.
// O array $tentativas SIMULA o que o usuário digitaria.
// O while percorre as tentativas até acertar a senha.

$senhaCorreta = "1234";
$tentativas   = ["0000", "4321", "1234"]; // simulação do usuário digitando

$indice    = 0;
$historico = "";

while ($tentativas[$indice] !== $senhaCorreta) {
    $historico = $historico . "Tentativa '{$tentativas[$indice]}' — senha incorreta!<br>";
    $indice    = $indice + 1;
}

$historico = $historico . "Tentativa '{$tentativas[$indice]}' — senha correta! Acesso liberado. ✅";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 4 - Exercício 15 - Validação simples (senha)</title>
</head>
<body>

    <h1>Exercício 15 — Validação simples (senha)</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Simule uma senha correta armazenada em uma variável.<br>
        Use <code>while</code> para repetir até a senha estar correta (simulação com variável).
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-15.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo "<p>Senha correta: $senhaCorreta</p>";
    echo $historico;
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
