<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Tempo</title>
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
        $tempo = $_POST["tempo"];
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="tempo">Qual é o total de segundos? </label>
            <input type="number" name="tempo" id="tempo" value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </div>

    <div class="result">
        <h2>Totalizando tudo</h2>
        <?php
            // $semanas = ($tempo/86400)/7;
            // $dias = ($tempo/86400)%7;
            // $horas = ($tempo/3600)%24;
            // $minutos = ($tempo/60)%60;
            // $segundos = (($tempo/60)%60)%60;
            /*O meu funcionou até minutos, mas não consegui fazer os segundos funcionarem*/

            $sobra = $tempo;
            //semanas
            $semanas = (int)($sobra / 604800);
            $sobra = $sobra % 604800;
            //dias
            $dias = (int)($sobra / 86400);
            $sobra = $sobra % 86400;
            //horas
            $horas = (int)($sobra / 3600);
            $sobra = $sobra % 3600;
            //minutos
            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;
            //segundos
            $segundos = $sobra;

            echo "Analisando o valor que você digitou, <strong>$tempo segundos</strong> equivalem a um total de:
            <br>
            <ul>
                <li>".(int)$semanas." semanas</li>
                <li>".(int)$dias." dias</li>
                <li>".(int)$horas." horas</li>
                <li>".(int)$minutos." minutos</li>
                <li>".(int)$segundos." segundos</li>
            </ul>"; 
        ?>
    </div>
</body>
</html>