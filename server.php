

<?php
// error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$datbase = "db_ccasd";
mysql_connect($host,$user,$password);
mysql_select_db($datbase);
?>
<?php

$con=mysqli_connect("localhost","root","","db_ccasd");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 ?>
