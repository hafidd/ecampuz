<?php

$aplikasi[1]= 'gtAkademik';
$aplikasi[2]= 'gtFinansi';
$aplikasi[3]= 'gtPerizinan';
$aplikasi[4]= 'eCampuz';
$aplikasi[5]= 'eOviz';

$length = count($aplikasi);
$i = 1;

echo "<b>ARRAY LOOP (1_array_loop.php)</b> <br/>";
while($i <= $length) {
	echo $aplikasi[$i] . "<br/>";
	$i++;
}
