<?php
class pengurusBEM {
    public $nama;
    public $nim;
    public $angkatan;
    private $jabatan;
    private $foto;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setAngkatan($angkatan) {
        $this->angkatan = $angkatan;
    }

    public function getAngkatan() {
        return $this->angkatan;
    }

    private function setJabatan($jabatan) {
        $this->jabatan = jabatan;
    }

    public function getJabatan() {
        return $this->jabatan;
    }

    private function setFoto($foto) {
        $this->foto = foto;
    }

    public function getFoto() {
        return $this->foto;
    }
}
