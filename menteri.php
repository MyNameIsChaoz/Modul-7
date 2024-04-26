<?php
include "pengurusBEM.php";

class Menteri extends PengurusBEM {
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    public function getJabatan() {
        return $this->jabatan;
    }
}
?>
