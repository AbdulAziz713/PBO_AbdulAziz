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
    public function hitunggaji() {
        return $this->gaji;
    }
}
class Direktur extends Employee {
    public function hitunggaji() {
        $bonus = 0.5 * $this->lamakerja;
        $tunjangan = 0.1 * $this->lamakerja;
        return $this->gaji * (1 + $bonus + $tunjangan);
    }
}

$direktur = new Direktur("Abdul Aziz", 10000, 8);
echo "Nama: " . $direktur->nama . "\n";
echo "<br/>";
echo "Gaji : " . $direktur->hitunggaji() . "\n";
?>