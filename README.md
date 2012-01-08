
# Xnary

Xnary is a binary converter for not binaries. Bi = X.

Instead of 0 and 1, you can use `A - Z`. Or `A-Z0-9a-z` (the default).

Binary just became Xnary!

## Examples

The dafault range:

	debug('A'); // 1
	debug('AA'); // 63
	debug('BA'); // 125
	debug('zzz'); // 242234
	// That gets out of hand fast!

A much smaller range:

	Xnary::$range = implode(range('A', 'Z')); // only 26! Still, more than 2
	
	debug('A'); // 1
	debug('AA'); // 27
	debug('BA'); // 53
	debug('ZZZ'); // 18278
