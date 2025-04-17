<?php
include('koneksi.php');

$edit = 0;
$stock = "";
$nama = "";
$ukuran = "";
$harga = "";

if (isset($_GET['edit']) && isset($_GET['stock'])) {
    $edit = 1;
    $stock = $_GET['stock'];
    $q = "SELECT * FROM flower WHERE stock='$stock'";
    $hasil = $koneksi->query($q);
    if ($hasil->num_rows > 0) {
        $row = $hasil->fetch_row();
        $nama = $row[1];
        $ukuran = $row[2];
        $harga = $row[3];
    } else {
        echo "Data tidak ditemukan!";
    }
}
?>

<h2><?php echo $edit ? "Edit Data" : "Input Data Baru"; ?></h2>
<hr>

<form action="proses.php" method="POST">
    <table>
        <tr>
            <td>Stock</td>
            <td><input type="text" name="stock" value="<?php echo $stock; ?>" <?php echo $edit ? 'readonly' : ''; ?>></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
        </tr>
        <tr>
            <td>Ukuran</td>
            <td><input type="text" name="ukuran" value="<?php echo $ukuran; ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
        </tr>
    </table>

    <?php
    if ($edit) {
        echo '<input type="submit" name="proses" value="Perbaharui">';
    } else {
        echo '<input type="submit" name="proses" value="Simpan">';
    }
    ?>
</form>

<hr>
<a href="utama.php">
    <button>Batal</button>
</a>