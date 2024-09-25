<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "b5_mydb"; // Thay bằng tên CSDL của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xóa nhân viên có id = 3
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Xóa thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
