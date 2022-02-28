<?php
    // Mendefinisikan Konstanta
    define ('PHI', 3.14);
    define ('DBNAME', 'inventori');
    define ('DBSERVER', 'localhost');

    $jari = 12;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan Jari'   . $jari.' : '. $luas;
    echo '<br/> Kelilingnya :' . $kll;
?>

<hr>
<?php
    echo 'Nama Database :' .DBNAME;
    echo '<br/> Lokasi Database ada di '.DBSERVER;
?>