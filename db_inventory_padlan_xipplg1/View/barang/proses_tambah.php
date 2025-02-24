<?php 

$id_barang = $_POST['id_barang'];
$Stok = $_POST['Stok'];
$harga = $_POST ['harga'];
$Nama_Barang = $_POST['Nama_Barang'];
$id_jenis = $_POST['id_jenis'];

include '../../Config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$id_barang','$Stok','$harga','$Nama_Barang','$id_jenis')");

echo "
<script>
alert('input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>
";