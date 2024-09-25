<?php
$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "b5_mydy";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Tạo CSDL
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql);
$conn->select_db($dbname);

// Tạo bảng
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tạo CSDL</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Tạo CSDL thành công</h1>
        <a href="list.php">Hiển thị danh sách nhân viên</a><br>
        <a href="insert.php">Chèn dữ liệu nhân viên mới</a>
    </div>
</body>
</html>
