<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Thông tin chi tiết</title>
</head>

<body>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form id="form_reg" action="regchitiet.php" class="col-md-6 bg-light p-3 my-3" method="post">
                    <h1 class="text-center text-uppercase h3 py-3">Thông tin chi tiết</h1>
                    <div class="form-group">
                        <label for="MaCT">Mã chi tiết</label>
                        <input type="text" name="MaCT" id="MaCT" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="MaHD">Mã hợp đồng</label>
                        <select name="MaHD" id="MaHD" class="form-control">
                            <?php
                            require 'C:\xampp\htdocs\QLKH\DB\connect.php';

                            $sql = "SELECT * FROM HopDong";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['MaHD'] . "'>" . $row['MaHD'] . "</option>";
                                }
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="SoLuong">Số lượng</label>
                        <input type="number" name="SoLuong" id="SoLuong" class="form-control" onchange="getPrice()">
                    </div>
                    <div class="form-group">
                        <label for="MaPM">Mã phần mềm</label>
                        <select name="MaPM" id="MaPM" class="form-control" onchange="getPrice()">
                            <?php
                            require 'C:\xampp\htdocs\QLKH\DB\connect.php';

                            $sql = "SELECT * FROM PhanMem";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['MaPM'] . "'>" . $row['MaPM'] . "</option>";
                                }
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TongTien">Tổng tiền</label>
                        <input type="text" name="TongTien" id="TongTien" class="form-control" readonly>
                    </div>
                    <input type="submit" class="btn-primary btn btn-block my-3" name="btn-regchitiet" value="Thêm">
                </form>
            </div>
        </div>
    </div>

    <script>
        function getPrice() {
            var maPM = document.getElementById("MaPM").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var giaPhanMem = parseFloat(this.responseText);
                    var soLuong = parseFloat(document.getElementById("SoLuong").value);
                    var tongTien = giaPhanMem * soLuong;
                    document.getElementById("TongTien").value = tongTien;
                }
            };
            xhttp.open("GET", "getPrice.php?MaPM=" + maPM, true);
            xhttp.send();
        }
    </script>
</body>

</html>
