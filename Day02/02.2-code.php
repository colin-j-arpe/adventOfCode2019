<?php 

$input = [
	1,86,9,3,	//	0-3
	1,1,2,3,
	1,3,4,3,
	1,5,0,3,	//	12-15
	2,1,10,19,
	1,6,19,23,
	1,13,23,27,	//	24-27
	1,6,27,31,
	1,31,10,35,
	1,35,6,39,	//	36-39
	1,39,13,43,
	2,10,43,47,
	1,47,6,51,	//	48-51
	2,6,51,55,
	1,5,55,59,
	2,13,59,63,	//	60-63
	2,63,9,67,
	1,5,67,71,
	2,13,71,75,	//	72-75
	1,75,5,79,
	1,10,79,83,
	2,6,83,87,	//	84-87
	2,13,87,91,
	1,9,91,95,
	1,9,95,99,	//	96-99
	2,99,9,103,
	1,5,103,107,
	2,9,107,111,//	108-111
	1,5,111,115,
	1,115,2,119,
	1,9,119,0,	//	120-123
	99,
	2,0,14,0	//	125-128
];

$i = 0;

while ($i <= count($input)) {
	switch ($input[$i]) {
		case 1:
			$input[$input[$i+3]] = $input[$input[$i+1]] + $input[$input[$i+2]];
			break;
		case 2:
			$input[$input[$i+3]] = $input[$input[$i+1]] * $input[$input[$i+2]];
			break;
		case 99:
			die("Position 0 is now " . $input[0] . "; ended at index $i, which is " . $input[$i] . "\n");
			break;
		default:
			die("Error: not a 1 or 2 or 99\n");
			break;
	}
	$i += 4;
}