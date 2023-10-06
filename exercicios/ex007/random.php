<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random</title>
</head>
<body>
    <form method="post">
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre <strong>0 e 100</strong>...</p>
        <input type="submit" name="btn" value="Gerar número">
    </form>

    <?php 
    if(array_key_exists("btn", $_POST)){
        btn();
    }

    function btn() {
        //rand() é antigo
        //mt_rand() Mersenne Twister
        //random_int() é criptograficamente seguro, porem lento
        echo "O valor gerado com <strong>rand()</strong> foi ".rand(0,100)."<br>". "O valor gerado com <strong>mt_rand()</strong> foi ".mt_rand(0,100)."<br>".
        "O valor gerado com <strong>random_int()</strong> foi ".random_int(0,100);
    }
?>
</body>
</html>