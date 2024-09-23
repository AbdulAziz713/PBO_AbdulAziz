<?php
class BangunRuang {
    private $jenis;
    private $sisi;
    private $jari_jari;
    private $tinggi;

    public function setValues($jenis, $sisi, $jari_jari, $tinggi) {
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function getVolume() {
        $pi = 3.14;
        
        switch ($this->jenis) {
            case "Bola":
                return (4/3) * $pi * ($this->jari_jari ** 3);
            case "Kerucut":
                return (1/3) * $pi * ($this->jari_jari ** 2) * $this->tinggi;
            case "Limas Segi Empat":
                return (1/3) * ($this->sisi ** 2) * $this->tinggi;
            case "Kubus":
                return $this->sisi ** 3;
            case "Tabung":
                return $pi * ($this->jari_jari ** 2) * $this->tinggi;
            default:
                return 0;
        }
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getSisi() {
        return $this->sisi;
    }

    public function getJariJari() {
        return $this->jari_jari;
    }

    public function getTinggi() {
        return $this->tinggi;
    }
}

$bangunRuangList = [
    ["Bola", 0, 7, 0],
    ["Kerucut", 0, 14, 10],
    ["Limas Segi Empat", 8, 0, 24],
    ["Kubus", 30, 0, 0],
    ["Tabung", 0, 7, 10]
];

$bangunRuang = new BangunRuang();

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Jenis Bangun Ruang</th><th>Sisi</th><th>Jari-jari</th><th>Tinggi</th><th>Volume</th></tr>";

foreach ($bangunRuangList as $data) {
    $bangunRuang->setValues($data[0], $data[1], $data[2], $data[3]);

    echo "<tr>";
    echo "<td>" . $bangunRuang->getJenis() . "</td>";
    echo "<td>" . $bangunRuang->getSisi() . "</td>";
    echo "<td>" . $bangunRuang->getJariJari() . "</td>";
    echo "<td>" . $bangunRuang->getTinggi() . "</td>";
    echo "<td>" . number_format($bangunRuang->getVolume(), 10) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
