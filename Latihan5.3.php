<?php
class Kendaraan
{
    var $Harga;
    var $BBM;
    var $PlatNomor;
    var $TahunPembuatan;

    public function setHarga($Harga) {
        $this->Harga = $Harga;
    }

    public function setBBM($BBM) {
        $this->BBM = $BBM;
    }

    public function setPlatNomor($PlatNomor){
        $this->PlatNomor = $PlatNomor;
    }

    public function setTahunPembuatan($TahunPembuatan){
        $this->TahunPembuatan = $TahunPembuatan;
    }

    public function getHarga() {
        return $this->Harga;
    }

    public function getBBM() {
        return $this->BBM;
    }

    public function getPlatNomor() {
        return $this->PlatNomor;
    }

    public function getTahunPembuatan() {
        return $this->TahunPembuatan;
    }

    public function StatusHarga() {
        if ($this->Harga > 50000000){
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    public function StatusBBM() {
        if ($this->BBM == 'Premium' && $this->TahunPembuatan < 2005){
            return "Mendapat Subsidi";
        } else {
            return "Tidak Mendapat Subsidi";
        }
    }

    public function HargaBekas() {
        if ($this->TahunPembuatan > 2005){
            return $this->Harga - ($this->Harga * 0.2);
        } elseif ($this->TahunPembuatan >= 2000 && $this->TahunPembuatan <= 2005){
            return $this->Harga - ($this->Harga * 0.3);
        } elseif ($this->TahunPembuatan < 2000){
            return $this->Harga - ($this->Harga * 0.4);
        }
    }
    
    public function StatusPajak() {
        if ($this->TahunPembuatan <= 2017){
            return $this->Harga * 0.025;
        } else {
            return 0;
        }
    }

    public function OperasiPlatNomor() {
        if ($this->PlatNomor % 2 == 0){
            return "Selasa, Kamis, Sabtu";
        } else {
            return "Senin, Rabu, Jumat";
        }
    }
}

$Data1 = array('70000000', 'Pertamax', '2122', 2003);
$Data2 = array('55000000', 'Premium', '2123', 2004);
$Data3 = array('40000000', 'Pertamax', '2124', 2006);

for($i = 1; $i <= 3; $i++) {
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setHarga (${"Data$i"}[0]);
    ${"kendaraan$i"}->setBBM (${"Data$i"}[1]);
    ${"kendaraan$i"}->setPlatNomor (${"Data$i"}[2]);
    ${"kendaraan$i"}->setTahunPembuatan (${"Data$i"}[3]);
}

for($i= 1; $i <= 3; $i++) {
    echo "Kendaraan $i". "<br>"
    ."Status Harga: " . ${"kendaraan$i"}->StatusHarga(). "<br>"
    ."Status BBM: " . ${"kendaraan$i"}->StatusBBM(). "<br>"
    ."Harga Bekas: " . ${"kendaraan$i"}->HargaBekas(). "<br>"
    ."Jumlah Pajak: " . ${"kendaraan$i"}->StatusPajak(). "<br>"
    ."Hari Operasi: " . ${"kendaraan$i"}->OperasiPlatNomor()."<br>"."<br>";
}
?>