<?php
    require_once "class_dispenser.php";
    $juice = new Minuman ("Juice", "5000");
    $juice -> volumeGalon(300);
    echo "<br/>";
    $juice -> cetakDispenser();
    echo "<br/>";
    $juice -> cetak();
    echo "<br/>";
    $juice -> isiUlangGelas(4);
    echo "<br/>";
    $juice ->volumeGelas(250);
    echo "<br/>";
    $juice->cetakDispenser();
?>