<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Formulário</h1>
    </header>
    <main>
        <?php
            $nome = $_GET['nome'] ?? '';
            $sobreNome = $_GET['sobreNome'] ?? '';

            if (!empty($nome) && !empty($sobreNome)) {
                echo "<p>Olá, <strong>$nome $sobreNome</strong>! Bem-vindo(a) ao nosso site.</p>";
            } else {
                echo "<p>Por favor, preencha todos os campos do formulário.</p>";
            }
        ?>
        <br><br>
        <button onclick="window.location.href='index.php'" class="botaoVoltar">Voltar</button>
    </main>
</body>
</html>