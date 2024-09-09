<?php

$kartu = false;
$belanja = 120000;
$diskon = 0;

if ($kartu) {
    switch (true) {
        case $belanja > 500000:
            $diskon = 50000;
            break;
        case $belanja > 100000:
            $diskon = 15000;
            break;
        default:
            $diskon = 0;
            break;
    }
} else {
    if ($belanja > 100000) {
        $diskon = 5000;
    }
}

echo "Jumlah belanja: Rp " . $belanja . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Total bayar: Rp " . ($belanja - $diskon);

?>