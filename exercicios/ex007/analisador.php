<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da analise</title>
</head>
<body>
    <h1>Analisador de Número Real</h1>
    <?php 
        $num = $_POST["num"];
        $int = (int)$num;
        $fra = $num - $int;
        
        echo "Analisando o número <strong>". number_format($num, 3, ",",".") ." </strong>informado pelo usúario:";
        echo "<ul>
                <li>A parte inteira do número é <strong>".number_format($int, 0,",",".")."</strong></li>
                <li>A parte real do número é <strong>".number_format($fra , 3, ",",".")."</strong></li>
            </ul>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>
</html>