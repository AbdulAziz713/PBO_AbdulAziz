<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;
    var $jeniskendaraan;
    var $StatusKendaraan;

    function setMerek ($x) {
    $this->merek = $x;
    }

    function getMerek() {
    return $this->merek; 
    }

    function setHarga ($y) {
    $this->harga = $y;
    }

    function getHarga () {
    return $this->harga;
    }

    function setKendaraan ($y) {
    $this->jeniskendaraan = $y;
    }

    function getKendaraan () {
    return $this->jeniskendaraan;
    }

    function setStatusKendaraan ($y) {
        $this->StatusKendaraan = $y;
        }
    
    function getStatusKendaraan () {
    return $this->StatusKendaraan;
    }
}

$kendaraan1 = new Kendaraan;
$kendaraan1->setHarga (10000000);
$kendaraan1->setMerek ('Yamaha Mio');
$kendaraan1->setKendaraan ('Motor');
$kendaraan1->setStatusKendaraan ('Brand New');

$kendaraan2 = new Kendaraan;
$kendaraan2->setHarga (200000000);
$kendaraan2->setMerek ('Honda Brio');
$kendaraan2->setKendaraan ('Mobil');
$kendaraan2->setStatusKendaraan ('Second Hand');

echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();
echo "<br>";
echo $kendaraan1->getKendaraan();
echo "<br>";
echo $kendaraan1->getStatusKendaraan();
echo "<br>";
echo "<br>";

echo $kendaraan2->getMerek();
echo "<br>";
echo $kendaraan2->getHarga();
echo "<br>";
echo $kendaraan2->getKendaraan();
echo "<br>";
echo $kendaraan2->getStatusKendaraan();
?>