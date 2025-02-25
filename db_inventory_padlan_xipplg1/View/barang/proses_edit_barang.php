<?php
$id_barang = $_GET['id_barang'];
$Stok = $_POST['Stok'];
$Nama_Barang = $_POST['Nama_Barang'];
$harga = $_POST['harga'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET Stok = '$Stok',Nama_Barang = '$Nama_Barang', harga = '$harga'
,id_jenis = '$id_jenis' WHERE id_barang = '$id_barang'  ");

if ($query) {
    echo "<script>alert('Edit data sukses!!')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Edit data gagal')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}

?>