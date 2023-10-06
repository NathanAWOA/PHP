<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Caixa Eletronico</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
        }
        input {
            width: 200px;
        }
    </style>
</head>
<body>
    <?php 
        $money = $_POST["money"] ?? 0;
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="money">Qual valor você deseja sacar? (R$) </label>
            <input type="number" step="5" name="money" id="money" value="<?=$money?>">
            <p>Notas disponiveis: R$100, R$50, R$20 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </div>

    <div class="result">
        <h2>Totalizando tudo</h2>
        <?php
            echo "O caixa eletronico vai te entregar as seguintes notas: <br>";

            if($money == 0){
                echo "<h2>Você precisa inserir algum valor.</h2>";
            } else {
                if($money%100 != 0) {
                $cem = $money/100;
                echo "<li> Nota de 100: x".(int)$cem."</li>";
            }

            if(($money%100)/50 != 0){
                echo "<li> Nota de 50: x".(int)$cinquenta = ($money%100)/50 . "</li>";
            }

            if(($money%50)/10 != 0){
                echo "<li> Nota de 10: x".(int)$dez = ($money%50)/10 . "</li>";
            }
            
            if(($money%10)/5 != 0){
                echo "<li> Nota de 5: x".(int)$cinco = ($money%10)/5 . "</li>";
            }}

            /*Código do Aguanabeira
            $resto = $saque;
            //Saque de R$100
            $tot100 = floor($resto / 100);
            $resto %= 100;

            //Saque de R$50
            $tot50 = floor($resto / 50);
            $resto %= 50;

            //Saque de R$10
            $tot10 = floor($resto / 10);
            $resto %= 10;

            //Saque de R$5
            $tot5 = floor($resto / 5);
            $resto %= 5;
            */
        ?>

    </div>
</body>
</html>