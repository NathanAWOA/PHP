<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        /*
        OPÇÕES PARA PEGAR OS DADOS DO FORMULÁRIO:
        $_POST
        $_GET
        $_REQUEST
        */

        $nome = $_POST["nome"] ?? "sem nome";
        $sobrenome = $_POST["sobrenome"] ?? "desconhecido";
        echo "<h1>Seja bem-vindo $nome $sobrenome!</h1>
        <h3>Seu cadastro foi enviado com sucesso!</h3>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>
</html>