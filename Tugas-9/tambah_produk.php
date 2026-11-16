<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $produk = mysqli_real_escape_string($koneksi, $_POST['produk']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $stok = mysqli_real_escape_string($koneksi, $_POST['stok']);

    // Proses Upload Gambar
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    $gambar_db = "";

    if ($error === 0) {
        $ektensi_dibolehkan = ['jpg', 'jpeg', 'png', 'webp'];
        $x = explode('.', $nama_file);
        $ekstensi = strtolower(end($x));

        if (in_array($ekstensi, $ektensi_dibolehkan)) {
            // Buat nama file unik untuk menghindari bentrok nama
            $nama_file_baru = uniqid() . '.' . $ekstensi;
            
            // Pastikan folder 'uploads' ada
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            if (move_uploaded_file($tmp_name, 'uploads/' . $nama_file_baru)) {
                $gambar_db = 'uploads/' . $nama_file_baru;
            }
        }
    }

    $query = "INSERT INTO products (nama, produk, harga, deskripsi, stok, gambar) VALUES ('$nama', '$produk', '$harga', '$deskripsi', '$stok', '$gambar_db')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: admin_produk.php?pesan=Produk berhasil ditambahkan!");
        exit;
    } else {
        $err_msg = "Gagal menambah produk: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 mb-5" style="max-width: 600px;">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h3 class="fw-bold mb-4 text-center">Tambah Produk</h3>
                
                <?php if (isset($err_msg)): ?>
                    <div class="alert alert-danger"><?= $err_msg; ?></div>
                <?php endif; ?>

                <!-- PERHATIKAN: enctype wajib ada untuk upload file -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Kategori Produk:</label>
                        <input type="text" name="produk" class="form-control" placeholder="Contoh: Elektronik / Sepatu" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi Produk:</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga Produk:</label>
                        <input type="number" step="0.01" name="harga" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok Produk:</label>
                        <input type="number" name="stok" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Gambar:</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success w-100 py-2 fw-bold">Tambah Produk</button>
                    <a href="admin_produk.php" class="btn btn-secondary w-100 mt-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>