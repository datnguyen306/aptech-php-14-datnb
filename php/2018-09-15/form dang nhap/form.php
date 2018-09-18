<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>
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
// if($test_connect){
//     echo"ket noi thanh cong";
//     echo "<br>";
// }
// else{
//     echo"kết nối không thành công";
//     echo"<br>";
// }
if(isset($_POST['submit'])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $sql="select * from users where name=$name and email=$email";
  if(mysqli_query($test_connect,$sql)!=0){
    echo"dang nhap thanh cong";
}
else{
  echo"đăng nhap khong thanh cong";
}
}
mysqli_close($test_connect);
  
  ?>
  </tbody>
</table> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>