<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado de Conversão</h1>

    <?php 
    $início = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'\&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotação = $dados["value"][0]["cotacaoCompra"];
    echo "A cotação foi $cotação";
    $real = $_REQUEST ["real"] ?? 0;
    $dolar = $real / $cotação;

    Echo "Seus R\$" . number_format($real, 2, ",",".") . " equivalem a US\$" . number_format($dolar, 2 , ",", ".");

    //$padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 
    //Echo "Seus" . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
    

?>
<button onclick="javascript:history.go(-1)" class="voltar">Nova Conversão</button>
    
</body>
</html>