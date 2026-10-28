<?php
// ==========================================================
// LISTA 1 - NÍVEL 5 - EXERCÍCIO 17
// Menu simples
// ==========================================================

// ---- LÓGICA DO EXERCÍCIO ----
// O array $opcoesEscolhidas SIMULA as escolhas do usuário no menu:
// 1 = Continuar, 2 = Sair.
// O do...while garante que o menu aparece pelo menos uma vez
// e repete até a opção escolhida ser 2 (Sair).

$opcoesEscolhidas = [1, 1, 2]; // simulação: usuário escolhe continuar 2 vezes e depois sair

$indice    = 0;
$historico = "";

do {
    $opcao = $opcoesEscolhidas[$indice];

    if ($opcao == 1) {
        $historico = $historico . "Opção escolhida: 1 - Continuar<br>";
    } elseif ($opcao == 2) {
        $historico = $historico . "Opção escolhida: 2 - Sair<br>";
    }

    $indice = $indice + 1;
} while ($opcao != 2);

$historico = $historico . "Programa encerrado. 👋";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista 1 - Nível 5 - Exercício 17 - Menu simples</title>
</head>
<body>

    <h1>Exercício 17 — Menu simples</h1>

    <h2>📌 Enunciado</h2>
    <p>
        Simule um menu (1-Continuar / 2-Sair).<br>
        Use <code>do...while</code> para repetir até o usuário escolher sair (simulado por variável).
    </p>

    <h2>📄 Código do arquivo</h2>
    <p>Este é o código completo deste arquivo (<code>exercicio-17.php</code>):</p>
    <pre><?php highlight_file(__FILE__); ?></pre>

    <h2>▶️ Resultado (código funcionando)</h2>
    <?php
    echo $historico;
    ?>

    <p><a href="../../index.php">← Voltar ao índice</a></p>

</body>
</html>
