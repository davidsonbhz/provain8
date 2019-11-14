<pre>
Pensando em todos os números naturais inferiores a 10 que são múltiplos de 3 ou 5, temos 3, 5, 6 e 9. Somando esses múltiplos obtemos o valor 23. 
Utilize um algorítimo para calcular a soma de todos os múltiplos de 3 ou 5 abaixo de 1000.
<hr>
Resposta:

<?php


function multiplos($n) {
    if($n == 1000) {
	return 0;
    }

    return (($n % 3==0) || ($n %5==0) ? $n : 0) + multiplos($n+1);
    
}


echo multiplos(1);


?>
</pre>
