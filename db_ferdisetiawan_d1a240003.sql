-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2025 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ferdisetiawan_d1a240003`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(1, 'Halo! Nama saya Ferdi Setiawan, seorang mahasiswa aktif di Universitas Subang yang saat ini sedang menempuh pendidikan di Program Studi Sistem Informasi. Saya memiliki ketertarikan besar di bidang pengembangan web, khususnya dalam desain antarmuka pengguna (UI) dan penerapan framework modern seperti Tailwind CSS serta integrasi backend dengan PHP dan MySQL.'),
(2, 'Website ini saya buat sebagai wadah eksplorasi ide, dokumentasi perjalanan belajar, serta media untuk menampilkan berbagai karya atau project pribadi saya. Selain itu, saya juga menggunakan platform ini untuk melatih keterampilan teknis dalam membuat web yang responsif, cepat, dan nyaman digunakan. Bagi saya, web bukan hanya tentang barisan kode, tapi tentang bagaimana kita bisa menyampaikan sesuatu dengan cara yang fungsional dan estetik.'),
(3, 'Di luar dunia coding, saya suka diskusi soal teknologi, bermain game untuk ngilangin stres, dan kadang ngulik hal-hal random yang bisa nambah wawasan digital. Saya percaya bahwa belajar teknologi itu nggak pernah berhenti dan selalu berkembang, jadi penting banget untuk terus update dan terbuka terhadap hal baru.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(8, 'Tips Produktif Mengerjakan Tugas Kuliah dari Rumah', 'Mengerjakan tugas kuliah dari rumah dapat menjadi tantangan tersendiri bagi mahasiswa. Di tengah fleksibilitas waktu dan kenyamanan lingkungan, tidak sedikit yang justru merasa kesulitan menjaga fokus dan produktivitas. Oleh karena itu, penting untuk menerapkan strategi agar kegiatan belajar di rumah tetap efektif. Salah satu langkah awal yang bisa dilakukan adalah membuat jadwal harian yang realistis. Jadwal tersebut tidak harus padat, tetapi cukup untuk membagi waktu antara belajar dan istirahat secara seimbang. Teknik Pomodoro dapat menjadi metode yang efektif, yaitu dengan bekerja selama 25 menit penuh konsentrasi, kemudian beristirahat selama 5 menit, dan melakukan jeda lebih panjang setelah beberapa sesi. Selain itu, penting juga untuk memisahkan area kerja dari area istirahat. Usahakan untuk tidak mengerjakan tugas di atas tempat tidur, karena hal itu akan mengganggu konsentrasi. Gunakan meja kerja yang nyaman agar suasana belajar terasa lebih serius. Menghindari distraksi digital juga sangat dianjurkan. Matikan notifikasi dari media sosial atau gunakan aplikasi pemblokir situs sementara agar tidak tergoda untuk membuka platform hiburan. Terakhir, jangan lupa memberi apresiasi terhadap diri sendiri setelah menyelesaikan tugas. Bentuk penghargaan ini bisa sederhana, seperti menonton film singkat atau menikmati makanan favorit. Dengan pendekatan yang tepat, belajar dari rumah bisa tetap produktif dan menyenangkan.'),
(9, 'Pentingnya Memiliki Website Pribadi bagi Mahasiswa Teknologi', 'Di era digital seperti saat ini, memiliki website pribadi bukan lagi sesuatu yang mewah atau sekadar tren, melainkan sebuah kebutuhan, khususnya bagi mahasiswa di bidang teknologi informasi. Website pribadi berfungsi sebagai media portofolio yang menampilkan hasil karya, proyek, maupun pengalaman akademik yang pernah dijalani. Melalui website ini, mahasiswa dapat menunjukkan kemampuan mereka secara konkret kepada dosen, rekan kerja, maupun calon pemberi kerja. Selain sebagai tempat menyimpan portofolio, proses pembuatan website juga memberikan banyak manfaat teknis. Mahasiswa akan belajar bagaimana merancang antarmuka, mengatur struktur informasi, hingga menerapkan kode pemrograman yang digunakan untuk menampilkan konten. Secara tidak langsung, hal ini juga meningkatkan kemampuan problem solving dan logika berpikir. Tak hanya itu, website pribadi turut menjadi media personal branding. Dengan memilih gaya desain, warna, hingga jenis konten yang ditampilkan, seseorang dapat membangun identitas digital yang profesional dan autentik. Terlebih jika website tersebut mudah diakses dan dapat dibagikan melalui berbagai platform, maka peluang untuk dikenal oleh dunia luar pun semakin besar. Oleh karena itu, setiap mahasiswa di bidang teknologi sangat disarankan untuk mulai membangun website pribadi, meskipun sederhana. Yang penting bukan kesempurnaannya, tetapi keberanian untuk memulai.'),
(10, 'Tailwind CSS: Solusi Modern untuk Desain Web yang Efisien', 'Tailwind CSS merupakan salah satu framework CSS modern yang kini semakin populer di kalangan web developer, baik pemula maupun profesional. Framework ini mengusung konsep utility-first, yang memungkinkan pengembang untuk menambahkan class langsung ke elemen HTML tanpa harus membuat file CSS terpisah. Konsep ini memberikan kemudahan dan efisiensi dalam proses styling, sehingga waktu pengerjaan proyek dapat dipangkas secara signifikan. Salah satu keunggulan utama Tailwind adalah fleksibilitasnya. Developer dapat dengan mudah mengatur tampilan responsif, warna, ukuran teks, margin, padding, hingga animasi hanya dengan menambahkan class-class tertentu. Hal ini tentunya sangat membantu, terutama dalam mengembangkan tampilan yang konsisten dan cepat tanpa harus berulang kali menulis deklarasi CSS. Tailwind juga sangat mendukung prinsip mobile-first design melalui class khusus seperti sm:, md:, dan lg:, yang memudahkan pengembang menciptakan tampilan web yang optimal di berbagai ukuran layar. Selain itu, framework ini dapat dikustomisasi sepenuhnya melalui file konfigurasi, memungkinkan developer menyesuaikan tema, skema warna, dan properti lainnya sesuai dengan kebutuhan proyek. Dengan dokumentasi yang lengkap serta komunitas yang terus berkembang, Tailwind menjadi pilihan tepat bagi mahasiswa maupun profesional yang ingin mengembangkan website modern secara efisien. Oleh karena itu, bagi siapa pun yang tertarik di bidang pengembangan web, mengenal dan menggunakan Tailwind CSS merupakan langkah cerdas dalam memperkuat kompetensi teknis.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(11, 'Observasi Klinik Global Medical Center', 'photo5.jpg'),
(12, 'Landing Page', 'project1.png'),
(13, 'Simple Gallery', 'project2.png'),
(14, 'Web Portfolio', 'project4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `role`) VALUES
('admin', 'admin', 'administrator'),
('user', 'user', 'user'),
('Flureist', '240705', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
