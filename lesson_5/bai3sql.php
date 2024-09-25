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

// Lấy dữ liệu từ bảng MyGuests
$sql = "SELECT id, firstname, lastname, reg_date FROM MyGuests";
$result = $conn->query($sql);

// Hiển thị dữ liệu dưới dạng bảng
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Reg_Date</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["firstname"]. "</td>
                <td>" . $row["lastname"]. "</td>
                <td>" . $row["reg_date"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 kết quả";
}

$conn->close();
?>
