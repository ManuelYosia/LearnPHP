<?php
class Anak{
    public $nama;
    public $uang = 0;

    public function __construct($nama) {
        $this->nama = $nama;

        echo "Nama orang anak: <b>$this->nama</b> <br> Saldo Awal: $this->uang </br>";
    }

    public function terimaUang($nominal) { //fungsi terima uang
        $this->uang = $nominal;
        echo "+$nominal</br>";
        $this->displaySaldo();
    }

    public function displaySaldo() { //untuk menampilkan nama dan uang anak
        echo  "Saldo <b>$this->nama</b>: $this->uang </br>";
    }

}