<pre>
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
