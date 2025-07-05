<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">Daftar Akun</h2>
        <form action="proses_register.php" method="post" class="space-y-5">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="username" name="username" id="username" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
focus:ring-blue-500 focus:ring-2 focus:outline-none focus:border-blue-500" placeholder="masukkan username anda">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm
focus:ring-blue-500 focus:ring-2 focus:outline-none focus:border-blue-500" placeholder="masukkan password anda">
            </div>
            <div class="flex justify-between items-center">
                <a href="../auth/login.php" class="bg-lime-700 text-white px-4 py-2 rounded hover:bg-gray400 cursor-pointer">Login</a>
                <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 cursor-pointer">
                    Sign up
                </button>
            </div>
        </form>
        <div class="text-center text-sm text-gray-600 mt-2">
            &copy; <?php echo date('Y'); ?> - Ferdi Setiawan
        </div>
    </div>
</body>

</html>