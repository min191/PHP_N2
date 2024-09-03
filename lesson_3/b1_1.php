<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương thức POST</title>
</head>

<body>
    <h2>Nhập thông tin sách </h2>
    <form action="" method="post" onsubmit="return validateForm()">
        <label for="book_name">Tên sách:</label>
        <input type="text" name="book_name" id="book_name"> <br><br>

        <label for="author">Tác giả:</label>
        <input type="text" name="author" id="author"> <br><br>

        <label for="publisher">Nhà xuất bản:</label>
        <input type="text" name="publisher" id="publisher"> <br><br>

        <label for="year">Năm xuất bản:</label>
        <input type="number" name="year" id="year"> <br><br>

        <input type="submit" value="Gửi">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Lấy dữ liêu từ form
        $book_name = trim($_POST['book_name']);
        $author = trim($_POST['author']);
        $publisher = trim($_POST['publisher']);
        $year = trim($_POST['year']);

        $errors = []; //Mảng để lưu trữ
        
        //Kiểm tra nếu các trường trống

        if(empty($book_name) || empty($author) || empty($publisher) || empty($year)){
        $errors[] = "Tất cả các trường đều phải được điền!";
       }

       //Kiểm tra năm xuất bản phải là số và <=0 
       if (!is_numeric($year) || $year <= 0 ){
        $errors[]= "Năm xuất bản phải là một số hợp lệ lớn hơn 0! "; 
       }

       //Nếu không có lỗi, hiện thi thông tin sách 
       if(empty($errors)){
        echo "<h2>Thông tin sách</h2>";
        echo "Tên sách: " . htmlspecialchars($book_name). "<br>";
        echo "Tác giả: " . htmlspecialchars($author) . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($publisher) . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($year) . "<br>";

        }  else {
            // Nếu có lỗi, hiển thị từng lỗi
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        }
    }
    ?>
</body>

</html>