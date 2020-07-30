<?php

function cari_mean($arr){
	$awal = 0;
	$x = 0;
	while ( $x <count($arr) ){
		$awal += $arr[$x];
		$x++;
	}
	$avg = $awal / count($arr);
	return $avg."<br>";
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>