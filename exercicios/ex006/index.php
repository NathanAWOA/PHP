<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmética</title>
</head>
<body>
    <?php
        $absoluto = abs(-200);
        $binario = base_convert(254, 10, 2);
        $octal = base_convert(254, 10, 8);
        $hexa = base_convert(254, 10, 16); 
        echo "<h1>Parece ser a mesma merda de todas as linguagens</h1>
        Uma coisa que é diferente no PHP é que se eu fizer 2 + 2 com os numeros entre aspas ele ainda assim fara o calculo normalmente, enquanto no JS por exemplo ele iria apenas concatenar. Isso acontece porque no JS o sinal de mais tem uma sobrecarga de funções onde alem de operador matematico ele também serve para fazer concatenações, já no PHP a concatenação é feita com o ponto final e o sinal de mais é usado unica e exclusivamente para operações matematicas.
        <br>
        Vamos ver então algumas funções matemáticas que não vão ter operadores:
        
        <h3>Valor absoluto: abs()</h3>
        O comando abs() mostra o valor absoluto que nada mais é do que mostrar um número, porém sem o sinal de ser positivo ou negativo. <strong>Ex: o valor absoluto de -200 é igual a $absoluto</strong>.
        <br>
        <h3>Conversor de bases: base_convert()</h3>
        Esse comando permite que você converta um número para binario, octal ou hexadecial. A estrutura é a seguinte <strong>base_convert(numero, base atual, base para a qual sera convertida). Ex: 254 para hexadecimal é igual a $hexa, em binario é $binario e em octal é $octal</strong>
        <br>
        <h3>Arredondamento: ceil(), floor() e round()</h3>
        <strong>ceil()</strong> arredonda pra cima, <strong>floor()</strong> arredonda pra baixo <strong>round() </strong> arredonda para o valor mais proximo
        <br>
        <h3>Hipotenusa: hypot()</h3>
        Calcula a hipotenusa
        <br>
        <h3>Divisão inteira: intdiv()</h3>
        Faz divisão inteira ou sejá só retorna numeros inteiros, então se a divisão tiver o resultado como numero real ele vai parar antes de por a virgula e devolver o que teve de resultado até então. Ex 5/2 seria 2,5 porém ele vai para no 2 e dizer que a resposta é 2.
        <br>
        <h3>Minimo e maximo: min() e max()</h3>
        Basicamente é feito uma comparação entre os valores e define qual é o maior no caso do <strong>max()</strong> e o minimo no caso do <strong>min()</strong>
        <br>
        <h3>Pi: pi() ou a costante M_PI</h3>
        Mostra o valor de pi
        <br>
        <h3>Potencia: pow()</h3>
        Em versões muito antigas do PHP era usado esse metodo para calcular a potencia.
        <br>
        <h3>Seno, Cosseno e Tangente: sin(), cos() e tan()</h3>
        Calcula seno cosseno e tangente.
        <br>
        <h3>Raiz quadrada: sqrt()</h3>
        Calcula raiz quadrada.
        <br>";
    ?>
</body>
</html>