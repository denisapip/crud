<?php
include('koneksi.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

// Query untuk mengecek user dan password
$q = "SELECT * FROM user WHERE user='$user' AND pass='$pass'";
$hasil = $koneksi->query($q);

// Cek jika login berhasil
if ($hasil->num_rows > 0) {
    // Set session untuk login
    session_start();
    $_SESSION['user'] = $user;

    // Set cookie untuk login otomatis selama 1 hari
    setcookie('user', $user, time() + (86400), "/"); // 86400 = 1 day

    header("Location: utama.php");
} else {
    // Tampilkan pesan error jika login gagal
    session_start();
    $_SESSION['error'] = 'Login Gagal, Silahkan Coba Lagi!';
    header("Location: index.php");
}
?>