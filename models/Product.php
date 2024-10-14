<?php
class Product {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAllProducts(): array {
        $query = "SELECT masp, tensp, hinh_anh, gia_xuat, khuyen_mai FROM ad_Product";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById(string $masp): array|false {
        $query = "SELECT * FROM ad_Product WHERE masp = :masp";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':masp', $masp);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function searchProducts(string $keyword): array {
        $query = "SELECT masp, tensp, hinh_anh, gia_xuat, khuyen_mai FROM ad_Product WHERE tensp LIKE :keyword";
        $stmt = $this->db->prepare($query);
        $keyword = "%".$keyword."%";
        $stmt->bindParam(':keyword', $keyword);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
