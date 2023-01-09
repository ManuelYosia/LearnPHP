<?php

class OrangTua{
    public $nama;
    public $uang;

    public function __construct($nama, $uang) {
        $this->nama = $nama;
        $this->uang = $uang;
        //untuk menampilkan nama dan uang orang tua awal
        echo "Nama orang tua: <b>$this->nama</b> <br> Saldo Awal: $this->uang </br>";
    }

    public function kasihUang($nominal) { //untuk kasih uang dan menampilkan saldo
        $this->uang -= $nominal;
        echo "-$nominal</br>";
        $this->displaySaldo();
        return $nominal;
    }

    public function displaySaldo() { //menampilkan saldo
        echo "Saldo <b>$this->nama</b>: $this->uang </br>";
    }

    //gimana kalau ada penambahan saldo?
    public function gajian($nominal) {// fungsi jika ortu gajian
        $this->uang += $nominal;
        echo "+$nominal</br>";
        echo "Total Saldo $this->nama sekarang $this->uang";
    }
}
