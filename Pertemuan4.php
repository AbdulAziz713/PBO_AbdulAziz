<?php
 
class PegadaianSyariah {
    var $pinjaman;
    var $bunga;
    var $lamaAngsuran;
    var $angsuran = array();
 
    
    function setPinjaman($pinjaman) {
        $this->pinjaman = $pinjaman;
    }
 
    function setBunga($bunga) {
        $this->bunga = $bunga;
    }
 
    function setLamaAngsuran($lamaAngsuran) {
        $this->lamaAngsuran = $lamaAngsuran;
    }
 
    function getAngsuran() {
        return $this->angsuran;
    }
 
   
    function hitungAngsuran() {
        $angsuranPokok = $this->pinjaman / $this->lamaAngsuran;
        $bungaAwal = ($this->bunga / 100) * $this->pinjaman;
        
        for ($i = 1; $i <= $this->lamaAngsuran; $i++) {
            $bungaAngsuran = $bungaAwal - (($i - 1) * ($bungaAwal / $this->lamaAngsuran));
            $totalAngsuran = $angsuranPokok + $bungaAngsuran;
            
            $this->angsuran[] = array(
                'bulan' => $i,
                'angsuran_pokok' => $angsuranPokok,
                'bunga' => $bungaAngsuran,
                'total' => $totalAngsuran
            );
        }
    }
 
    
    function tampilkanAngsuran() {
        foreach ($this->angsuran as $angsuran) {
            echo "Angsuran ke-{$angsuran['bulan']}: ";
            echo number_format($angsuran['angsuran_pokok'], 2) . " + " . number_format($angsuran['bunga'], 2);
            echo " = " . number_format($angsuran['total'], 2) . "<br>";
        }
    }
}

echo "Latihan 4" . "<br>";
echo "<br>";
echo "TOKO PEGADAIAN SYARIAH" . "<br>";
echo "<br>";
echo "Jl Keadilan No 16" . "<br>";
echo "<br>";
echo "Telp 72353459" . "<br>";
echo "<br>";
echo "Program Penghitung Besaran Angsuran Hutang" . "<br>";
echo "<br>";
echo "Besaran Pinjaman : Rp.1.000.000" . "<br>";
echo "<br>";
echo "Besaran Bunga : 10%" . "<br>";
echo "<br>";
echo "Lama Angsuran : 5 bulan" . "<br>";
echo "<br>";
$pegadaian = new PegadaianSyariah();
$pegadaian->setPinjaman(1000000); 
$pegadaian->setBunga(10);          
$pegadaian->setLamaAngsuran(5);    
$pegadaian->hitungAngsuran();
$pegadaian->tampilkanAngsuran();
 
?>