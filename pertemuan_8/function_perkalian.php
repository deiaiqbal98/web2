<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
    $a = $angka1;
    $b = $angka2;
    $hasil = $a * $b;
    return $hasil;
}

//pemanggilan fungsi
$hasil = perkalian(5, 6);
echo "Perkalian 5 x 6 adalah $hasil";
echo "<br />";
echo "Perkalian 10 x 12 adalah " . perkalian(10, 12);
