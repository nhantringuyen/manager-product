<?php
// Cấu hình kết nối cơ sở dữ liệu MySQL
$host = 'localhost';
$dbname = 'ProductDB';
$username = 'root';  // Tên người dùng MySQL của bạn
$password = '';      // Mật khẩu MySQL của bạn

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
}

function asset($path): string
{
    // Lấy thư mục gốc (root directory)
    $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

    // Trả về đường dẫn tuyệt đối đến file trong thư mục public
    return $base_url . '/' . ltrim($path, '/');
}
