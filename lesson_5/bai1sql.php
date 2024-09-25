<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "b5_mydb";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Tạo cơ sở dữ liệu
$sql = "CREATE DATABASE b5_mydb";
if ($conn->query($sql) === TRUE) {
    echo "Tạo cơ sở dữ liệu thành công";
} else {
    echo "Lỗi khi tạo cơ sở dữ liệu: " . $conn->error;
}

// Kết nối đến cơ sở dữ liệu vừa tạo
$conn = new mysqli($servername, $username, $password, $dbname);

// Tạo bảng MyGuests
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Bảng MyGuests đã được tạo thành công";
} else {
    echo "Lỗi khi tạo bảng: " . $conn->error;
}

$conn->close();
?>
