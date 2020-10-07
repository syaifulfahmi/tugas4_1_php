<?php

$hrg_beli = 8000;
$hrg_jual = 7500;
$untung = 300;
$jml_ekor = round(($hrg_beli-$hrg_jual)/$untung);

echo "Harga Beli = Rp. ".$hrg_beli,"<br>","Harga Jual = Rp. ".$hrg_jual,"<br>","Keuntungan = Rp. ".$untung,"<br>","Berapa jumlah kambing yang dibeli ?","<br>","Jawaban : ".$jml_ekor," ekor";

?>