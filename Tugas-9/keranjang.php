<?php
session_start();
include 'koneksi.php';

// Hapus item dari keranjang jika tombol hapus diklik
if (isset($_GET['del'])) {
    $id_hapus = $_GET['del'];
    unset($_SESSION['cart'][$id_hapus]);
    header("Location: keranjang.php");
    exit;
}

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">TokoOnline</a>
            <a href="index.php" class="btn btn-outline-light">Lanjutkan Belanja</a>
        </div>
    </nav>

    <div class="container mb-5">
        <h2 class="fw-bold text-secondary mb-4">Keranjang Belanja Anda</h2>

        <?php if (empty($cart)): ?>
            <div class="text-center py-5 bg-white rounded shadow-sm">
                <p class="text-muted fs-5">Keranjang belanja Anda masih kosong.</p>
                <a href="index.php" class="btn btn-primary">Mulai Belanja</a>
            </div>
        <?php else: ?>
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th class="text-center">Jumlah</th>
                                    <th>Subtotal</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $total_belanja = 0;
                                foreach ($cart as $id_produk => $jumlah):
                                    $result = mysqli_query($koneksi, "SELECT * FROM products WHERE id = '$id_produk'");
                                    if ($row = mysqli_fetch_assoc($result)):
                                        $subtotal = $row['harga'] * $jumlah;
                                        $total_belanja += $subtotal;
                                ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <?php if (!empty($row['gambar'])): ?>
                                                <img src="<?= htmlspecialchars($row['gambar']); ?>" width="50" height="50" class="rounded me-3" style="object-fit: cover;">
                                            <?php endif; ?>
                                            <div>
                                                <h6 class="mb-0 fw-bold"><?= htmlspecialchars($row['nama']); ?></h6>
                                                <small class="text-muted"><?= htmlspecialchars($row['produk']); ?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                                    <td class="text-center"><?= $jumlah; ?></td>
                                    <td class="fw-bold text-primary">Rp <?= number_format($subtotal, 0, ',', '.'); ?></td>
                                    <td class="text-center">
                                        <a href="keranjang.php?del=<?= $id_produk; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk dari keranjang?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php endif; endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="fw-bold fs-5">
                                    <td colspan="3" class="text-end">Total Keseluruhan:</td>
                                    <td colspan="2" class="text-success">Rp <?= number_format($total_belanja, 0, ',', '.'); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="index.php" class="btn btn-outline-secondary">Belanja Lagi</a>
                        <button class="btn btn-success" onclick="alert('Fitur Checkout berhasil disimulasikan!')">Checkout Sekarang</button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/bootstrap.bundle.min.js"></script>
</body>
</html>