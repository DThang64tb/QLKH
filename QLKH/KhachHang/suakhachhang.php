<?php 
$sMaKH = $_GET['sMaKH'];
require 'C:\xampp\htdocs\QLKH\DB\connect.php';
$sua_sql = "SELECT * FROM KhachHang WHERE MaKH = '$sMaKH' ";
$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Cập nhật thông tin sinh viên</title>
</head>
<body>
    <div id="wapper">
        <div class="container">
            <div class="row justify-content-around">
                <form id="form_reg" action="regkh.php" class="col-md-6 bg-light p-3 my-3" method="post">
                    <h1 class="text-center text-uppercase h3 py-3">Cập nhật thông tin khách hàng</h1>
                    <div class="form-group">
                        <label for="MaKH">Mã khách hàng</label>
                        <input type="text" class="form-control" name="MaKH" id="MaKH" 
                         value ="<?php echo $row['MaKH']?>">
                    </div>
                    <div class="form-group">
                        <label for="TenKH">Họ và tên</label>
                        <input type="text" name="TenKH" id="TenKH" 
                        class="form-control" value ="<?php echo $row['TenKH']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Giới tính</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="GT" id="male"
                                value="male" class="form-check-input" 
                                <?php echo ($row['GT'] == 'male') ? 'checked' : ''; ?>>
                                <label for="male" class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="GT" id="female"
                                value="female" class="form-check-input" 
                                <?php echo ($row['GT'] == 'female') ? 'checked' : ''; ?>>
                                <label for="female" class="form-check-label">Nữ</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="DiaChi">Địa chỉ</label>
                        <input type="text" name="DiaChi" id="DiaChi" 
                        class="form-control" value ="<?php echo $row['DiaChi']?>">
                    </div>
                    <div class="form-group">
                        <label for="SoDienThoai">Số điện thoại</label>
                        <input type="tel" name="SoDienThoai" id="SoDienThoai" 
                        class="form-control" value ="<?php echo $row['SoDienThoai']?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="Email" id="email" 
                        class="form-control" value ="<?php echo $row['Email']?>">
                    </div>
                    <input type="submit"  class="btn-primary btn btn-block my-3" name= "btn-regsua" value="Sửa">
                </form>
            </div>
        </div>

    </div>
</body>
</html>