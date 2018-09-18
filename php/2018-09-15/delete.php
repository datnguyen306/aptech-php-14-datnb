<?php
echo "hello world";
$server_name="192.168.60.141";
$user_name="nam";
$password="123456";
$dbname="aptech_php_14";
$test_connect = mysqli_connect($server_name,$user_name,$password,$dbname);
if($test_connect){
    echo"ket noi thanh cong";
    echo "<br>";
}
else{
    echo"kết nối không thành công";
    echo"<br>";
}
// có thể tạo file riêng .php để nhúng vào html (include hoặc requry) vd file đăng nhập connect ta nhúng <?php include connect.php?>
$sql = "DELETE FROM users WHERE id=9";
if(mysqli_query($test_connect,$sql)){
    echo "xóa thanh cong";
}
else{
    echo "xóa khong thanh cong";
}
?>