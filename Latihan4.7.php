<?php
class Kendaraan
{
    var $Merek;
    var $jmlroda;
    var $Harga;
    var $warna;
    var $bhnbakar;
    var $tahun;
 
    public function setMerek($Merek) {
        $this->Merek = $Merek;
    }
 
    public function setjmlroda($jmlroda) {
        $this->jmlroda = $jmlroda;
    }
 
    public function setHarga($Harga) {
        $this->Harga = $Harga;
    }
 
    public function setwarna($warna) {
        $this->warna = $warna;
    }
 
    public function setbhnbakar($bhnbakar) {
        $this->bhnbakar = $bhnbakar;
    }
 
    public function settahun($tahun) {
        $this->tahun = $tahun;
    }
 
    public function getMerek() {
        return $this->Merek;
    }
 
    public function getjmlroda() {
        return $this->jmlroda;
    }
 
    public function getHarga() {
        return $this->Harga;
    }
 
    public function getWarna() {
        return $this->warna;
    }
 
    public function getBhnBakar() {
        return $this->bhnbakar;
    }
 
    public function getTahun() {
        return $this->tahun;
    }
 
    public function statusHarga() {
        if ($this->Harga > 50000000) {
            return 'Harga Mahal';
        } else {
            return 'Harga Terjangkau';
        }
    }
 
    public function dapatSubsidi() {
        if ($this->tahun < 2005) {
            return 'Dapat subsidi';
        } else {
            return 'Tidak dapat subsidi';
        }
    }
 
    public function hargaSecondKendaraan() {
        return $this->Harga * 0.6;
    }
}

$Data1 = array('Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premium', '2005');
$Data3 = array ('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');

    for($i = 1; $i <= 3; $i++) {
    for($h = 0; $h <= 5; $h++) {
        ${"kendaraan$i"} = new Kendaraan();
        ${"kendaraan$i"}->setMerek (${"Data$i"}[0]);
        ${"kendaraan$i"}->setjmlroda (${"Data$i"}[1]);
        ${"kendaraan$i"}->setHarga (${"Data$i"}[2]);
        ${"kendaraan$i"}->setwarna (${"Data$i"}[3]);
        ${"kendaraan$i"}->setbhnbakar (${"Data$i"}[4]);
        ${"kendaraan$i"}->settahun (${"Data$i"}[5]);
    }
}

for($i= 1; $i <= 3; $i++) {
    echo "\$kendaraan$i<br>"
        .${"kendaraan$i"}->getMerek()."<br>"
        .${"kendaraan$i"}->getjmlroda()."<br>"
        .${"kendaraan$i"}->getHarga ()."<br>"
        .${"kendaraan$i"}->getWarna ()."<br>"
        .${"kendaraan$i"}->getBhnBakar()."<br>"
        .${"kendaraan$i"}->getTahun ()."<br>"
        .${"kendaraan$i"}->statusHarga()."<br>"
        .${"kendaraan$i"}->dapatSubsidi ()."<br>"
        .${"kendaraan$i"}->hargaSecondKendaraan ()."<br><br>";
}
?>