<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <button type="button">
        <a style="text-decoration:none" href='index.php'>Kembali</a>
    </button>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nomor Program</td>
                <td><input type="text" name="nomorProgram" value="<?= $row['nomorProgram'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Program</td>
                <td><input type="text" name="namaProgram" value="<?= $row['namaProgram'] ?>"></td>
            </tr>
            <tr>
                <td>Surat Keterangan</td>
                <td><input type="text" name="suratKeterangan" value="<?= $row['suratKeterangan'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    include_once("c_programKerja.php");
    $main = new c_programKerja();
    $main->update();
}