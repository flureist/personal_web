<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../auth/login.php');
    exit;
} else if ($_SESSION['role'] !== 'administrator') {
    echo "<script>alert('Oops! Anda tidak dapat mengakses halaman ini');window.location='../user/beranda_user.php';</script>";
}
require_once("../koneksi.php");
$username = $_SESSION['username'];
$sql = "SELECT * FROM tbl_user WHERE username = '$username'";
$query = mysqli_query($db, $sql);
$hasil = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    
    <!-- Header -->
    <header class="bg-red-900 text-white text-center py-6 shadow">
        <h1 class="text-3xl font-bold">Beranda Administrator</h1>
    </header>

    <!-- Container -->
    <div class="flex max-w-7xl mx-auto mt-8 px-4">

        <!-- Sidebar -->
        <aside class="w-1/4 bg-white rounded shadow p-4">
            <h2 class="text-xl font-semibold text-red-700 mb-4 text-center">MENU</h2>
            <ul class="space-y-2 text-gray-700">
                <li><a href="beranda_admin.php" class="block font-semibold hover:text-red-600">
                    Beranda
                    </a>
                </li>
                <li><a href="data_artikel.php" class="block hover:text-red-600">
                    Kelola Artikel
                    </a>
                </li>
                <li><a href="data_gallery.php" class="block hover:text-red-600">
                    Kelola Gallery
                    </a>
                </li>
                <li><a href="about.php" class="block hover:text-red-600">
                    About
                    </a>
                </li>
                <li>
                    <a href="../auth/logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');" class="block text-red-600 hover:underline font-medium">Logout</a>
                </li>
            </ul>
        </aside>
        <?php

        // Hitung total artikel
        $jumlah_artikel = mysqli_num_rows(mysqli_query($db, "SELECT id_artikel FROM tbl_artikel"));
        // Hitung total gallery
        $jumlah_gallery = mysqli_num_rows(mysqli_query($db, "SELECT id_gallery FROM tbl_gallery"));
        // Hitung total about
        $jumlah_about = mysqli_num_rows(mysqli_query($db, "SELECT id_about FROM tbl_about"));
        ?>

        

        <!-- Main Content -->
        <main class="w-3/4 bg-white rounded shadow p-6 ml-6">
            <div class="text-lg text-gray-800 mb-4">
                Halo, <strong class="text-red-700">
                    <?php echo $_SESSION['username']; ?>
                </strong>! Apa kabar? 😊
            </div>
            <p class="text-sm text-gray-500">
                Silakan gunakan menu di samping untuk mengelola data.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <div class="bg-white shadow rounded p-4 text-center border-t-4 border-blue-600">
                    <h3 class="text-xl font-semibold text-blue-700">Artikel</h3>
                    <p class="text-3xl font-bold text-gray-800"><?php echo
                        $jumlah_artikel; ?></p>
                </div>
                <div class="bg-white shadow rounded p-4 text-center border-t-4 border-green-600">
                    <h3 class="text-xl font-semibold text-green-700">Gallery</h3>
                    <p class="text-3xl font-bold text-gray-800"><?php echo
                        $jumlah_gallery; ?></p>
                </div>
                <div class="bg-white shadow rounded p-4 text-center border-t-4 border-red-600">
                    <h3 class="text-xl font-semibold text-red-700">About</h3>
                    <p class="text-3xl font-bold text-gray-800"><?php echo
                        $jumlah_about ?></p>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-red-800 text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> | Created by Ferdi Setiawan
    </footer>

</body>

</html>