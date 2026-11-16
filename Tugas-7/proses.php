<?php

// Koneksi database
$koneksi = new mysqli("localhost", "root", "", "ecommerce_db");

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Mengambil data dari form
$nama = trim($_POST["nama"] ?? "");
$harga = trim($_POST["harga"] ?? "");
$deskripsi = trim($_POST["deskripsi"] ?? "");

// Validasi data kosong
if (empty($nama) || $harga === "" || empty($deskripsi)) {
    die("Semua data harus diisi!");
}

// Validasi harga
if (!is_numeric($harga) || $harga <= 0) {
    die("Harga harus berupa angka lebih dari 0!");
}

// Query untuk menyimpan produk
$sql = "INSERT INTO products (nama, produk, harga, deskripsi, stok)
        VALUES (?, ?, ?, ?, ?)";

// Menyiapkan query
$stmt = $koneksi->prepare($sql);

// Nilai default kategori dan stok
$kategori = "Umum";
$stok = 0;

// Mengikat parameter
$stmt->bind_param(
    "ssdsi",
    $nama,
    $kategori,
    $harga,
    $deskripsi,
    $stok
);

// Menjalankan query
if ($stmt->execute()) {
    echo "<h2>Produk berhasil ditambahkan!</h2>";
    echo "<a href='index.html'>Kembali ke Form</a>";
} else {
    echo "Gagal menyimpan produk!";
}

// Menutup koneksi
$stmt->close();
$koneksi->close();

?>
