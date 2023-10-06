<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Preço</title>
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
        $preco = $_POST["preco"] ?? 0;
        $porcento = $_POST["porcento"] ?? 0;
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço do Produto (R$) </label>
            <input type="number" step="0.01" name="preco" id="preco" value="<?=$preco?>">
            <label for="porcento">Qual será o percentual de reajuste? (<strong><span id="percent">%</span></strong>)</label>
            <input type="range" min="0" max="100" name="porcento" id="porcento" step="1" oninput="mudaValor()" value="<?=$porcento?>">
            <input type="submit" value="Reajustar">
        </form>
    </div>

    <div class="result">
        <h2>Resultado do Reajuste</h2>
        <?php
            $reajuste = $porcento."%";
            $novoValor = $preco + ($preco * ($porcento/100));

            echo "O produto que custava R$".number_format($preco, 2, ",", ".").", com <strong>$reajuste de aumento</strong> vai passar a custar <strong> R$".number_format($novoValor, 2, ",", ".")."</strong> a partir de agora."; 
        ?>
    </div>

    <script defer>
        mudaValor()
        function mudaValor(){
            percent.innerText = porcento.value + "%"
        }
    </script>
</body>
</html>