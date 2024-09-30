<?php
function login(){
    echo "Selamat Datang di Aplikasi Bangun Ruang CLI\n";
    while(true) {
        echo "Silahkan Login Terlebih Dahulu: \n";
        //LOGIN
        echo "Masukan Username : ";
        $input_username = fopen("php://stdin", "r");
        $username = trim(fgets($input_username));
 
        echo "Masukan Password : ";
        $input_password = fopen("php://stdin", "r");
        $password = trim(fgets($input_password));
 
        //VERIFIKASI LOGIN
        if ($username == "abdul" && $password == 123) {
            echo "Selamat Datang Anda Telah Berhasil Login di Aplikasi Bangun Ruang CLI.\n";
            break;
        } else {
            echo "Mohon Maaf, Username dan Password Yang Anda Masukan Salah!\n";
            echo "Silahkan Kembali Login,\n\n";
        }
    }
}
 
//BERHASIL LOGIN DAN MEMILIH BANGUN RUANG
function pilihBangunRuang(){
echo "Silahkan Pilih Salah Satu Bangun Ruang :\n";
echo "1. Persegi\n";
echo "2. Persegi Panjang\n";
echo "3. Segitiga\n";
echo "4. Lingkaran\n";
echo "5. Belah Ketupat\n";
echo "Pilih Nomor Bangun Ruang : \n";
$input_BangunRuang = fopen("php://stdin", "r");
$BangunRuang = trim(fgets($input_BangunRuang));
    switch($BangunRuang){
        case 1:
            //PERSEGI
            echo "Bangun Ruang : Persegi\n";
            echo "Masukan Sisi Persegi : ";
            $input_SisiPersegi = fopen("php://stdin", "r");
            $SisiPersegi = trim(fgets($input_SisiPersegi));
            $LuasPersegi = $SisiPersegi * $SisiPersegi;
            $KelilingPersegi = 4 * $SisiPersegi;
            echo "Luas Persegi: " . $LuasPersegi;
            echo "\nKeliling persegi: " . $KelilingPersegi;
            break;
        case 2:
            //PERSEGI PANJANG
            echo "Bangun Ruang : Persegi Panjang\n";
            echo "Masukan Panjang (cm) : ";
            $input_PanjangPersegiP = fopen("php://stdin", "r");
            $PanjangPersegiP = trim(fgets($input_PanjangPersegiP));
 
            echo "Masukan Lebar (cm) : ";
            $input_LebarPersegiP = fopen("php://stdin", "r");
            $LebarPersegiP = trim(fgets($input_LebarPersegiP));
 
            $LuasPersegiP = $PanjangPersegiP * $LebarPersegiP;
            $KelilingPersegiP = 2 * ($PanjangPersegiP + $LebarPersegiP);
            echo "Luas Persegi Panjang: " . $LuasPersegiP;
            echo "\nKeliling persegi Panjang: " . $KelilingPersegiP;
            break;
        case 3:
            //SEGITIGA
            echo "Bangun Ruang : Segitiga\n";
            echo "Masukan Alas (cm) : ";
            $input_AlasSegitiga = fopen("php://stdin", "r");
            $AlasSegitiga = trim(fgets($input_AlasSegitiga));
 
            echo "Masukan Tinggi (cm) : ";
            $input_TinggiSegitiga = fopen("php://stdin", "r");
            $TinggiSegitiga = trim(fgets($input_TinggiSegitiga));
 
            $LuasSegitiga = 1/2 * $AlasSegitiga * $TinggiSegitiga;
            $KelilingSegitiga = ($AlasSegitiga * $AlasSegitiga) + ($TinggiSegitiga * $TinggiSegitiga);
            echo "Luas Persegi: " . $LuasSegitiga;
            echo "\nKeliling persegi: " . $KelilingSegitiga;
            break;
        case 4:
            //LINGKARAN
            echo "Bangun Ruang : Lingkaran\n";
            echo "Masukan Jari-Jari (cm) : ";
            $input_JariLingkaran = fopen("php://stdin", "r");
            $JariLingkaran = trim(fgets($input_JariLingkaran));
 
            $LuasLingkaran = 22/7 * $JariLingkaran * $JariLingkaran;
            $KelilingLingkaran = 2 * 22/7 * $JariLingkaran;
            echo "Luas Lingkaran: " . $LuasLingkaran;
            echo "\nKeliling Lingkaran: " . $KelilingLingkaran;
            break;
        case 5:
            //BELAH KETUPAT
            echo "Bangun Ruang : Belah Ketupat\n";
            echo "Masukan Panjang Diagonal 1 (cm) : ";
            $input_Diagonal1 = fopen("php://stdin", "r");
            $Diagonal1 = trim(fgets($input_Diagonal1));
 
            echo "Masukan Panjang Diagonal 2(cm) : ";
            $input_Diagonal2 = fopen("php://stdin", "r");
            $Diagonal2 = trim(fgets($input_Diagonal2));
 
            $LuasBK = 1/2 * $Diagonal1 * $Diagonal2;
            $KelilingBK = 4 * ($Diagonal1 * $Diagonal2);
            echo "Luas Belah Ketupat:" . $LuasBK;
            echo "\nKeliling Belah Ketupat: " . $KelilingBK;
            break;
        default:
            echo "Pilihan Tidak Ada!\n";
            break;
    }
}
 
login();
pilihBangunRuang();
?>