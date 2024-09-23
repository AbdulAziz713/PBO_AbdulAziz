<?php
class PolaSegitiga {
    private $ukuran;

    // Setter untuk ukuran
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    // Getter untuk ukuran
    public function getUkuran() {
        return $this->ukuran;
    }

    // Segitiga pertama (piramida normal)
    public function segitigaPertama() {
        for ($i = 1; $i <= $this->getUkuran(); $i++) {
            // Cetak spasi untuk membuat pola segitiga
            for ($j = $i; $j < $this->getUkuran(); $j++) {
                echo "&nbsp;&nbsp;";
            }

            // Cetak bintang bagian kiri
            for ($j = 1; $j <= $i; $j++) {
                echo " * ";
            }

            // Cetak bintang bagian kanan (tidak cetak bintang paling kiri)
            for ($j = 1; $j < $i; $j++) {
                echo " * ";
            }

            echo '<br/>';
        }
    }

    // Segitiga kedua (terbalik)
    public function segitigaKedua() {
        for ($i = $this->getUkuran(); $i >= 1; $i--) {
            // Cetak spasi di sebelah kiri
            for ($j = $this->getUkuran(); $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }

            // Cetak bintang
            for ($j = 1; $j <= $i; $j++) {
                echo " * ";
            }

            // Cetak bagian kanan (tidak cetak bintang paling kanan)
            for ($j = 1; $j < $i; $j++) {
                echo " * ";
            }

            echo '<br/>';
        }
    }

    // Segitiga ketiga (segitiga kiri)
    public function segitigaKetiga() {
        for ($i = 1; $i <= $this->getUkuran(); $i++) {
            // Cetak bintang bagian kiri
            for ($j = 1; $j <= $i; $j++) {
                echo " * ";
            }

            echo '<br/>';
        }
    }
}

// Inisialisasi objek dan set ukuran
$segitiga = new PolaSegitiga();
$segitiga->setUkuran(6);

// Cetak segitiga pertama
$segitiga->segitigaPertama();
echo '<br/>';

// Cetak segitiga kedua
$segitiga->segitigaKedua();
echo '<br/>';

// Cetak segitiga ketiga
$segitiga->segitigaKetiga();
?>