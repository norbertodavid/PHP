<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Tipos</title>
</head>
<body>
    <h1> Variáveis e Tipos</h1>
    <?php 
        $nome = "Norberto";
        $sobrenome = "David";
        const PAIS = "Brasil";
        $idade = 35; //int ou integer

        $nomeCompletoCliente = "Camel Case";
        $telefone_contato_cliente = "Snake_Case";

        $sobrenome = "David"; //string
        $peso = 103.1; //float ou double
        $casado = false; //bool ou boolean
        $altura = 1.86; //float ou double
        $vetor = [1, "Maria", 3.5, 4, false]; //array
        
        echo "Muito prazer, $nome $sobrenome você mora no(a) " . PAIS;
        echo " e tem $idade anos <br>";

        echo "Nome: " . $nome . "<br>";
        echo "Idade: " . $idade . "<br>";
        echo "Altura: " . $altura . "<br>";
        echo "Casado: " . ($casado ? "Sim" : "Não") . "<br>";

        var_dump($nome);
        var_dump($idade);
        var_dump($altura);
        var_dump($vetor);
    ?>
</body>
</html>