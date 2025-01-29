<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somadores de valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
        ?>
        <h1>Somadores de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.01">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>" step="0.01">
        <input type="submit" value="Somar">
        <input type="button" id="reset-btn" value="Limpar">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
        $soma = $valor1 + $valor2;
        print "<p>A soma entre os valores $valor1 e $valor2 é igual a $soma.</p>";
        ?>
    </section>
    <script>
    document.getElementById("reset-btn").addEventListener("click", function() {
        window.location.href = window.location.pathname; // Redireciona sem parâmetros
    });
</script>

    
</body>
</html>