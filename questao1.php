<pre>
Tendo os arrays ['ES', 'MG', 'RJ', 'SP'] e ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'], percorra os vetores dados e 
crie um outro com a seguinte estrutura: ['ES'=>'Espírito Santo', 'MG'=>'Minas Gerais', 'RJ'=>'Rio de Janeiro', 'SP'=>'São Paulo']. Depois de criado 
terceiro vetor, leia-o e imprima em cada linha a chave de cada posição e seu respectivo valor separados por "-".
<hr>
Resposta 1 (utilizando funcao do proprio php):

<?php

$v1 = ['ES','MG','RJ','SP'];
$v2 = ['Sao Paulo','Rio de Janeiro','Minas Gerais','Espirito Santo'];

asort($v1);
asort($v2);

$v3 = array_combine($v1, $v2);
foreach($v3 as $k => $v) {
	echo "$k - $v <br>";
}


?>
<hr>
Resposta 2 (implementacao propria)

<?php
$v4 = array();

for($i = 0; $i < count($v1); $i++) {
    $v4[$v1[$i]]=$v2[$i];
}

foreach($v4 as $k => $v) {
	echo "$k - $v <br>";
}



?>


</pre>

