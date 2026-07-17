<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data de hoje
    </title>
</head>
<body>
    <h1> Dá para mostrar a Data de hoje</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // GMT-3
        echo "Hoje é " . date("d/M/Y");
        echo " e a hora é " . date("H:i:s T");
    ?>
</body>
</html>