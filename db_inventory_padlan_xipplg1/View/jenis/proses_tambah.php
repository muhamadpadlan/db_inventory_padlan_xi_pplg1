<?php 

$id_jenis = $_POST['id_jenis'];
$Nama_jenis = $_POST['Nama_jenis'];

include '../../Config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO jenis VALUES('$id_jenis','$Nama_jenis')");

echo "
<script>
alert('input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>
";