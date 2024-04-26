<?php
include_once("m_programKerja.php");
class c_programKerja {
public $model;
public function __construct() {
$this->model = new m_programKerja();
}
public function viewAll() {
$data = $this->model->selectQuery();
include "v_programKerja.php";
}
public function createData() {
include "addForm.php";
}
public function insert() {
$no = $_POST['nomorProgram'];
$nama = $_POST['namaProgram'];
$status = $_POST['suratKeterangan'];
$insert = $this->model->insertProgram($no,
$nama, $status);
header("location:index.php");
}
public function editData($no) {
$data = $this->model->selectProgram($no);
$row = $this->model->sqlData($data);
include "editForm.php";
}
public function update() {
$no = $_POST['nomorProgram'];
$nama = $_POST['namaProgram'];
$status = $_POST['suratKeterangan'];
$update = $this->model->updateProgram($no,
$nama, $status);
header("location:index.php");
}
public function deleteData($no) {
$delete = $this->model->deleteProgram($no);
header("Location:index.php");
}
public function __destruct() {
}
}