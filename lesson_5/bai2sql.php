<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "b5_mydb"; // Thay đổi tên CSDL của bạn nếu cần

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Câu SQL để chèn dữ liệu
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com'),
       ('Jane', 'Smith', 'jane@example.com'),
       ('James', 'Johnson', 'james@example.com'),
       ('Emily', 'Brown', 'emily@example.com'),
       ('Michael', 'Davis', 'michael@example.com')";

// Thực thi câu lệnh SQL
if ($conn->query($sql) === TRUE) {
    echo "Chèn dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
