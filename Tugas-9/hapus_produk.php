<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM products WHERE id = '$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: admin_produk.php?pesan=Produk berhasil dihapus!");
    exit;
} else {
    echo "Gagal menghapus produk: " . mysqli_error($koneksi);
}
?>