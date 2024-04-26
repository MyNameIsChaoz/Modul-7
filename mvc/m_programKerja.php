<?php
require "koneksiMVC.php";
class m_programKerja {
private $nomorProgram;
private $namaProgram;
private $suratKeterangan;
private $connect;
public function __construct() {
$this->connect = new koneksiMVC();
}
        public function execute($query) {
            return
            mysqli_query($this->connect->getKoneksi(), $query);
            }
            public function selectQuery() {
            $query = "SELECT * FROM proker";
            return $this->execute($query);
            }
            public function selectProgram($no) {
            $query = "SELECT * FROM proker WHERE
            nomorProgram='$no'";
            return $this->execute($query);
            }
            public function insertProgram($no, $nama,
            $status) {
            $query = "INSERT INTO proker VALUES ('$no',
            '$nama', '$status')";
            return $this->execute($query);
            }
            public function updateProgram($no, $nama,
            $status) {
            $query = "UPDATE proker SET
            namaProgram='$nama', suratKeterangan='$status' WHERE
            nomorProgram='$no'";
            return $this->execute($query);
            }
            public function deleteProgram($no) {
            $query = "DELETE FROM proker WHERE
            nomorProgram='$no'";
            return $this->execute($query);
            }
            public function sqlData($data) {
            return mysqli_fetch_array($data);
            }
            public function __destruct() {
            }
            }