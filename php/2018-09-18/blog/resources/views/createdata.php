<?php
echo "hello world";
$server_name='localhost';
$user_name='root';
$password='';
$test_connect = mysqli_connect($server_name,$user_name,$password);
if($test_connect){
    echo"ket noi thanh cong";
    echo "<br>";
}
else{
    echo"kết nối không thành công";
    echo "<br>";
}
$sql = "CREATE DATABASE aptech_php_14_hocketnoi";
if (mysqli_query($test_connect, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($test_connect);
}

mysqli_close($test_connect);
?>
?>