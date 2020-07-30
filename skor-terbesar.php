<?php
function skor_terbesar($arr){
    $kelas = array();
    print_r($arr);
    echo "<br><br>";
for($x = 0; $x < count($arr); $x ++){
if(!array_key_exists($arr[$x]['kelas'], $kelas)){
        $ada = [$arr[$x]['kelas'] => $arr[$x]];
        $kelas = array_merge($kelas, $ada);
    }
    $namaKelas = $arr[$x]['kelas'];
    if($kelas["Laravel"]['nilai'] < $arr[$x]["nilai"]){
        $kelas[$namaKelas] = $arr[$x];
    }
}
    print_r($kelas);
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>