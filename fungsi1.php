<?php

echo "--------------------------------------\n";
echo "Pilih proses yang ingin anda lakukan : \n";
echo "--------------------------------------\n";
echo "1. Menghitung luas segitiga \n";
echo "2. Menghitung luas persegi panjang \n";
echo "--------------------------------------\n";
echo "Masukan Pilihan Anda : ";
$p = trim(fgets(STDIN));

prosesPemilihan();

function prosesPemilihan() {
    global $p;
    if ($p==1) {
        luassegitiga();
    }
    else if ($p==2) {
        luaspersegipanjang();
    }
    else{
        echo "Tidak Ditemukan";
    }
}

function luassegitiga() {
    
    echo "masukkan alas : ";
    $a = trim(fgets(STDIN));

    echo "masukkan tinggi : ";
    $t = trim(fgets(STDIN));
    $s = 1.2;

    $l = $s * $a * $t;
    echo "luasnya adalah = $l \n";
}

function luaspersegipanjang() {

    echo "masukkan panjang : ";
    $q = trim(fgets(STDIN));

    echo "masukkan lebar : ";
    $w = trim(fgets(STDIN));

    $e = $q * $w;
    echo "luasnya adalah = $e \n";
}
?>