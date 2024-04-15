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
                <form id="form_reg" action="regpm.php" class="col-md-6 bg-light p-3 my-3" method="post">
                    <h1 class="text-center text-uppercase h3 py-3">Thông tin phần mềm</h1>
                    <div class="form-group">
                        <label for="MaPM">Mã PM</label>
                        <input type="text" name="MaPM" id="MaPM" 
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="TenPM">Tên Phần Mềm</label>
                        <input type="text" name="TenPM" id="TenPM" 
                        class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Gia">Giá</label>
                        <input type="text" name="Gia" id="Gia" 
                        class="form-control">
                    </div>
                    <input type="submit"  class="btn-primary btn btn-block my-3" name="btn-regpm" value="Thêm">
                </form>
            </div>
        </div>

    </div>
</body>
</html>
