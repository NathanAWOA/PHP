<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Raiz Quadrada e Cubica</title>
</head>
<body>
    <?php 
        $num = $_POST["num"] ?? 0;
    ?>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="num">Número: </label>
            <input type="number" step="0.01" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </div>

    <div class="result">
        <h2>Resultado</h2>
        <?php
            $quadrada = sqrt((float)$num);
            $cubica = $num**(1/3);

            echo "<p>Analisando o <strong>número $num</strong>: </p>
                <ul>
                    <li>A sua raiz quadrada é <strong>".number_format($quadrada, 3, ",")."</strong></li>
                    <li>A sua raiz cúbica é <strong>".number_format($cubica, 3, ",")."</strong></li>
                </ul>"; 
        ?>
    </div>
</body>
</html>