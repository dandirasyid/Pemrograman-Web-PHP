<?php
    require_once "class_persegipanjang.php";
    $persegiPanjang1 = new PersegiPanjang( 5, 20 );
    $persegiPanjang2 = new PersegiPanjang(3, 10 );

    echo "Luas Persegi Panjang I ".$persegiPanjang1->getLuas();
    echo "<br>Luas Persegi Panjang II ".$persegiPanjang2->getLuas();

    echo "Keliling Persegi Panjang I ".$persegiPanjang1->getKeliling();
    echo "<br>Keliling Persegi Panjang II ".$persegiPanjang2->getKeliling();

?>