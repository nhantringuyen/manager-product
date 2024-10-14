<?php
// Kết nối cơ sở dữ liệu
require_once '../config/config.php';
require_once '../controllers/ProductController.php';

// Tạo controller sản phẩm
$controller = new ProductController($db);

// Điều hướng hành động
$action = $_GET['action'] ?? 'index';
$masp = $_GET['masp'] ?? null;

match ($action) {
    'detail' => $controller->detail($masp),
    'search' => $controller->search(),
    default => $controller->index(),
};
?>
