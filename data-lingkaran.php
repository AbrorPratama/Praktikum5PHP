<?php 
    require_once './class-lingkaran.php'; // memanggil file

    echo '<h3><br><b> DATA LINGKARAN</b></h3>';
    echo '<br>Nilai PHI : '.Lingkaran::PHI;
    $lingkaran1 = new Lingkaran(10);
    $lingkaran2 = new Lingkaran(7);
    echo '<br>';
    echo '<br> Luas Objek Lingkaran 1'.$lingkaran1->getluas(); 
    echo '<br> Luas Objek Lingkaran 2'.$lingkaran2->getluas();
    echo '<br>';
    echo '<br> keliling Objek Lingkaran 1'.$lingkaran1->getkeliling();
    echo '<br> keliling Objek Lingkaran 2'.$lingkaran2->getkeliling();
?>