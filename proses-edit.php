<?php
include("koneksi.php");
isset($_POST['edit']);
    $id=$_POST['id'];
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $asalsekolah = $_POST['asalsekolah'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];

    $sql = "UPDATE  tb_jurusan set jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE jurusan_id='$id'";
    $query = mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_peserta set nama='$nama', gender='$gender', asalsekolah='$asalsekolah', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);


    if($query){
        header('Location:tampil.php?status=sukses');
    }else{
        header('Location:tampil.php?status=gagal');
    }
?>