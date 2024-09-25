<?php
$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "b5_mydy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "UPDATE MyGuests SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Cập nhật dữ liệu thành công.</p>";
    } else {
        echo "<p class='error-message'>Lỗi khi cập nhật dữ liệu: " . $conn->error . "</p>";
    }
}

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $sql = "SELECT * FROM MyGuests WHERE id=$edit_id";
    $edit_result = $conn->query($sql);
    if ($edit_result->num_rows > 0) {
        $edit_row = $edit_result->fetch_assoc();
    }
} else {
    header("Location: list.php");
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Nhân Viên</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Chỉnh sửa nhân viên</h1>
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $edit_row['id']; ?>">
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" value="<?php echo $edit_row['firstname']; ?>" required><br>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" value="<?php echo $edit_row['lastname']; ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $edit_row['email']; ?>" required><br>
            <input type="submit" name="update" value="Cập nhật">
        </form>
        <a href="list.php">Quay lại danh sách</a>
    </div>
</body>
</html>
