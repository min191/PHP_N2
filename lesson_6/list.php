<?php
$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "b5_mydy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Nhân Viên</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Danh sách nhân viên</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Reg_Date</th>
                <th>Actions</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['firstname']}</td>
                            <td>{$row['lastname']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['reg_date']}</td>
                            <td>
                                <a class='edit-button' href='edit.php?edit_id={$row['id']}'>Edit</a>
                                <a class='delete-button' href='delete.php?delete_id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Không có dữ liệu.</td></tr>";
            }
            ?>
        </table>
        <a href="insert.php">Chèn nhân viên mới</a>
    </div>
</body>
</html>

<?php $conn->close(); ?>
