<?php
ini_set ( "display_errors",1 );
error_reporting ( E_ALL );
function getResult($file) {
    $file = file($file);
	foreach ($file as $string_arr) {
		$numeric_arr[] = explode(' ', $string_arr);
	}
    foreach ($numeric_arr as &$number) {
	    $number = array_filter($number, function ($value) {
            return preg_match('/\d+/', $value);
        });
		$result[] = array_sum($number);
		arsort($result);
	}
	return $result;
}
$file = __DIR__ . '/datalist.txt';
$result = getResult($file);
echo '<pre>';
var_export($result);
