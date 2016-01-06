
<?php
function echoa($array) {
	echo("<pre>");
	print_r($array);
	echo("</pre>");
}

$a = array(1, 2, array("a", "b", "c"));

$b = 3.1;

$c = true;


echoa($a);
echoa($b);
echoa($c);
?>