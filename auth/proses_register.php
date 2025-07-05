<?php include('../koneksi.php');
$nama_akun = mysqli_real_escape_string($db, $_POST['username']);
$pw_akun = mysqli_real_escape_string($db, $_POST['password']);
$sql = "INSERT INTO tbl_user (username, password) VALUES ('$nama_akun', '$pw_akun')";
$query = mysqli_query($db, $sql);
if ($query) {
    echo "<script>alert('Akun berhasil didaftarkan.');
window.location='login.php';</script>";
} else {
    echo "<script>alert('Gagal mendaftarkan Akun.');
history.back();</script>";
}
?>