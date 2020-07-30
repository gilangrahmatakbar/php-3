<?php
function papan_catur($angka) {
for($bcol=0; $bcol < $angka ;$bcol++)
{
for($bbar=0;$bbar<2*($angka)-1;$bbar++)
{
    if($bbar % 2 == 1 && $bcol % 2 == 1){
        echo "#&nbsp";} 
    else if($bbar%2 == 0 && $bcol%2==0){
        echo "#&nbsp";       
    }
    else{ echo "&nbsp";}
    }
    echo "<br>";
}
}

echo papan_catur(4); 
echo "<br>";
echo papan_catur(8);
echo "<br>";
echo papan_catur(5);
