<?php
include('koneksi.php');

$proses = $_POST['proses'];
$stock = $_POST['stock'];

if ($proses == 'Hapus') {
    if (!empty($stock)) {
        $q = "DELETE FROM flower WHERE stock='$stock'";
        if ($koneksi->query($q)) {
            header("Location: utama.php");
            exit();
        } else {
            echo "Terjadi kesalahan saat menghapus data!";
        }
    }
}

if ($proses == 'Simpan') {
    $nama = $_POST['nama'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];

    if (empty($stock) || empty($nama) || empty($ukuran) || empty($harga)) {
        echo "Semua kolom harus diisi!";
    } else {
        $q = "INSERT INTO flower (stock, nama, ukuran, harga) VALUES ('$stock', '$nama', '$ukuran', '$harga')";
        if ($koneksi->query($q)) {
            header("Location: utama.php");
            exit();
        } else {
            echo "Terjadi kesalahan saat menyimpan data!";
        }
    }
}

if ($proses == 'Perbaharui') {
    $nama = $_POST['nama'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];

    if (empty($nama) || empty($ukuran) || empty($harga)) {
        echo "Semua kolom harus diisi!";
    } else {
        $q = "UPDATE flower SET nama='$nama', ukuran='$ukuran', harga='$harga' WHERE stock='$stock'";
        if ($koneksi->query($q)) {
            header("Location: utama.php");
            exit();
        } else {
            echo "Terjadi kesalahan saat memperbaharui data!";
        }
    }
}
?>