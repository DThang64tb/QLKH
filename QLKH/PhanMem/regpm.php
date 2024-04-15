<?php
require 'C:\xampp\htdocs\QLKH\DB\connect.php';
if(isset($_POST['MaPM']) && isset($_POST['TenPM']) && isset($_POST['Gia'])){
    $MaPM = $_POST['MaPM'];
    $TenPM = $_POST['TenPM'];
    $Gia = $_POST['Gia'];
    if(!empty($MaPM) && !empty($TenPM) && !empty($Gia)){
        $sql = "INSERT INTO `PhanMem` (`MaPM`, `TenPM`, `Gia`) VALUES ('$MaPM', '$TenPM','$Gia')";
         if($conn->query($sql)===TRUE){
            echo " lưu dữ liệu thành công";
         }else{
            echo "Lỗi: ".$conn->error; 
         }
    } else {
        echo "Nhập đủ thông tin";
    }
}
?>