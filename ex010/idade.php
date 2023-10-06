<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio idade</title>
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
        $nasceu = $_POST["nasceu"] ?? 0;
        $anoEscolhido = $_POST["anoEscolhido"] ?? date("Y");
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nasceu">Em que ano você nasceu? </label>
            <input type="number" name="nasceu" id="nasceu" value="<?=$nasceu?>">
            <label for="peso1">Quer saber sua idade em que ano? (atualmente estamos em <?php echo date("Y");?>) </label>
            <input type="number" name="anoEscolhido" id="anoEscolhido" value="<?=$anoEscolhido?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </div>

    <div class="result">
        <h2>Resultado</h2>
        <?php
            $calc = $anoEscolhido - $nasceu;

            echo "Quem nasceu em $nasceu vai ter <strong>$calc anos</strong> em $anoEscolhido!"; 
        ?>
    </div>
</body>
</html>