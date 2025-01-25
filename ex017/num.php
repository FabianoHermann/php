<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Num php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>
    <p>
        <?php 
        $min= 1;
        $max= 100;
        $num = mt_rand($min=1 , $max=100);
        

    echo "<br> Gerando um número aleatório entre $min e $max";
    echo "<br> O Número Gerado foi <strong>$num</strong>";
        ?>
        
    </p>
    <button onclick="javascript:document.location.reload()" >&#x1F504;Gerar outro</button>
</body>
</html>