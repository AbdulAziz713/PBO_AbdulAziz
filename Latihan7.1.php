<?php
class manusia{
    public $nama;
    public $umur;
    public $gender;
    function bicara(){
        echo "Selamat Datang";
    }
    function getInfo(){
        echo "Nama=".$this->nama."<br/>";
        echo "Umur=".$this->umur."<br/>";
        echo "JK=".$this->gender."<br/>";
    }
}
class ayah extends manusia{
    function pekerjaan(){ echo "Pegawai Negeri Sipil";
    }
}

class ibu extends manusia{
    function pekerjaan(){ echo "Ibu Rumah Tangga";
    }
}
class anak extends manusia{
    function pekerjaan() { echo "Pelajar";
    }
}

$objekAyah = new ayah();
$objekAyah ->nama="Budi";
$objekAyah ->gender="Laki-Laki";
$objekAyah ->umur="45";
echo "<b>Info Ayah</b><br/>";
$objekAyah ->getinfo();
$objekAyah ->pekerjaan();

$objekibu = new ibu();
$objekibu ->nama="Dini";
$objekibu ->gender="Perempuan";
$objekibu ->umur="38";
echo "<b>Info Ibu</b><br/>";
$objekibu ->getInfo();
$objekibu ->pekerjaan();

$objekAnak = new anak();
$objekAnak ->nama="Ardi";
$objekAnak ->gender="Laki-Laki";
$objekAnak ->umur="15";
echo "<b>Info Anak</b><br/>";
$objekAnak ->getInfo();
$objekAnak ->pekerjaan();
?>