<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    
<table border = "0" >
    <form action="proses-tambah.php" method="POST">
        <tr><h2>Tambah Data</h2></tr>

        <tr>
            <td><label for="jurusan">Jurusan :</label></td>
            <td><input type="text" name="jurusan" /></td>
        </tr>

        <tr>
            <td><label for="kapasitas">Kapasitas :</label></td>
            <td><input type="number" name="kapasitas" /></td>
        </tr>

        <tr>
            <td><label for="terisi">Terisi :</label></td>
            <td><input type="number" name="terisi" /></td>
        </tr>

        <tr>
            <td><label for="nama">Nama :</label></td>
            <td><input type="text" name="nama" /></td>
        </tr>

        <tr>
            <td><label for="gender">Gender :</label></td>
            <td><input type="text" name="gender" /></td>
        </tr>

        <tr>
            <td><label for="asalsekolah">Asal Sekolah :</label></td>
            <td><input type="text" name="asalsekolah" /></td>
        </tr>

        <tr>
            <td><label for="tempatlahir">Tempat Lahir :</label></td>
            <td><input type="text" name="tempatlahir" /></td>
        </tr>

        <tr>
            <td><label for="tanggallahir">Tanggal Lahir :</label></td>
            <td><input type="date" name="tanggallahir" /></td>
        </tr>

        <td>
        <button type="submit" id="simpan" name="simpan">Simpan</button>
        </td>
</form>
</table>


</body>
</html>
