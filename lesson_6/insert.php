<?php
$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "b5_mydy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if (isset($_POST['insert'])) {
    $firstname = $_POST['new_firstname'];
    $lastname = $_POST['new_lastname'];
    $email = $_POST['new_email'];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Chèn dữ liệu thành công.</p>";
    } else {
        echo "<p class='error-message'>Lỗi khi chèn dữ liệu: " . $conn->error . "</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chèn Nhân Viên</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Chèn nhân viên mới</h1>
        <form action="insert.php" method="post">
            <label for="new_firstname">Firstname:</label>
            <input type="text" name="new_firstname" required><br>
            <label for="new_lastname">Lastname:</label>
            <input type="text" name="new_lastname" required><br>
            <label for="new_email">Email:</label>
            <input type="email" name="new_email" required><br>
            <input type="submit" name="insert" value="Chèn dữ liệu">
        </form>
        <a href="list.php">Hiển thị danh sách nhân viên</a>
    </div>
</body>
</html>
