<?php 
    $money = $_POST["money"];

    echo "<h1>Conversor de moedas 1.0</h1>
    Seus R$ $money equivalem a US$".(number_format($money / 5.22, 2))."<br>".
    "<strong>Cotação fixa de R$5,22</strong> informada diretamente no código. <br><br>";

    echo "tambem existe um outro metodo de formatação para exibir bonitinho os valores.
    <br><br>
    <strong>Ex:</strong>$ padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY)
    <br>
    echo 'bla bla bla'. numfmt_format_currency($ padrao, valor, 'BRL'). 'bla bla bla'. numfmt_format_currency($ padrao, valor, 'USD')
    <br><br>
    No xampp precisa habilitar algumas coisas para que esse outro metodo funcione. Precisa ir la na pasta etc no arquivo init e la dentro você ativa a biblioteca <strong>'intl'</strong>.
    <br>
    Provavelmente vai estar assim a linha: <strong>;extension=intl</strong>. Para resolver basta tirar esse ponto e virgula e restartar o servidor.
    <br>
    Para alguns dispositivos mesmo assim ela não funciona por alguma falha do proprio xampp então ai você senta e chora."
?>

<p><a href="javascript:history.go(-1)">Voltar</a></p>