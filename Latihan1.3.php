class Mobil{
    //Ini adalah atribut/properties dari mobil
    <var> $jumlahRoda = 4</var>
    <var> $warna = "Merah"</var>
    <var> $bahanBakar = "Pertamax"</var>
    <var> $harga = 120000000</var>
    <var> $merk = 'A'</var>
}


        //deklarasi method
        public function statusHarga()
        {
            if ($this->harga > 50000000) $status = 'Mahal';
            else $status = 'Murah';
            return $status;
        }