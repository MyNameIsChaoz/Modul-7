<?php  
class koneksiMVC {
    public function __construct() {
    $this->mysqli = new mysqli("localhost:3306", "root", "root", "pemwebModul7");}
    public function getKoneksi() {
        return $this->mysqli;
        }
}
        