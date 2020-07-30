<?php
function pasangan_terbesar($angka)
{
	$keString = strval($angka);
	$hasil = [];

	for($a = 0; $a < strlen($keString) - 1; $a++) {
		$hasil[] = $keString[$a].$keString[$a+1];
	}
	$hasil = max($hasil);
	$hasil = (float)$hasil;
	echo $hasil."<br>";
}

// TEST CASES
pasangan_terbesar(641573); // 73
pasangan_terbesar(12783456); // 83
pasangan_terbesar(910233); // 91
pasangan_terbesar(71856421); // 85
pasangan_terbesar(79918293); // 99

?>