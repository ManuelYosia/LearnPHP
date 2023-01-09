<?php
require "classOrtu.php";
require "classAnak.php";

$budi = new OrangTua("Budi", 5000000);
$ucup = new anak("Ucup");

function ortuMemberi($nominal, $ortu, $anak) { //fungsi ortuMemberi memiliki 3 argumen yaitu nominal uang, ortu, anak.
    if($ortu->uang >= 0 && $ortu->uang >= $nominal) {
        echo "<hr>";
        $nominalTransfer = $ortu->kasihUang($nominal);
        $anak->terimaUang($nominalTransfer);
    } else {
        echo "<hr>";
        echo "Saldo tidak cukup <br>";
        echo "Saldo $ortu->nama sekarang $ortu->uang";
    }
    
}

function anakMeminta($nominal, $ortu, $anak) { //fungsi untuk anak jika meminta
    if($ortu->uang >= 0 && $ortu->uang >= $nominal) {
        ortuMemberi($nominal, $ortu, $anak);
    } else {
        echo "<hr>";
        echo "Gak punya uang nak :( <br>";
        echo "Papa cuma punya uang $ortu->uang <br> ";
    }
}

