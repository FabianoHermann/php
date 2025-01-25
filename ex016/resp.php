<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado Final</h1>
    
    <?php 
    $n = $_REQUEST ["num"] ?? 0;
    $a = $n - 1 ;
    $s = $n + 1 ;
    

    Echo "<p>Número escolhido foi $n <p/>";
    Echo "<p>Seu antecessor é $a<p/>";
    Echo "<p>Seu sucessor é $s<p/>";
    //onclick="javascript:window.location.href='index.html'"

    ?>
    <button onclick="javascript:history.go (-1)" class="voltar" > &#x2B05;Voltar</button>
    
</body>
</html>