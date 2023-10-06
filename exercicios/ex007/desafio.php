<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        $num = $_POST["num"];
        echo "<h1>Resultado do antecessor e sucessor:</h1>
        O número escolhido é $num <br>".
        "O seu antecessor é ".($num - 1)."<br>".
        "O seu sucessor é ".($num + 1)."<br>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>
</html>