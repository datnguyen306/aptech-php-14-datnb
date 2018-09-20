<?php
echo "hello world";
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
$sql= "CREATE TABLE users(
    id int auto_increment primary key,
    name varchar(50),
    email varchar(50)  
)";
if(mysqli_query($test_connect,$sql)){
    echo "bang tao thanh cong" ;
}
else{
    echo "bang tao khong thanh cong" . mysqli_error($test_connect);
}
?>