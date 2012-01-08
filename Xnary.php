<?php

class Xnary {
	// X = 62
	static public $range = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
	// X = 2
	//static public $range = '01';

	function toInt( $str ) {
		$range = self::$range;
		$power = strlen($range);

		$in = array_reverse(str_split($str));

		$out = 0;

		$location = 0;
		foreach ( $in AS $char ) {
			$index = strpos($range, $char);
			if ( false !== $index ) {
				$index += 1;

				$charValue = $index * pow($power, $location);
				$out += $charValue;

				$location++;
			}
		}

		return $out;
	}

	function toString( $int ) {
		$range = self::$range;
		$power = strlen($range);

		for ( $location=0; $location<20; $location++ ) {
			$base = pow($power, $location);
//var_dump($base);
		}

		$out = '';

		$location = 0;
		while ( $int > 0 && $location < 5 ) {
			$base = pow($power, $location);
			$location++;
		}

		return $out;
	}

	function fromInt( $int ) {
		return self::toString($int);
	}

	function fromString( $str ) {
		return self::toInt($str);
	}

}


