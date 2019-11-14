<pre>
Crie uma função recursiva para descobrir o menor número inteiro divisível por 2, 3 e 10 ao mesmo tempo. Quando encontrá-lo, imprima-o na tela.
<hr>
Resposta:

<?php



function divisivel($n) {
    if(($n % 2) + ($n % 3) + ($n % 10) == 0) {
	return $n;
    } else {
	return divisivel($n+1);
    }
}


echo divisivel(1);


?>
</pre>
