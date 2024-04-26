<html>
<head></head>
<body>
<h2>Daftar Program Kerja BEM</h2>
<table border="3" width="auto">
<tbody>
<tr>
<td width="auto">No.</td>
<td width="150">Nama Program
Kerja</td>
<td width="auto">Surat
Keterangan</td>
<td width="90">Aksi</td>
</tr>
<?php
while ($row =
$this->model->sqlData($data)) {
echo "<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
href='index.php?edit=$row[0]'>Edit</a> |
<a
href='index.php?delete=$row[0]' onClick=\"return
confirm('Hapus Data?')\">Delete</a>
</td>
</tr>";
}
?>
</tbody>
</table>
<br>
<button type="submit"><a
style="text-decoration:none"
href='index.php?add'>Tambah Data</a></button>
</body>
</html>