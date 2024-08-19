<?php
class KonversiSuhu {
    private $suhu;
    public function __construct($suhu) {
        $this->suhu = $suhu;
    }
    
    public function dariCelcius() {
        $fahrenheit = ($this->suhu * 9/5) + 32;
        $reamur = $this->suhu * 4/5;
        $kelvin = $this->suhu + 273.15;
        return array('Fahrenheit' => $fahrenheit, 'Reamur' => $reamur, 'Kelvin' => $kelvin);
    }

    public function dariFahrenheit() {
        $celcius = ($this->suhu - 32) * 5/9;
        $reamur = ($this->suhu - 32) * 4/9;
        $kelvin = ($this->suhu + 459.67) * 5/9;
        return array('Celcius' => $celcius, 'Reamur' => $reamur, 'Kelvin' => $kelvin);
    }
    
    public function dariReamur() {
        $celcius = $this->suhu * 5/4;
        $fahrenheit = ($this->suhu * 9/4) + 32;
        $kelvin = ($this->suhu * 5/4) + 273.15;
        return array('Celcius' => $celcius, 'Fahrenheit' => $fahrenheit, 'Kelvin' => $kelvin);
    }
    
    public function dariKelvin() {
        $celcius = $this->suhu - 273.15;
        $fahrenheit = ($this->suhu * 9/5) - 459.67;
        $reamur = ($this->suhu - 273.15) * 4/5;
        return array('Celcius' => $celcius, 'Fahrenheit' => $fahrenheit, 'Reamur' => $reamur);
    }

    public function checkBitwiseAndUnary() {
        $negativeSuhu = -$this->suhu;
        $bitwiseNot = ~$this->suhu;
        return array('Negative Suhu' => $negativeSuhu, 'Bitwise Not' => $bitwiseNot);
    }

    public function compareSuhu($value) {
        if ($this->suhu > $value && $this->suhu !== null) {
            return "Suhu lebih besar dari $value.";
        } elseif ($this->suhu == $value || $this->suhu === 0) {
            return "Suhu sama dengan $value.";
        } else {
            return "Suhu lebih kecil dari $value.";
        }
    }
}

$suhuCelcius = new KonversiSuhu(25);
$result = $suhuCelcius->dariCelcius();
echo "25 Celcius ke Fahrenheit: " . $result['Fahrenheit'];
echo "<br>";
echo "25 Celcius ke Reamur: " . $result['Reamur'];
echo "<br>";
echo "25 Celcius ke Kelvin: " . $result['Kelvin'];
echo "<br>";
echo "<br>";

$suhuFahrenheit = new KonversiSuhu(77);
$result = $suhuFahrenheit->dariFahrenheit();
echo "77 Fahrenheit ke Celcius: " . $result['Celcius'];
echo "<br>";
echo "77 Fahrenheit ke Reamur: " . $result['Reamur'];
echo "<br>";
echo "77 Fahrenheit ke Kelvin: " . $result['Kelvin'];
echo "<br>";
echo "<br>";

$suhuReamur = new KonversiSuhu(20);
$result = $suhuReamur->dariReamur();
echo "20 Reamur ke Celcius: " . $result['Celcius'];
echo "<br>";
echo "20 Reamur ke Fahrenheit: " . $result['Fahrenheit'];
echo "<br>";
echo "20 Reamur ke Kelvin: " . $result['Kelvin'];
echo "<br>";
echo "<br>";

$suhuKelvin = new KonversiSuhu(298.15);
$result = $suhuKelvin->dariKelvin();
echo "298.15 Kelvin ke Celcius: " . $result['Celcius'];
echo "<br>";
echo "298.15 Kelvin ke Fahrenheit: " . $result['Fahrenheit'];
echo "<br>";
echo "298.15 Kelvin ke Reamur: " . $result['Reamur'];
echo "<br>";
echo "<br>";

$bitwiseResult = $suhuKelvin->checkBitwiseAndUnary();
echo "Negative Suhu: " . $bitwiseResult['Negative Suhu'];
echo "<br>";
echo "Bitwise Not Suhu: " . $bitwiseResult['Bitwise Not'];
echo "<br>";

$comparisonResult = $suhuKelvin->compareSuhu(300);
echo "Perbandingan Suhu: " . $comparisonResult;
?>
