<?php
class kendaraan{
    private $warna;
    private $jumlah_pintu;
    private $jumlah_roda;
    public $harga;
    public $merk;

public function construct(){
    echo 'ini adalah kendaraan. <br />';
}

public function show_harga(){
    echo 'harga kendaraan : rp.'.$this->harga.'. <br />';
}

public function set_harga($harga){
    $this->harga = $harga;
    }
    
public function jalan(){
    echo 'brrroooooom!!!';
}
}

$saya_adalah_object = new kendaraan;
$saya_adalah_object->set_harga(100000);
$saya_adalah_object->show_harga();
$saya_adalah_object->jalan();
?>