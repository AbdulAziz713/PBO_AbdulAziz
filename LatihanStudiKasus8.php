<?php
class Karyawan {
    public $nama;
    public $golongan;
    public $totalJamLembur;
    public $totalGaji;

    function __construct($nama, $golongan, $totalJamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->totalJamLembur = $totalJamLembur;
        $this->totalGaji = 0;
    }

    function __destruct() {
        echo "Data karyawan {$this->nama} telah dihapus.<br/>";
    }

    function setNama($nama) {
        $this->nama = $nama;
    }

    function getNama() {
        return $this->nama;
    }

    function setGolongan($golongan) {
        $this->golongan = $golongan;
    }

    function getGolongan() {
        return $this->golongan;
    }

    function setTotalJamLembur($totalJamLembur) {
        $this->totalJamLembur = $totalJamLembur;
    }

    function getTotalJamLembur() {
        return $this->totalJamLembur;
    }

    function getGajiPokok() {
        $gajiPokok = 0;
        switch ($this->golongan) {
            case "Ib":
                $gajiPokok = 1250000;
                break;
            case "Ic":
                $gajiPokok = 1300000;
                break;
            case "Id":
                $gajiPokok = 1350000;
                break;
            case "IIa":
                $gajiPokok = 2000000;
                break;
            case "IIb":
                $gajiPokok = 2100000;
                break;
            case "IIc":
                $gajiPokok = 2200000;
                break;
            case "IId":
                $gajiPokok = 2300000;
                break;
            case "IIIa":
                $gajiPokok = 2400000;
                break;
            case "IIIb":
                $gajiPokok = 2500000;
                break;
            case "IIIc":
                $gajiPokok = 2600000;
                break;
            case "IIId":
                $gajiPokok = 2700000;
                break;
            case "IVa":
                $gajiPokok = 2800000;
                break;
            case "IVb":
                $gajiPokok = 2900000;
                break;
            case "IVc":
                $gajiPokok = 3000000;
                break;
            case "IVd":
                $gajiPokok = 3100000;
                break;
        }
        return $gajiPokok;
    }

    function hitungTotalGaji() {
        $gajiPokok = $this->getGajiPokok();
        $lembur = $this->totalJamLembur * 15000;
        $this->totalGaji = $gajiPokok + $lembur;
    }

    function tampilkanData() {
        $this->hitungTotalGaji();
        echo "Nama Karyawan : " . $this->nama . "<br/>";
        echo "Golongan : " . $this->golongan . "<br/>";
        echo "Total Jam Lembur : " . $this->totalJamLembur . "<br/>";
        echo "Total Gaji : Rp " . $this->totalGaji . "<br/>";
        echo "<br/>";
    }
}

$karyawanList = [
    new Karyawan("Winny", "IIb", 30),
    new Karyawan("Stendy", "IIIc", 32),
    new Karyawan("Alfred", "IVb", 30),
    new Karyawan("Ferdinand", "IIIc", 40),
];

foreach ($karyawanList as $karyawan) {
    $karyawan->tampilkanData();
}
?>