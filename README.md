# PHP Web Fundamentals

Repositório de estudos dos fundamentos do PHP, do zero: variáveis, condicionais, laços de repetição, arrays e formulários (GET/POST).

Sem framework, sem Docker, sem CSS: apenas PHP, HTML simples e a lógica de cada exercício.

## Como rodar

### Com XAMPP (recomendado)

1. Instale o [XAMPP](https://www.apachefriends.org/) e abra o **XAMPP Control Panel**.
2. Clique em **Start** no módulo **Apache**.
3. Copie a pasta `php-web-fundamentals` para dentro de `C:\xampp\htdocs\`:

   ```
   C:\xampp\htdocs\php-web-fundamentals\
   ```

4. Abra o navegador e acesse: [http://localhost/php-web-fundamentals/](http://localhost/php-web-fundamentals/)

### Com o servidor embutido do PHP (alternativa)

Se tiver o PHP no PATH, rode na raiz do projeto:

```bash
php -S localhost:8000
```

E acesse [http://localhost:8000](http://localhost:8000).

## Estrutura do repositório

```
php-web-fundamentals/
├── index.php                  ← índice geral (Lista > Nível > Exercício)
├── lista-01-fundamentos/      ← lógica pura (sem formulário)
│   ├── nivel-01-variaveis/    ← exercicios-01 ao 04
│   ├── nivel-02-condicionais/ ← exercicios-05 ao 08
│   ├── nivel-03-for/          ← exercicios-09 ao 12
│   ├── nivel-04-while/        ← exercicios-13 ao 15
│   ├── nivel-05-do-while/     ← exercicios-16 e 17
│   ├── nivel-06-foreach/      ← exercicios-18 ao 21
│   └── desafios/              ← desafios-22 ao 25
└── lista-02-formularios/      ← interação com GET/POST
    ├── exercicio-01.php       ← Calculadora Simples (POST)
    ├── exercicio-02.php       ← Par ou Ímpar (GET)
    ├── exercicio-03.php       ← Tabuada Dinâmica (POST)
    ├── exercicio-04.php       ← Sistema de Notas (POST)
    ├── exercicio-05.php       ← Mini Sistema de Cadastro (POST + sessão)
    └── desafio-extra.php      ← Contagem de maiores de idade
```

## Como cada exercício está organizado

Cada arquivo é **um único arquivo PHP** (front + back juntos), com três seções na página:

1. **📌 Enunciado** — o texto do exercício;
2. **📄 Código do arquivo** — o código-fonte completo do próprio arquivo, com destaque de sintaxe (`highlight_file`);
3. **▶️ Resultado** — o código funcionando de verdade (ou o formulário + resultado, na Lista 2).

Dica de estudo: leia o enunciado, tente resolver sozinho, e depois compare com o código exibido na página. Mude os valores das variáveis no topo do arquivo e veja o resultado mudar.

## Conteúdo

### Lista 1 — Fundamentos

| Nível | Tema | Exercícios |
|---|---|---|
| 1 | Variáveis e Operações Básicas | 01 a 04 |
| 2 | Estruturas Condicionais (`if`) | 05 a 08 |
| 3 | Estrutura de Repetição (`for`) | 09 a 12 |
| 4 | Estrutura de Repetição (`while`) | 13 a 15 |
| 5 | Estrutura de Repetição (`do...while`) | 16 e 17 |
| 6 | `foreach` com Arrays | 18 a 21 |
| — | Desafios (misturando estruturas) | 22 a 25 |

### Lista 2 — Formulários (GET/POST)

1. **Calculadora Simples** — POST + `switch`, com tratamento de divisão por zero.
2. **Verificador de Par ou Ímpar** — GET + `if`/`elseif`/`else`.
3. **Tabuada Dinâmica** — POST + repetição, exibida em tabela.
4. **Sistema de Notas** — POST + cálculo de média e situação do aluno.
5. **Mini Sistema de Cadastro** — POST + array + sessão, lista em tabela.
6. **Desafio Extra** — conta quantas pessoas cadastradas são maiores de idade.

## Observações

- **Sem dependências externas**: basta PHP (XAMPP já inclui).
- O código é simples de propósito: o objetivo é entender a lógica, não a "arquitetura".
- Os links são relativos, então o projeto funciona em qualquer subpasta (ex: `htdocs/php-web-fundamentals/`).
