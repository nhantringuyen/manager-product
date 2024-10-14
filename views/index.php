<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="<?= asset('/assets/css/styles.css') ?>" type="text/css" media="all">
</head>
<body>
<?php include '../views/layouts/header.php'; ?>

<main class="container">
    <h1 class="main-title">Danh sách sản phẩm</h1>

    <form method="GET" action="index.php" class="search-form">
        <input type="text" name="keyword" placeholder="Nhập tên sản phẩm" class="search-input">
        <button type="submit" class="search-button">Tìm kiếm</button>
    </form>
    <?php if (empty($products)): ?>
        <p class="no-products">Hiện tại không có sản phẩm nào!</p>
    <?php else: ?>
        <div class="product-list">
            <?php foreach($products as $product): ?>
                <div class="product-item">
                    <img src="<?= htmlspecialchars($product['hinh_anh'] ?? 'public/assets/images/no-image.png'); ?>" alt="<?= htmlspecialchars($product['tensp']); ?>" class="product-image">
                    <h3 class="product-title"><?= htmlspecialchars($product['tensp']); ?></h3>
                    <p class="product-price">Giá: <?= number_format($product['gia_xuat'] ?? 0); ?> VNĐ</p>
                    <p class="product-discount">Khuyến mãi: <?= $product['khuyen_mai'] ?? 0; ?>%</p>
                    <a href="index.php?action=detail&masp=<?= htmlspecialchars($product['masp']); ?>" class="product-link">Xem chi tiết</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</main>

<?php include '../views/layouts/footer.php'; ?>
</body>
</html>
