<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php   
       // 0x = hexadecimal 0b = binário 0 = Octal
       //$num = 010;
       //echo "O valor da variável é $num";

        //$v="Fabiano";
        //var_dump($v);

        //$num = (integer) 3e2;  //3x 10(2); coerção
        //echo "O valor é $num";
        //var_dump($num);

        //$num = (double) "950";
        //var_dump($num)

        //$casado = false;
        //print "O valor para casado é $casado";
        //var_dump($casado)

        //$vet = [6,2,"Katine",3.5,6,false];
        //var_dump($vet);
        class Pessoa {
            private string $nome;
        }
        $p= new Pessoa;
        var_dump($p)
    
    ?>
    
</body>
</html>