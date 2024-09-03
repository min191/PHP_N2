<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương thức POST</title>
    <script>
    // Hàm kiểm tra trước khi gửi
    function validateForm() {
        var bookName = document.getElementById("book_name").value;
        var author = document.getElementById("author").value;
        var publisher = document.getElementById("publisher").value;
        var year = document.getElementById("year").value;

        // Kiểm tra các trường bị trống 
        if (bookName == "" || author == "" || publisher == "" || year == "") {
            alert("Tất cả các trường phải được điền!");
            return false; // Ngăn form không được gửi đi 
        }

        // Kiểm tra năm xuất bản không phải số hoặc <= 0
        if (isNaN(year) || year <= 0) {
            alert("Năm xuất bản phải là một số hợp lệ lớn hơn 0!");
            return false; // Ngăn form không được gửi đi
        }

        return true; // Cho phép form được gửi đi 
    }
    </script>
</head>

<body>
    <h2>Nhập thông tin sách</h2>
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
</body>

</html>