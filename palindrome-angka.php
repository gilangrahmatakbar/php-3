<?php
function palindrome_angka($angka) {
  // tulis kode di sini

	if ($angka > 0 && $angka < 10){
		return ++$angka."<br>";
	}
	elseif ($angka > 10 && $angka == strrev($angka)) {
		echo $angka;
	}	
	elseif ($angka >= 10 && $angka != strrev($angka)) {
		while ($angka != strrev($angka)){
			$angka = $angka + 1;
		}
		echo $angka."<br>";
	}
	else {echo "Bukan angka yang dimaksud";}
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001





?>