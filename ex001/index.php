<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
</head>
<body>
    <h1>
        Dados do Servidor
    </h1>
    <h2>
        Parte 1:
    </h2>
    
    <?php phpinfo(); ?>
    
    <h2>
        Parte 2:
    </h2>
    <p>Informações do servidor:</p>
    <ul>
        <li>Nome do servidor: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Endereço IP do servidor: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
        <li>Porta do servidor: <?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>Protocolo: <?php echo $_SERVER['SERVER_PROTOCOL']; ?></li>
        <li>Software do servidor: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    </ul>
</body>
</html>