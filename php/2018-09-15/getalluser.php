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
$sql = "SELECT name, email FROM users";
$result = mysqli_query($test_connect, $sql);
if(mysqli_num_rows($result)){
while($row = mysqli_fetch_assoc($result)) {
        echo"Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($test_connect);
?>
