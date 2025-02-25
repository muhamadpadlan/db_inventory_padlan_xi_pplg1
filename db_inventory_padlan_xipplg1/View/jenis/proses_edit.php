<?php 

$id_jenis=$_GET['id_jenis'];
$Nama_jenis=$_POST['Nama_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE jenis SET Nama_jenis='$Nama_jenis'
WHERE id_jenis = '$id_jenis'");
if ($query) {
    echo "<script>alert('Edit data sukses!!')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Edit data gagal')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}