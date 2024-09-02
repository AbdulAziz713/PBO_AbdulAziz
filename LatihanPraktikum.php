<?php
class Mahasiswa
{
    var $Nama;
    var $Kelas;
    var $MataKuliah;
    var $Nilai;
    var $status;
 
    public function setNama($Nama) {
        $this->Nama = $Nama;
    }
 
    public function setKelas($Kelas) {
        $this->Kelas = $Kelas;
    }
 
    public function setMataKuliah($MataKuliah) {
        $this->MataKuliah = $MataKuliah;
    }
 
    public function setNilai($Nilai) {
        $this->Nilai = $Nilai;
    }
 
    public function setstatus($status) {
        $this->status = $status;
    }
 
    public function getNama() {
        return $this->Nama;
    }
 
    public function getKelas() {
        return $this->Kelas;
    }
 
    public function getMataKuliah() {
        return $this->MataKuliah;
    }
 
    public function getNilai() {
        return $this->Nilai;
    }
 
    public function getStatus() {
        if ($this->Nilai >= 75) {
            return 'Lulus Kuis';
        } else {
            return 'Tidak Lulus Kuis';
        }
    }
}

$Data1 = array('Aditya', 'SI 2', 'Pemrograman Berbasis Objek', '80');
$Data2 = array('Shinta', 'SI 2', 'Pemrograman Berbasis Objek', '75');
$Data3 = array ('Ineu', 'SI 2', 'Pemrograman Berbasis Objek', '55');

    for($i = 1; $i <= 3; $i++) {
    for($h = 0; $h <= 5; $h++) {
        ${"Mahasiswa$i"} = new Mahasiswa();
        ${"Mahasiswa$i"}->setNama (${"Data$i"}[0]);
        ${"Mahasiswa$i"}->setKelas (${"Data$i"}[1]);
        ${"Mahasiswa$i"}->setMataKuliah (${"Data$i"}[2]);
        ${"Mahasiswa$i"}->setNilai (${"Data$i"}[3]);
    }
}

for($i= 1; $i <= 3; $i++) {
    echo "Nama : ".${"Mahasiswa$i"}->getNama()."<br>"
        ."Kelas : ".${"Mahasiswa$i"}->getKelas()."<br>"
        ."Mata Kuliah : ".${"Mahasiswa$i"}->getMataKuliah()."<br>"
        ."Nilai : ".${"Mahasiswa$i"}->getNilai ()."<br>"
        .${"Mahasiswa$i"}->getStatus()."<br><br>";
}
?>
