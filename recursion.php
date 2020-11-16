<?php
echo "masukkan nilai : ";
$i = trim(fgets(STDIN));


function recursion($i){

    if ($i <= 100){
        echo "Nilai : $i\n";
        recursion($i + 1);
    }
}

recursion($i);


?> 