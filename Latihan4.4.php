<?php
//Mendeklarasikan dan Mengambil Data Array
$buah = array ('Semangka','Jeruk','Apel','Anggur');

echo $buah[2];
echo "<br>";
echo "<br>";

//Mengisi Nilai Array Cara 1
$buah ['Semangka'] = "Isinya Merah";
$buah ['Jeruk'] = "Rasanya Manis";
$buah ['Apel'] = "Warnanya Merah";
$buah ['Anggur'] = "Harganya Mahal";

echo $buah ['Jeruk'];
echo "<br>";
echo "<br>";

//Mengisi Nilai Array Cara 2
$buah = array ('Semangka' => "Isinya Merah", 'Jeruk' => "Rasanya Manis", 'Apel' => "Warnanya Merah", 'Anggur' => "Harganya Mahal");

echo $buah ['Jeruk'];
?>