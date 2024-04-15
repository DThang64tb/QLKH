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
        <h1>Danh sách khách hàng </h1>
        <a href="khachhang.php" class="btn btn-info">Thêm khách hàng</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Họ và Tên</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'C:\xampp\htdocs\QLKH\DB\connect.php';
                $lietke_sql = "SELECT * FROM KhachHang order by MaKH,TenKH, DiaChi, GT, SoDienThoai ,Email";
                $result = mysqli_query($conn, $lietke_sql);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $r['MaKH']; ?></td>
                        <td><?php echo $r['TenKH']; ?></td>
                        <td><?php echo $r['GT']; ?></td>
                        <td><?php echo $r['DiaChi']; ?></td>
                        <td><?php echo $r['SoDienThoai']; ?></td>
                        <td><?php echo $r['Email']; ?></td>
                        <td><a href="suakhachhang.php?sMaKH=<?php echo $r['MaKH']; ?>" class="btn btn-info">Sửa</a>
                            <a onclick=" return confirm(' Bạn chắc chắn muốn xóa khách hàng này không!!!');" href="xoakhachhang.php?sMaKH=<?php echo $r['MaKH']; ?>" class="btn btn-danger">Xóa</a>
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