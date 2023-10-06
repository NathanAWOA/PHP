<?php
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");

    //link da api
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    //decodificando e tratando o json da api
    $dados = json_decode(file_get_contents($url), true);
    
    // var_dump($dados);

    $money = $_POST["money"];

    //selecionando os dados expecificios que queremos
    $cotacao = $dados["value"][0]["cotacaoCompra"];

    echo "<h1>Conversor de moedas 2.0</h1>
    Seus R$". $money." equivalem a US$". (number_format($money / $cotacao, 2))."<br>".
    "Cotação obtida pela api do <strong>Banco Central.</strong>";
?>

<p><a href="javascript:history.go(-1)">Voltar</a></p>