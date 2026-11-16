<?php
// Memanggil file koneksi database yang terpisah
include 'koneksi.php';

// Ambil list kategori unik dari database untuk dropdown filter
$query_kategori = "SELECT DISTINCT produk FROM products";
$result_kategori = mysqli_query($koneksi, $query_kategori);

// Cek apakah ada parameter filter kategori yang dipilih melalui URL (GET)
$kategori_terpilih = isset($_GET['kategori']) ? $_GET['kategori'] : '';

// Susun query SQL berdasarkan filter kategori
if (!empty($kategori_terpilih)) {
    $kategori_clean = mysqli_real_escape_string($koneksi, $kategori_terpilih);
    $sql = "SELECT * FROM products WHERE produk = '$kategori_clean'";
} else {
    $sql = "SELECT * FROM products";
}

$result_produk = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk E-Commerce</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover; /* Agar gambar proporsional memenuhi kotak */
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">TokoOnline</a>
        </div>
    </nav>

    <div class="container mb-5">
        <!-- Header & Filter Form -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold text-secondary">Katalog Produk</h2>
            </div>
            <div class="col-md-6">
                <form action="index.php" method="GET" class="d-flex justify-content-md-end">
                    <div class="input-group" style="max-width: 350px;">
                        <label class="input-group-text" for="filterKategori">Kategori</label>
                        <select name="kategori" id="filterKategori" class="form-select" onchange="this.form.submit()">
                            <option value="">Semua Kategori</option>
                            <?php while ($row_kat = mysqli_fetch_assoc($result_kategori)): ?>
                                <option value="<?= htmlspecialchars($row_kat['produk']); ?>" 
                                    <?= ($kategori_terpilih == $row_kat['produk']) ? 'selected' : ''; ?>>
                                    <?= htmlspecialchars($row_kat['produk']); ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                        <?php if (!empty($kategori_terpilih)): ?>
                            <a href="index.php" class="btn btn-outline-secondary">Reset</a>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>

        <!-- Daftar Produk (Looping) -->
        <div class="row g-4">
            <?php if (mysqli_num_rows($result_produk) > 0): ?>
                <?php while ($produk = mysqli_fetch_assoc($result_produk)): ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0">
                            
                            <!-- Menampilkan Gambar dari Database (jika kosong pakai placeholder) -->
                            <?php 
                                $gambar_produk = !empty($produk['gambar']) ? $produk['gambar'] : "https://via.placeholder.com/300x200?text=" . urlencode($produk['nama']);
                            ?>
                            <img src="<?= htmlspecialchars($gambar_produk); ?>" class="card-img-top" alt="<?= htmlspecialchars($produk['nama']); ?>">
                            
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-secondary mb-2 w-auto align-self-start">
                                    <?= htmlspecialchars($produk['produk']); ?>
                                </span>
                                <h5 class="card-title text-truncate"><?= htmlspecialchars($produk['nama']); ?></h5>
                                <p class="card-text text-muted small flex-grow-1">
                                    <?= htmlspecialchars($produk['deskripsi']); ?>
                                </p>
                                <div class="mt-3">
                                    <h6 class="text-primary fw-bold fs-5 mb-1">
                                        Rp <?= number_format($produk['harga'], 0, ',', '.'); ?>
                                    </h6>
                                    <small class="text-muted">Stok: <?= $produk['stok']; ?></small>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-top-0 pt-0">
                                <button class="btn btn-primary w-100" <?= ($produk['stok'] < 1) ? 'disabled' : ''; ?>>
                                    <?= ($produk['stok'] < 1) ? 'Stok Habis' : 'Beli Sekarang'; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted fs-5">Tidak ada produk yang ditemukan untuk kategori ini.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/bootstrap.bundle.min.js"></script>
</body>
</html>