<?php
require_once './class-persegi-panjang.php'; // memanggil file
$PP1 = new PersegiPanjang(20, 30);
echo '<h3><br><b> DATA PERSEGI PANJANG</b></h3>';
echo 'Panjang = ' . $PP1->panjang;
echo '<br>';
echo 'Lebar = ' . $PP1->lebar;
echo '<br> Luas Objek Persegi Panjang :' . $PP1->luas();
echo '<br> keliling Objek Persegi Panjang :' . $PP1->keliling();

?>