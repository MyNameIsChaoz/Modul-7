<?php
include_once "c_programKerja.php";
$controller = new c_programKerja();
if (isset($_GET['add'])) {
$controller->createData();
} else if (isset($_GET['edit'])) {
$nomor = $_GET['edit'];
$controller->editData($nomor);
} else if (isset($_GET['delete'])) {
$nomor = $_GET['delete'];
$controller->deleteData($nomor);
} else {
$controller->viewAll();
}
