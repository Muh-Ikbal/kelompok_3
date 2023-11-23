<?php
$con = mysqli_connect("localhost", "root", "", "db_kapal");

$tiket=$_POST['tiket'];
$nama = $_POST['nama'];
$berangkat = $_POST['berangkat'];
$kursi=$_POST['kursi'];
$tujuan = $_POST['tujuan'];
$harga=$_POST['harga'];
$Ttiket = $_POST['Ttiket'];

$id_user = $_SESSION['id_user'];

$insertQuery = "INSERT INTO `tb_tiket` (`id_tiket`, `full_name`, `tgl_berangkat`, `tujuan`, `total_tiket`, `harga_total`, `id_user`, `kode_tiket`)
                VALUES (NULL, '$nama', '$berangkat', '$tujuan', '$Ttiket', '$tHarga', '$id_user', '$tiket')";

// Eksekusi query
if (mysqli_query($con, $insertQuery)) {
  echo "Pemesanan tiket berhasil.";
} else {
  echo "Error: " . mysqli_error($con);
}

// Tutup koneksi ke database
mysqli_close($con);
?>
