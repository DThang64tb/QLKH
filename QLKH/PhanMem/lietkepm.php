`
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liet ke sinh vien</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Danh sách phần mềm </h1>
        <a href="phanmem.php" class="btn btn-info">Thêm phần mềm</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã phần mềm</th>
                    <th>Tên phần mềm</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'C:\xampp\htdocs\QLKH\DB\connect.php';
                $lietke_sql = "SELECT * FROM PhanMem order by MaPM, TenPM, Gia";
                $result = mysqli_query($conn, $lietke_sql);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $r['MaPM']; ?></td>
                        <td><?php echo $r['TenPM']; ?></td>
                        <td><?php echo $r['Gia']; ?></td>
                        <td><a href="suaphanmem.php?sMaPM=<?php echo $r['MaPM']; ?>" class="btn btn-info">Sửa</a>
                            <a onclick=" return confirm(' Bạn chắc chắn muốn xóa phần mềm này không!!!');" href="xoaphanmem.php?sMaPM=<?php echo $r['MaPM']; ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>