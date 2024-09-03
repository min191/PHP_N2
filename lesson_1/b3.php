<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Phép tính và kiểm tra số</title>
</head>

<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form action="pheptinh_b3.php" method="post">
        <label for="pheptinh">Chọn phép tính:</label><br>
        <input type="radio" id="cong" name="pheptinh" value="cong">
        <label for="cong">Cộng</label><br>
        <input type="radio" id="tru" name="pheptinh" value="tru">
        <label for="tru">Trừ</label><br>
        <input type="radio" id="nhan" name="pheptinh" value="nhan">
        <label for="nhan">Nhân</label><br>
        <input type="radio" id="chia" name="pheptinh" value="chia">
        <label for="chia">Chia</label><br><br>

        <label for="so1">Số thứ nhất:</label><br>
        <input type="number" id="so1" name="so1"><br>
        <label for="so2">Số thứ hai (nếu cần):</label><br>
        <input type="number" id="so2" name="so2"><br><br>

        <input type="submit" value="Tính">
    </form>

    <h2>KIỂM TRA SỐ</h2>
    <form action="kiemtra_b3.php" method="post">
        <input type="radio" id="kiemtrachan" name="pheptinh" value="kiemtrachan">
        <label for="kiemtrachan">Kiểm tra số chẵn/lẻ</label><br>
        <input type="radio" id="kiemtrannt" name="pheptinh" value="kiemtrannt">
        <label for="kiemtrannt">Kiểm tra số nguyên tố</label><br><br>

        <label for="so1">Số cần kiểm tra:</label><br>
        <input type="number" id="so1" name="so1"><br><br>

        <input type="submit" value="Kiểm tra">
    </form>
    <div>
    <a style="
    width: 70px;
    background-color: rgba(218, 210, 210, 0.3);
    border: 3px solid black;
    cursor: pointer;
    height: 70px;
    "
     href="http://minhnq.wuaze.com/?i=1">Back Home</a>
    </div>
</body>

</html>