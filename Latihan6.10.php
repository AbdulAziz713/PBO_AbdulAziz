<?php
class PolaSegitiga {
    private $ukuran;

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    public function segitigaPertama() {
        for ($i = 2; $i <= $this->getUkuran(); $i++) {
            for ($j = $i; $j <= 15; $j++) {
                echo "&nbsp;&nbsp;";
            }

            for ($j = 0; $j < $i; $j++) {
                echo " * ";
            }

            for ($j = 2; $j < $i; $j++) {
                echo " * ";
            }

            echo '<br/>';
        }
    }

    public function SegitigaKedua() {
        for ($i = 2; $i <= $this->getUkuran(); $i++) {
            for ($j = $i; $j <= 6; $j++) {
                echo '';
            }

            for ($j = 1; $j < $i; $j++) {
                echo " * ";
            }

            for ($j = 7; $j < $i; $j++) {
                echo " * ";
            }

            echo '<br/>';
        }

        for ($i = 5; $i >=1; $i--) {
            for ($j = $i; $j >=1; $j--) {
                echo '';
            }

            for ($j = 0; $j < $i; $j++) {
                echo " * ";
            }

            echo '<br/>';
        }
    }

    public function SegitigaKetiga() {

        for ($i = 2; $i <= $this->getUkuran(); $i++) {
            for ($j = 6; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 2; $k <= $i; $k++) {
                echo "*";
            }
            
            echo "<br />";
        }
         
        for ($i = 5; $i >= 1; $i--) {
            for ($j = 5; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }

            echo "<br />";
        }
    }
}
$segitiga = new PolaSegitiga(); 
$segitiga->setUkuran(6);
$segitiga->segitigaPertama();
$segitiga->segitigaKedua();
$segitiga->segitigaKetiga();
?>
