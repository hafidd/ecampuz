<?php
function pembagian($a, $b)
{
	$hasil = 0;
	while ($a >= $b) {
		$hasil++;
		$a -= $b;
	}

	return $hasil;
}

echo "<b>OPERATOR LOGIC (3_operator_logic.php)</b><br />";
echo "7:2 = " . pembagian(7,2) . "<br/>";
echo "8:4 = " . pembagian(8,4) . "<br/>";
