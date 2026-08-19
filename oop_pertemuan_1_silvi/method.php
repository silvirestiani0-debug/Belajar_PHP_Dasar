<?php

class LipBalm {

    public $harga = 25000;

    public function info(){
        echo "Lip balm Nivea harganya " . $this->harga;
    }

}

$nivea = new LipBalm();
//var_dump($nivea);
echo $nivea->harga;
$nivea->info();