<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
     header('location:../auth/login.php');
     exit;
} else if ($_SESSION['role'] !== 'administrator') {
    echo "<script>alert('Oops! Anda tidak dapat mengakses halaman ini');window.location='../user/beranda_user.php';</script>";
}
$about = mysqli_real_escape_string($db, $_POST['about']);
$sql = "INSERT INTO tbl_about (about) VALUES ('$about')";
$query = mysqli_query($db, $sql);
if ($query) {
     echo "<script>alert('About berhasil ditambahkan.');
window.location='about.php';</script>";
} else {
     echo "<script>alert('Gagal menambahkan about.');
history.back();</script>";
}
?>