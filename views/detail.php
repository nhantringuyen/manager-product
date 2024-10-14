<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chi tiết sản phẩm: <?= htmlspecialchars($product['tensp']); ?></title>
    <link rel="stylesheet" href="<?= asset('/assets/css/styles.css') ?>" type="text/css" media="all">
</head>
<body>
<?php include '../views/layouts/header.php'; ?>

<main class="container">
    <h1 class="main-title">Chi tiết sản phẩm</h1>

    <div class="product-detail">
        <div class="product-image-container">
            <img src="<?= asset(htmlspecialchars($product['hinh_anh'] ?? '/assets/images/no-image.jpg')); ?>" alt="<?=
            htmlspecialchars($product['tensp']); ?>" class="product-detail-image">
        </div>

        <div class="product-info">
            <h2 class="product-detail-title"><?= htmlspecialchars($product['tensp']); ?></h2>
            <p class="product-detail-price">Giá nhập: <?= number_format($product['gia_nhap'] ?? 0); ?> VNĐ</p>
            <p class="product-detail-price">Giá bán: <?= number_format($product['gia_xuat'] ?? 0); ?> VNĐ</p>
            <p class="product-detail-discount">Khuyến mãi: <?= htmlspecialchars($product['khuyen_mai'] ?? 0); ?></p>
            <p class="product-detail-desc"><?= htmlspecialchars($product['mo_ta']); ?></p>

            <a href="index.php" class="back-link">Quay lại danh sách sản phẩm</a>
        </div>
    </div>
</main>

<?php include '../views/layouts/footer.php'; ?>
</body>
</html>
