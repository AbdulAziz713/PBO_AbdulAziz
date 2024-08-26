<?php
class PinjamanUang {
    var $BesaranPinjaman = 1000000;
    var $BesaranBunga = 10/100;
    var $TotalPinjaman;
    var $LamaAngsuran = 5;
    var $DendaKeterlambatan;
    var $keterlambatan = 40;
    var $NamaPeminjam;

    function HitungTotalPinjaman() {
        $this->TotalPinjaman = $this->BesaranPinjaman + ($this->BesaranPinjaman * $this->BesaranBunga);
        return $this->TotalPinjaman;
    }

    function HitungAngsuran() {
        $TotalPinjaman = $this->HitungTotalPinjaman();
        $Angsuran = $TotalPinjaman / $this->LamaAngsuran;
        return $Angsuran;
    }

    function DendaKeterlambatan() {
        $Angsuran = $this->HitungAngsuran();
        $DendaPerHari = 0.15 / 100 * $Angsuran;
        $TotalDenda = $DendaPerHari * $this->keterlambatan;
        return $TotalDenda;
    }

    function TotalBayar() {
        $TotalPinjaman = $this->HitungTotalPinjaman();
        $TotalBayar = $TotalPinjaman / $this->LamaAngsuran + $this->DendaKeterlambatan();
        return $TotalBayar;
    }
}

$Pinjaman1 = new PinjamanUang();
$Pinjaman1->NamaPeminjam="Abdul Aziz";

echo "TOKO PEGADAIAN SYARIAH" . "<br>";
echo "Jl. Keadilan No 16" . "<br>";
echo "Telp. 72353459" . "<br>";
echo "<br>";
echo "Nama Peminjam: " . $Pinjaman1->NamaPeminjam . "<br>";
echo "Besaran Pinjaman: Rp. 1000000" . "<br>";
echo "Bunga: 10%" . "<br>";
echo "Total Pinjaman: Rp. " . $Pinjaman1->HitungTotalPinjaman() . "<br>";
echo "Lama Pinjaman: 5 Bulan" . "<br>";
echo "Besar Angsuran per bulan: Rp. " . $Pinjaman1->HitungAngsuran() . "<br>";
echo "Keterlambatan Angsuran (Hari): 40" . "<br>";
echo "Denda Keterlambatan: Rp. 13200" . "<br>";
echo "Besaran Pembayaran: " . $Pinjaman1->TotalBayar() . "<br>";
?>