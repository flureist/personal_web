<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../auth/login.php');
    exit;
} else if ($_SESSION['role'] !== 'administrator') {
    echo "<script>alert('Oops! Anda tidak dapat mengakses halaman ini');window.location='../user/beranda_user.php';</script>";
}
$id = $_GET['id_artikel'];
$sql = "DELETE FROM tbl_artikel WHERE id_artikel = '$id'";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Artikel berhasil dihapus.');
window.location='data_artikel.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus artikel.');
history.back();</script>";
}
?>