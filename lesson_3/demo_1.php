<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phuong thuc GET</title>
</head>
<body>
    <h2>Nhập thông tin sách</h2>
    <form action="" method="get">
    <label for="book_name">Tên sách:</label>
    <input type="text" name="book_name" id="book_name" required> <br><br>
    
    <label for="author">Tác giả:</label>
    <input type="text" id="author" name="author" required><br><br>

    <label for="publisher">Nhà xuất bản:</label>
    <input for="text" id="publisher" name="publisher" required> <br><br>


    <label for="year">Năm xuất bản:</label>
    <input type="year " id="dob" name="dob " required>

    <input type="submit" value="Gửi">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD']== 'GET' && !empty($_GET)){
        //lấy dữ liệu từ phương thức get

        $book_name = $_GET['book_name'];
        $author = $_GET['author'];
        $publisher = $_GET['publisher'];
        $dob = $_GET['dob'];

        echo"<h2>Nhập thông tin sách</h2>";
        echo"Tên sách: ". htmlspecialchars($book_name) . "<br>";
        echo "Tác giả: " . htmlspecialchars($author) . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($publisher) . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($dob) . "<br>";
    }

    
    
    ?>
</body>
</html>