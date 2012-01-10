<p><a href="https://github.com/rudiedirkx/Xnary">https://github.com/rudiedirkx/Xnary</a></p>
<pre><?php

require 'Xnary.php';

xnary::$range = implode(range('A', 'Z'));


$str = array();
$lastN = 1;
for ( $i=0; $i<10; $i++ ) {
	$lastN *= rand(1, 10);
	$str[] = debug($lastN);
}


// Helper
function debug( $in, $space = true ) {
	$delim = is_string($in) ? '"' : '';

	echo $delim . $in . $delim . '	-> ';

	if ( is_string($in) ) {
		echo $rsp = xnary::toInt($in);
		echo "\t-> ";
		echo $check = xnary::toString($rsp);
	}
	else {
		echo $rsp = xnary::toString($in);
		echo "\t-> ";
		echo $check = xnary::toInt($rsp);
	}

	echo "\t-> ";
	echo $check === $in ? 'OK' : 'FAIL';

	echo $space ? "\n\n" : "\n";

	return $rsp;
}


