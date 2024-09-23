<?php
class Employee {
    public $nama;
    public $gaji;
    public $lamakerja;

    public function __construct($nama, $gaji, $lamakerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamakerja = $lamakerja;
    }
    
    public function hitunggaji($total_penjualan = 0) {
        return $this->gaji;
    }
}

class PegawaiMingguan extends Employee {
    public $harga_barang;
    public $stock_barang;

    public function __construct($nama, $gaji, $lamakerja, $harga_barang, $stock_barang) {
        parent::__construct($nama, $gaji, $lamakerja);
        $this->harga_barang = $harga_barang;
        $this->stock_barang = $stock_barang;
    }
    public function hitunggaji($total_penjualan = 0) {
        $gaji_tambahan = 0;
        $persentase_terjual = ($total_penjualan / $this->stock_barang) * 100;
        if ($persentase_terjual > 70) {
            $gaji_tambahan = $total_penjualan * ($this->harga_barang * 0.10);
        } else {
            $gaji_tambahan = $total_penjualan * ($this->harga_barang * 0.03);
        }
        return $this->gaji + $gaji_tambahan;
    }
}
$pegawai_mingguan = new PegawaiMingguan("Abdul Aziz", 5000, 2, 100, 200);
$total_penjualan = 150; 
echo "Nama: " . $pegawai_mingguan->nama . PHP_EOL;
echo "<br/>";
echo "Gaji yang dihitung: " . $pegawai_mingguan->hitunggaji($total_penjualan) . PHP_EOL;
?>