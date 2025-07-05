<?php include('../koneksi.php');
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
// Cek di database
$sql = "SELECT * FROM tbl_user WHERE username='$username' AND
password='$password'";
$query = mysqli_query($db, $sql);
if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);
    
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $row['role'];
    
    if ($row['role'] == 'administrator') {
        header('Location:../admin/beranda_admin.php');
    } else if ($row['role'] == 'user') {
        header('Location:../user/beranda_user.php');
    }
} else {
    echo "<script>alert('Login gagal! Username atau password salah.');window.location='../auth/login.php';</script>";
}
?>