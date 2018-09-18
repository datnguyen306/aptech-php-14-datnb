<?php
echo "hello world";
$server_name='localhost';
$user_name='root';
$password='';
$test_connect = mysqli_connect($server_name,$user_name,$password);
if($test_connect){
    echo"ket noi thanh cong";
}
else{
    echo"kết nối không thành công";
}
?>