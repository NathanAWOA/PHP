<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Formatos de Strings</h1>
    <?php 
    $test1 = 1;
    $test2 = 3;
    echo "<h3>Double quoted: </h3>
    Aspas dupla, funciona como o template string do JS.

    <h3>Single quoted: </h3>
    Aspas simples, se eu colocar uma variavel ou alguma outra coisa similar a isso dentro dessas aspas o PHP vai simplesmente escrever essa variavel ao invés de exibir o valor. Como eu disse anteriormente no PHP são as aspas duplas que tem a funcionalidade de template strings. Guanabara literalmente mandou um <strong>'Ipsis Litteris'</strong> para explicar isso ksksksksksksskskskk.

    <h3>Heredoc: </h3>
    Pode ser feito da seguinte forma <strong>echo <<< TESTE  seu texto  TESTE;</strong> esse comando permite que tudo que você escrever dentro desse scopo esteja exatamente do jeito que você escreveu, incluindo espaçamentos, paragrafos e etc. mas aparentemente é muito pouco usado. Ele funciona como se estivesse dentro de aspas dupĺas, mas permite que eu digite em mais de uma linha crie esses espaçamentos malucos e etc. Mas lembrando esse tipo de coisa pode ter problema se feito dentro de um html, não entendi muito bem o que acontece ou como resolve.
    <br>
    <br>
    $test1 \"2\" $test2
    <br>
    isso foi feito com contrabarra e aspasduplas mais ou menos assim <strong>\'2\'</strong> só que com aspas duplas.

    <h3>Nowdoc: </h3>
    Assim como heredoc estão para as aspas duplas o nowdoc esta para as aspas simples.
    
    <br>
    
    <br>
    No PHP para concatenar strings ou até mesmo concatenar string com alguma variavel não é usado o sinal de mais como no JS ou outras linguagens. No caso do PHP é usado um ponto final entre as strings ou entre a string e a variavel. Algo que vale resaltar que eu já reparei é que algumas coisas como por exemplo o <strong>var_dump</strong> mesmo se eu por ele no final de uma concatenação ele ira aparecer no inicio.
    <br>";
    ?>
</body>
</html>