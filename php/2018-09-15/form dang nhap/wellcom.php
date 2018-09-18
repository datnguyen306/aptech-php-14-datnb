<?php
// $server_name="192.168.60.141";
// $user_name="nam";
// $password="123456";
// $dbname="aptech_php_14";
$server_name="localhost";
$user_name="root";
$password="";
$dbname="aptech_php_14_hocketnoi";
$test_connect = mysqli_connect($server_name,$user_name,$password,$dbname);
if($test_connect){
    echo"ket noi thanh cong";
    echo "<br>";
}
else{
    echo"kết nối không thành công";
    echo"<br>";
}
//   echo $_POST['name'];
//   echo $_POST['email'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql="SELECT * FROM users WHERE name='".$name."' and email='".$email."'";
  $result=mysqli_query($test_connect,$sql);
  if(mysqli_num_rows($result)>0){
    echo"dang nhap thanh cong";
  }
  else{
    echo"đăng nhap khong thanh cong";
    }
// }
mysqli_close($test_connect);
  
  ?>