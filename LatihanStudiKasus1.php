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

    public function menghitunggaji() {
        return $this->gaji;
    }
}
class Programmer extends Employee {
    public function  menghitunggaji() {
        $bonus = 0; 
        if ($this->lamakerja < 1) {
            return $this->gaji;
        } elseif ($this->lamakerja <= 10) {
            $bonus = 0.01 * $this->lamakerja;
        } else {
            $bonus = 0.02 * $this->lamakerja;
        }
        return $this->gaji * (1 + $bonus);
    }
}
$programmer = new Programmer("Abdul Aziz", 5000, 5);
echo "Nama: " . $programmer->nama . "\n";
echo "<br/>";
echo "Gaji : " . $programmer->menghitunggaji() . "\n";
?>