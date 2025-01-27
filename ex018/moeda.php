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
    $cotação = 5.91;
    $real = $_REQUEST ["real"] ?? 0;
    $dolar = $real / $cotação;

    Echo "Seus R\$" . number_format($real, 2, ",",".") . " equivalem a US\$" . number_format($dolar, 2 , ",", ".");

    //$padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 
    //Echo "Seus" . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
    

?>
<button onclick="javascript:history.go(-1)" class="voltar">Nova Conversão</button>
    
</body>
</html>