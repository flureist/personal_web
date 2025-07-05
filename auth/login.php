<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['role'] == 'administrator') {
        header('location:../admin/beranda_admin.php');
    } else if ($_SESSION['role'] == 'user') {
        header('location:../user/beranda_user.php');
    }
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-lime-100 to-lime-300 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center text-lime-700 mb-6">Login
            Akun</h2>
        <form action="cek_login.php" method="post" class="space-y-5">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="username" name="username" id="username" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
focus:ring-lime-500 focus:ring-2 focus:outline-none focus:border-lime-500" placeholder="masukkan username anda">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
focus:ring-lime-500 focus:ring-2 focus:outline-none focus:border-lime-500" placeholder="masukkan password anda">
            </div>
            <div class="flex justify-between items-center">
                <a href="../index.php" class="bg-red-700 text-white px-4 py-2 rounded hover:bg-gray400 cursor-pointer">Cancel</a>
                <input type="submit" name="login" value="Login" class="bg-lime-700 text-white px-4 py-2 rounded hover:bg-lime-800
cursor-pointer">
            </div>
        </form>
        <div class="text-center text-sm text-gray-600 mt-6">
            Belum punya akun? <a href="register.php" class="text-blue-800 font-semibold">Daftar</a> sekarang.
        </div>
        <div class="text-center text-sm text-gray-600 mt-2">
            &copy; <?php echo date('Y'); ?> - Ferdi Setiawan
        </div>
    </div>
</body>

</html>