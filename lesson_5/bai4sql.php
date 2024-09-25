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

// Sửa thông tin nhân viên
$sql = "UPDATE MyGuests SET firstname='Jane' WHERE firstname='James'";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thành công!";
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
