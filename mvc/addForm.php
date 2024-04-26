<?php
include_once "c_programKerja.php";
?>
<html>
<head>
<title>Tambah Data</title>
</head>
<body>
<h2>Tambah Data</h2>
<button type="submit">
<a style="text-decoration:none"
href='index.php'>Kembali</a>
</button>
<form action="" method="POST">
<table>
<tr>
<td>Nomor Program</td>
<td><input type="text"
name="nomorProgram"></td>
</tr>
<tr>
<td>Nama Program</td>
<td><input type="text"
name="namaProgram"></td>
</tr>
<tr>
<td>Surat Keterangan</td>
<td><input type="text"
name="suratKeterangan"></td>
</tr>
<tr>
<td><input type="submit"
name="submit" value="TAMBAH"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
$main = new c_programKerja();
$main->insert();
}
