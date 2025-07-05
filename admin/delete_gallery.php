<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../auth/login.php');
    exit;
} else if ($_SESSION['role'] !== 'administrator') {
    echo "<script>alert('Oops! Anda tidak dapat mengakses halaman ini');window.location='../user/beranda_user.php';</script>";
}
$id = $_GET['id_gallery'];
// Ambil nama file gambar
$sql = "SELECT foto FROM tbl_gallery WHERE id_gallery = '$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
$foto = $data['foto'];
// Hapus file gambar dari folder
if (file_exists("../images/$foto")) {
    unlink("../images/$foto");
}
// Hapus data dari database
$sql_delete = "DELETE FROM tbl_gallery WHERE id_gallery = '$id'";
$query_delete = mysqli_query($db, $sql_delete);
if ($query_delete) {
    echo "<script>alert('Data gallery berhasil dihapus.');
window.location='data_gallery.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data.'); history.back();</script>";
}
?>