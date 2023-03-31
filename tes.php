<?php

function luasLingkaran(float $angka)
{
    $jari_jari = $angka/3;
    $luas = 3.14 * ($jari_jari * $jari_jari);
    return $luas;
}

function luasPersegi(float $angka)
{
    $panjang = $angka / 3;
    $lebar = $angka / 5;
    $luas = $panjang * $lebar;
    return $luas;
}

function kelilingLingkaran(float $angka)
{
    $jari_jari = $angka/5;
    $keliling = 3.14 * ($jari_jari * 2);
    return $keliling;
}

for ($i=1.00; $i <= 100; $i++) { 
    if ($i%3==0 && $i%5==0) {
        echo number_format(luasPersegi($i)) . PHP_EOL;
    }
    elseif ($i%3==0) {
        echo number_format(luasPersegi($i),2) . PHP_EOL;
    }
    elseif ($i%5==0) {
        echo number_format(kelilingLingkaran($i),2) . PHP_EOL;
    }
    else{
        echo number_format($i,2) . PHP_EOL;
    }
}
