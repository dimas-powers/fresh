<?php
ini_set ( "display_errors",1 );
error_reporting ( E_ALL );


function getResult($file) {
	foreach ($file as $string_massiv) {
		$figure_massive[] = explode(' ', $string_massiv);
	}
	foreach ($figure_massive as $value) {
		$result[] = array_sum($value);	
		arsort($result);
	}
	return $result;
}

$datalist = file( $_SERVER['DOCUMENT_ROOT'] . '/datalist.txt');
$result = getResult($datalist);
echo '<pre>';
var_export($result);
