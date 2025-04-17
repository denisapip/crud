<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Flower</title>
    <link rel="stylesheet" href="style.css">
</head>

<h2>Fresh Flower</h2>
<hr>

<?php
include('koneksi.php');

$q = "SELECT * FROM flower";
$hasil = $koneksi->query($q);
?>

<table border="1" width="100%">
    <tr bgcolor="violet">
        <td align="center">Stock</td>
        <td align="center">Nama</td>
        <td align="center">Ukuran</td>
        <td align="center">Harga</td>
        <td align="center">Aksi</td>
    </tr>

<?php
while ($row = $hasil->fetch_row()) {
    echo "
    <form action='proses.php' method='POST'>
        <tr>
            <td align='center'>$row[0]</td>
            <td>$row[1]</td>
            <td align='center'>$row[2]</td>
            <td align='center'>$row[3]</td>
            <td>
                <input type='hidden' name='stock' value='$row[0]'>
                <input type='submit' name='proses' value='Hapus'>
                <a href='input.php?stock=$row[0]&edit=1'><button type='button'>Edit</button></a>
            </td>
        </tr>
    </form>";
}
?>
</table>

<hr>
<a href="input.php">
    <button>Input Data Baru</button>
</a>

<hr>

<form action="index.php">
    <input type="submit" value="Logout">
</form>