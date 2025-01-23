<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings Sequências</title>
</head>
<body>
     <?php 
     $nome = "Fabiano";
     $snome = "Hermann";
     $apelido = "Gafanhoto";
     //echo "$nome '$snome' $apelido"; Sem problemas por aspa simples entre.
     //echo "$nome ".$snome." $apelido"; Colocando Contatenação também funciona
     //echo "$nome \"$snome\" $apelido"; Colocando contra barra funciona também. Primeira vai atrás das aspa /" e a segunda também.
     //echo '$nome '$snome' $apelido'; Dentro de Aspas Simples(''), não posso usar aspas simples('').
     echo "$nome \"$snome\" $apelido";
     ?>
</body>
</html>