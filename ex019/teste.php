<pre>

<?php 


$url = '{"@odata.context":"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)","value":[{"cotacaoCompra":5.89190,"dataHoraCotacao":"2025-01-24 13:03:26.922"}]}';

$dados = json_decode(file_get_contents($url), true);

var_dump($dados);

?>
</pre>