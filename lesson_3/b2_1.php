<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $invoice_id = trim($_POST['invoice_id']);
    $payfor = isset($_POST['payfor']) ? $_POST['payfor'] : [];

    $errors = []; // Mảng để lưu trữ lỗi

    // Kiểm tra nếu các trường trống
    if (empty($first_name) || empty($last_name) || empty($email) || empty($invoice_id)) {
        $errors[] = "Tất cả các trường (Name, Last Name, Email, Invoice ID) đều phải được điền!";
    }

    // Kiểm tra email hợp lệ
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ!";
    }

    // Kiểm tra Invoice ID là số hợp lệ
    if (!is_numeric($invoice_id)) {
        $errors[] = "Invoice ID phải là một số hợp lệ!";
    }

    // Kiểm tra ít nhất một checkbox được chọn
    if (empty($payfor)) {
        $errors[] = "Bạn phải chọn ít nhất một tùy chọn trong 'Pay For'.";
    }

    // Nếu không có lỗi, hiển thị thông tin đã nhập
    if (empty($errors)) {
        echo "<h2>Thông tin đã nhập:</h2>";
        echo "Name: " . htmlspecialchars($first_name) . "<br>";
        echo "Last Name: " . htmlspecialchars($last_name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Invoice ID: " . htmlspecialchars($invoice_id) . "<br>";

        // Kiểm tra nếu $payfor là mảng trước khi sử dụng implode()
        if (is_array($payfor)) {
            echo "Pay For: " . implode(", ", $payfor) . "<br>";
        } else {
            echo "Pay For: " . htmlspecialchars($payfor) . "<br>";
        }
    } else {
        // Nếu có lỗi, hiển thị từng lỗi
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
} else {
    echo "<p style='color:red;'>Vui lòng truy cập qua form để gửi dữ liệu!</p>";
}
?>