<?php
echo "hello world";
// $server_name="192.168.60.141";
// $user_name="nam";
// $password="123456";
// $dbname="aptech_php_14";
$server_name='localhost';
$user_name='root';
$password='';
$dbname='aptech_php_14_hocketnoi';
$test_connect = mysqli_connect($server_name,$user_name,$password,$dbname);
if($test_connect){
    echo"ket noi thanh cong";
    echo "<br>";
}
else{
    echo"kết nối không thành công";
    echo"<br>";
}
$sql = "INSERT INTO users(name,email)
VALUES('datnb','datnguyen306@gmail.com'),('namnh06','namdoan@gmail.com')";
if(mysqli_query($test_connect,$sql)){
    echo "update thanh cong";
}
else{
    echo "update khong thanh cong";
}
?>