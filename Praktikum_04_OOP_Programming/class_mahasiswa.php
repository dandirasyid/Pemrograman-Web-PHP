<?php
    class mahasiswa {
        var $nim;
        var $nama;
        var $tahun_angkatan;
        var $prodi;
        var $ipk;
        function_construct ($nim, $nama)
        {
            $this -> nim = $nim;
            $this -> nama = $nama;
        }
        function predikat_ipk()
        {
            if ($this -> ipk < 2.0) return "Cukup";
            elseif ($his -> ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
            elseif ($his -> ipk >= 3.0 && $this->ipk < 3.75) return "Memuaskan";
            elseif ($his -> ipk >= 3.75 && $this->ipk < 4.0) return "Cum Laude";
        }
    }
?>