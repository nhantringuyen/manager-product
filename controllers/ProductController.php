<?php
require_once '../models/Product.php';

class ProductController {
    private Product $productModel;

    public function __construct(PDO $db) {
        $this->productModel = new Product($db);
    }

    public function index(): void {
        $products = $this->productModel->getAllProducts();
        require '../views/index.php';
    }

    public function detail(string $masp): void {
        $product = $this->productModel->getProductById($masp);
        require '../views/detail.php';
    }

    public function search(): void {
        $keyword = $_GET['keyword'] ?? '';
        $products = $this->productModel->searchProducts($keyword);
        require '../views/index.php';
    }
}
?>
