<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Thông tin khách hàng</title>
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form id="form_reg" action="regkh.php" class="col-md-6 bg-light p-3 my-3" method="post">
                    <h1 class="text-center text-uppercase h3 py-3">Thông tin khách hàng</h1>
                    <div class="form-group">
                        <label for="usercode">Mã khách hàng</label>
                        <input type="text" name="MaKH" id="usercode" 
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="TenKH" id="fullname" 
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">Giới tính</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="GT" id="male"
                                value="male" class="form-check-input" checked>
                                <label for="male" class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="GT" id="female"
                                value="female" class="form-check-input">
                                <label for="female" class="form-check-label">Nữ</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="DiaChi" id="address" 
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="tel" name="SoDienThoai" id="phone" 
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="Email" id="email" 
                        class="form-control">
                    </div>
                    <input type="submit"  class="btn-primary btn btn-block my-3" name="btn-regkh" value="Thêm">
                </form>
            </div>
        </div>

    </div>
</body>
</html>
