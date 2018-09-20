<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
   echo 'khong ket noi';
}
echo 'ket noi thanh cong';
?>