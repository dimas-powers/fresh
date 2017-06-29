<?php
ini_set ( "display_errors",1 );
error_reporting ( E_ALL );


function getResult($file) {
	foreach ($file as $string_arr) {
		$numeric_arr[] = explode(' ', $string_arr);
	}
	foreach ($numeric_arr as $number) {
		$result[] = array_sum($number);	
		arsort($result);
	}
	return $result;
}

$datalist = file( $_SERVER['DOCUMENT_ROOT'] . '/datalist.txt');
$result = getResult($datalist);
echo '<pre>';
var_export($result);
