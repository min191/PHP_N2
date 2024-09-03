<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sách</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
        text-align: center;
    }
    </style>
</head>

<body>
    <h2>Danh sách sách</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>
        <?php
        // Tổng số sách (trong trường hợp này là 100)
        $totalBooks = 100;

        // Số sách hiển thị trên mỗi trang
        $booksPerPage = 10;

        // Tính số trang cần thiết
        $totalPages = ceil($totalBooks / $booksPerPage);

        // Lấy trang hiện tại từ URL, nếu không có thì mặc định là trang 1
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Tính toán vị trí bắt đầu và kết thúc của mỗi trang
        $start = ($currentPage - 1) * $booksPerPage + 1;
        $end = min($start + $booksPerPage - 1, $totalBooks);

        // Hiển thị các dòng trong phạm vi của trang hiện tại
        for ($i = $start; $i <= $end; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>Tensach$i</td>";
            echo "<td>Noidung$i</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Điều hướng trang -->
    <div style="margin-top: 20px;">
        <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">&laquo; Trang trước</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Trang sau &raquo;</a>
        <?php endif; ?>
    </div>
</body>

</html>