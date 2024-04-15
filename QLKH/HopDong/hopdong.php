<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Thông tin hợp đồng</title>
</head>

<body>
    <div id="wapper">
        <div class="container">
            <div class="row justify-content-around">
                <form id="form_reg" action="reghd.php" class="col-md-6 bg-light p-3 my-3" method="post">
                    <h1 class="text-center text-uppercase h3 py-3">Thông tin hợp đồng</h1>
                    <div class="form-group">
                        <label for="MAHD">Mã hợp đồng</label>
                        <input type="text" name="MAHD" id="MAHD" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="MAKH">Mã khách hàng</label>
                        <select name="MAKH" id="MAKH" class="form-control">
                            <?php
                            require 'C:\xampp\htdocs\QLKH\DB\connect.php';

                            $sql = "SELECT * FROM KhachHang";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['MaKH'] . "'>" . $row['MaKH'] . "</option>";
                                }
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày ký</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="thoihan">Thời hạn - Tháng</label>
                        <input type="date" name="thoihan" id="thoihan" class="form-control">
                    </div>                
                    <input type="submit" class="btn-primary btn btn-block my-3" name="btn-reghd" value="Thêm">
                </form>
            </div>
        </div>

    </div>
</body>

</html>