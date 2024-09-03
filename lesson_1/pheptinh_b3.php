<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pheptinh = $_POST['pheptinh'];
    $so1 = $_POST['so1'];
    $so2 = isset($_POST['so2']) ? $_POST['so2'] : null;
    $ketqua = "";

    // Xử lý các phép tính
    switch ($pheptinh) {
        case "cong":
            $ketqua = $so1 + $so2;
            break;
        case "tru":
            $ketqua = $so1 - $so2;
            break;
        case "nhan":
            $ketqua = $so1 * $so2;
            break;
        case "chia":
            if ($so2 != 0) {
                $ketqua = $so1 / $so2;
            } else {
                $ketqua = "Không thể chia cho 0!";
            }
            break;
        default:
            $ketqua = "Chưa chọn phép tính!";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả phép tính</title>
</head>
<body>
    <h2>KẾT QUẢ PHÉP TÍNH</h2>
    <p>Kết quả: <?php echo $ketqua; ?></p>
    <a href="javascript:history.back()">Quay lại trang trước</a>
</body>
</html>
