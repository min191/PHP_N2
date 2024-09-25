<?php
$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "b5_mydy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM MyGuests WHERE id=$delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Xóa dữ liệu thành công.</p>";
    } else {
        echo "<p class='error-message'>Lỗi khi xóa dữ liệu: " . $conn->error . "</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xóa Nhân Viên</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Xóa nhân viên</h1>
        <a href="list.php">Quay lại danh sách nhân viên</a>
    </div>
</body>
</html>
