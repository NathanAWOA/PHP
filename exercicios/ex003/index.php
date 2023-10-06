<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos: Escalares, Compostos e Especiais</h1>
    <?php 
        //Tipos
        echo "<h3>Escalares: String, Int, Float e Boolean.</h3> 
        No php os hexadecimais como por exemplo <strong>'0x1A'</strong> é considerado um <strong>int</strong>, e o php só considera como hexadecimal se ele <strong>começar com o numero zero</strong>. Vale lembrar que se o começo for <strong>'0x' ele é hexadecimal</strong>, se for <strong>'0b' é binario</strong> e se for <strong>'0' seguido apenas de outros números então é octal</strong>.
        <br>
        Isso pode se tornar confuso em casos como <strong>'3e2'</strong>, por que ele não vai entender isso como hexadecimal e sim como <strong>potencia</strong>, ou seja, <strong>3 vezes 10 elevado quadrado</strong> que no caso seria '300'. E ai vem a outra parte confusa, 300 é um número inteiro, porém como ele é o resultado de uma potencia o php entende ele como um <strong>double(double == float)</strong>.
        <br>";
        
        $vet = [6.5,9,"teste",false];
        echo "<h3>Compostos: Arrays e Objects</h3>";
        echo var_dump($vet) . "<br>
        O que você esta vendo logo acima é o resultado de um <strong>var_dump()</strong> em uma variavel que recebe um <strong>array</strong>. Perceba que ele mostra o tipo de cada um dos itens do array";
        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        echo var_dump($p) . "<br>
        Aqui já é o caso de um <strong>object</strong>. Para criar esse object eu tive que definir um <strong>class</strong>, dentro dele eu defini um <strong>private string</strong> e por fim, fora dele eu defini uma variavel que recebia um novo item dentro desse <strong>arrayObject</strong>. E para não ficar duvida <strong>foi essa ultima variavel que eu usei dentro do var_dump()</strong>.
        <br>";
        
        //Testes
        echo "<h1>Teste de tipos primitivos:</h1>";
        echo "<h3>Escalares: </h3>";
        $num = 0x1A;
        echo "O resultado do hexadecimal 0x1A é $num <br>";

        $v = 300;
        echo var_dump($v) . "Este é o tipo e o valor da variavel <strong>'v'</strong>. Para visualizar isso foi usado o comando <strong>var_dump(nomeDaVariavel)</strong> <br>";

        $potencia = (float) 200;
        echo var_dump($potencia) . "Aqui eu basicamente forcei a variável a ser de um determinado tipo declarando ela e colocando entre parenteses o tipo que eu queria que ela fosse.
        <br>
        <strong>Ex: $ nomeDaVariavel = (float) 200;</strong>
        <br>
        Outra coisa importante a resaltar é que se o tipo primitivo for <strong>boolean</strong> a gente pode ter alguns problemas na hora de printar na tela. Isso porque se o valor for <strong>false</strong> então ele não vai imprimir nada, já que ele vai entender o <strong>false</strong> como <strong>0, nulo e etc</strong>, caso o valor seja <strong>true</strong> então ele vai entender como <strong>1 ou como qualquer coisa diferente de false</strong>.
        <br>";

        //fim
        echo "<h3>Como sempre saporra de Guanabara não finalizou. Pelo menos até o fim do video em questão ele não falou do tipo especial, vamos ver se no próximo video ele vai falar.</h3>"; 
    ?>
</body>
</html>