<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM products WHERE id = '$id'");
$produk = mysqli_fetch_assoc($data);

if (!$produk) {
    header("Location: admin_produk.php");
    exit;
}

if (isset($_POST['update'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['produk']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $stok = mysqli_real_escape_string($koneksi, $_POST['stok']);
    
    $gambar_db = $produk['gambar']; // Default pakai gambar lama

    // Cek apakah user mengupload gambar baru
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
        $nama_file = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $ekstensi = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
        $ektensi_dibolehkan = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($ekstensi, $ektensi_dibolehkan)) {
            $nama_file_baru = uniqid() . '.' . $ekstensi;
            
            if (move_uploaded_file($tmp_name, 'uploads/' . $nama_file_baru)) {
                // Hapus gambar lama jika ada dan berupa file lokal
                if (!empty($produk['gambar']) && file_exists($produk['gambar'])) {
                    unlink($produk['gambar']);
                }
                $gambar_db = 'uploads/' . $nama_file_baru;
            }
        }
    }

    $query = "UPDATE products SET nama='$nama', produk='$kategori', harga='$harga', deskripsi='$deskripsi', stok='$stok', gambar='$gambar_db' WHERE id='$id'";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: admin_produk.php?pesan=Produk berhasil diperbarui!");
        exit;
    } else {
        $err_msg = "Gagal memperbarui produk: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 mb-5" style="max-width: 600px;">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h3 class="fw-bold mb-4 text-center">Edit Produk</h3>
                
                <?php if (isset($err_msg)): ?>
                    <div class="alert alert-danger"><?= $err_msg; ?></div>
                <?php endif; ?>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk:</label>
                        <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($produk['nama']); ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Kategori Produk:</label>
                        <input type="text" name="produk" class="form-control" value="<?= htmlspecialchars($produk['produk']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi Produk:</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required><?= htmlspecialchars($produk['deskripsi']); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga Produk:</label>
                        <input type="number" step="0.01" name="harga" class="form-control" value="<?= $produk['harga']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok Produk:</label>
                        <input type="number" name="stok" class="form-control" value="<?= $produk['stok']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Gambar Baru (Opsional):</label>
                        <?php if (!empty($produk['gambar'])): ?>
                            <div class="mb-2">
                                <img src="<?= htmlspecialchars($produk['gambar']); ?>" width="80" class="rounded border">
                                <br><small class="text-muted">Gambar saat ini</small>
                            </div>
                        <?php endif; ?>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    </div>

                    <button type="submit" name="update" class="btn btn-warning w-100 py-2 fw-bold">Perbarui Produk</button>
                    <a href="admin_produk.php" class="btn btn-secondary w-100 mt-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>