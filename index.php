<p><a href="https://github.com/rudiedirkx/Xnary">https://github.com/rudiedirkx/Xnary</a></p>
<pre><?php

require 'Xnary.php';

xnary::$range = implode(range('A', 'Z'));

// Problems:
debug(158760);
debug(46656);

$str = array();
$lastN = 1;
for ( $i=0; $i<8; $i++ ) {
	$lastN *= rand(1, 9);
	$str[] = debug($lastN);
}

echo "\n";

debug('A');
debug('AA');
debug('AAA');
debug('AAB');
debug('ABA');
debug('ABB');



function debug( $in, $space = true ) {
	$delim = is_string($in) ? '"' : '';

	echo $delim . $in . $delim . '	-> ';

	if ( is_string($in) ) {
		echo $rsp = xnary::toInt($in);
	}
	else {
		echo $rsp = xnary::toString($in);
	}

	echo $space ? "\n\n" : "\n";

	return $rsp;
}


