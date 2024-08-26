<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek;
    var $tahunpembuatan = 2004;
 
    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
 
    function dapatSubsidi()
    {
        if ($this->bahanBakar == "Premium") {
            $status = "Dapat Subsidi";
        } else {
            $status = "Tidak Dapat Subsidi";
        }
        return $status;
    }
    function hargaSecondKendaraan()
    {
        if ($this->tahunpembuatan < 1999) {
            $status = 1000000;
        } else {
            $status = 100000000;
        }
        return $status;
    }
}
$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan1->harga = 1000000;
$ObjekKendaraan1->tahunpembuatan = 1999;
echo "Status Harga : " . $ObjekKendaraan1->statusHarga();
 
$ObjekKendaraan2 = new Kendaraan();
$ObjekKendaraan2->bahanBakar = "Pertamax";
$ObjekKendaraan2->tahunpembuatan = 1999;
echo "<br>";
echo "Status BBM : " . $ObjekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas : " . $ObjekKendaraan2->hargaSecondKendaraan();
?>