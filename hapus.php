<?php
include("koneksi.php");

$id = $_GET['id'];
$sql = "DELETE FROM tb_jurusan WHERE jurusan_id='$id'";
$sql = "DELETE FROM tb_peserta WHERE id='$id'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>