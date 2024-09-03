<?php
require 'functions.php';

$array = [];
$maxValue = $minValue = $arraySum = $sortedArray = $checkValue = $isInArray = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = isset($_POST['array']) ? explode(',', $_POST['array']) : [];
    $array = array_map('intval', $array); // Chuyển các phần tử thành số nguyên

    $maxValue = findMax($array);
    $minValue = findMin($array);
    $arraySum = sumArray($array);

    $sortedArray = $array;
    sortArray($sortedArray);

    $checkValue = isset($_POST['check_value']) ? intval($_POST['check_value']) : 0;
    $isInArray = checkInArray($array, $checkValue);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Array Functions</h1>
        <form method="post" action="">
            <label for="array">Nhập mảng (các số cách nhau bằng dấu phẩy):</label>
            <input type="text" id="array" name="array" required value="<?php echo isset($_POST['array']) ? $_POST['array'] : ''; ?>">
            <br><br>
            <label for="check_value">Nhập giá trị cần kiểm tra:</label>
            <input type="number" id="check_value" name="check_value" value="<?php echo isset($_POST['check_value']) ? $_POST['check_value'] : ''; ?>">
            <br><br>
            <input type="submit" value="Xử lý mảng">
        </form>

        <?php if (!empty($array)): ?>
        <div class="result-box">
            <p>Mảng ban đầu: <span><?php echo implode(', ', $array); ?></span></p>
            <p>Giá trị lớn nhất trong mảng: <span><?php echo $maxValue; ?></span></p>
            <p>Giá trị nhỏ nhất trong mảng: <span><?php echo $minValue; ?></span></p>
            <p>Tổng các phần tử trong mảng: <span><?php echo $arraySum; ?></span></p>
            <p>Mảng sau khi sắp xếp: <span><?php echo implode(', ', $sortedArray); ?></span></p>
            <p><?php echo $checkValue; ?> 
                <?php echo $isInArray ? 'có' : 'không'; ?> trong mảng
            </p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
