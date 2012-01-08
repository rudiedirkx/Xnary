<pre><?php

require 'Xnary.php';

//xnary::$range = implode(range('A', 'Z'));



$range = str_split(Xnary::$range);
$ints = array();
		foreach ( $range AS $char3 ) {
			$str = $char3;
			$ints[] = $int = xnary::toInt($str);
			echo $str . ' -> ' . $int . "\n";
		}
	foreach ( $range AS $char2 ) {
		foreach ( $range AS $char3 ) {
			$str = $char2 . $char3;
			$ints[] = $int = xnary::toInt($str);
			echo $str . ' -> ' . $int . "\n";
		}
	}
foreach ( $range AS $char1 ) {
	foreach ( $range AS $char2 ) {
		foreach ( $range AS $char3 ) {
			$str = $char1 . $char2 . $char3;
			$ints[] = $int = xnary::toInt($str);
			echo $str . ' -> ' . $int . "\n";
		}
	}
}


echo "\n\n";


// unit test
for ( $i=0; $i<10; $i++ ) {
	$index = rand(0, count($ints)-1);
	$value = $ints[$index];
	if ( $index+1 == $value ) {
		echo $value . " -> OK\n";
	}
	else {
		echo "FAIL - [".$index."] != ".$value."\n";
	}
}


echo "\n\n";


debug(10);
debug(20);
debug(30);
debug(100);
debug(1000);
debug(10000);

echo "\n";

debug('A');
debug('AA');
debug('AAA');
debug('AAB');
debug('ABA');
debug('ABB');



function debug( $in ) {
	$delim = is_string($in) ? '"' : '';

	echo $delim . $in . $delim . '	-> ';

	if ( is_string($in) ) {
		echo xnary::toInt($in);
	}
	else {
		echo xnary::toString($in);
	}

	echo "\n\n";
}


