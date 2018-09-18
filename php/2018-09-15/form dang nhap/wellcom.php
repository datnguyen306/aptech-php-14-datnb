Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php $name=mysqli_real_escape_string($test_connect,$_POST['name']);?>
<?php $email=mysqli_real_escape_string($test_connect,$_POST['email']);?>