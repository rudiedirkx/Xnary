<?php

class Xnary {
	// X = 62
	static public $range = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
	// X = 2
	//static public $range = '01';

	function toInt( $str ) {
		$range = self::$range;
		$base = strlen($range);

		$in = array_reverse(str_split($str));

		$out = 0;

		$location = 0;
		foreach ( $in AS $char ) {
			$index = strpos($range, $char);
			if ( false !== $index ) {
				$index += 1;

				$charValue = $index * pow($base, $location);
				$out += $charValue;

				$location++;
			}
		}

		return $out;
	}

	function toString( $int ) {
		$range = self::$range;
		$base = strlen($range);
		$range = str_split($range);

		$size = ceil(log($int, $base)) - 1;
echo '['.$size.'] ';

		$out = '';

		for ( $location=$size; $location>=1; $location-- ) {
			$locValue = pow($base, $location);
echo '['.$locValue.'] ';
			$charValue = ceil($int / $locValue)- 1;
echo '['.$charValue.'] ';

			$out .= $range[$charValue-1];

			$int -= $charValue * $locValue;
echo '['.$int.'] ';
		}

		$out .= $range[$int-1];

		return $out;
	}

	function fromInt( $int ) {
		return self::toString($int);
	}

	function fromString( $str ) {
		return self::toInt($str);
	}

}


