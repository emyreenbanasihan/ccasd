
<?php
session_start();

include('mainnav.php');
 ?>

 <?php
 if(isset($_POST["submit"])){
 $dbPassword = "";
 $dbUsername = "root";
 $dbServer = "localhost";
 $dbDatabase = "db_ccasd";

 // Create connection
 $con=new mysqli($dbServer,$dbUsername,$dbPassword,$dbDatabase);
 // Check connection
 if ($con->connect_error) {
 die("Connection failed: " . $con->connect_error);
 }

 $sql = "INSERT INTO systemcred (fname,mname,lname,username,password,position) VALUES
 VALUES ( ".$_POST["fname"]."','".$_POST["mname"]."','".$_POST["lname"]."','".$_POST["user"]."',
 '".md5($_POST["password"])."','".$_POST["position"]."')";

 if ($con->query($sql) === TRUE) {
   echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Succesfully Registered')
      window.location.href='fertreco.php';
      </SCRIPT>");}
 else {
 echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
 }

 $con->close();
 }
 ?>
  <link rel="stylesheet" href="assets/css/form-basic.css">

  <div class="container">
          <div class="media-container-row">
              <div class="title col-12 col-md-8">
                  <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Register
                  </h2>
                  <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

              </div>
          </div>
      </div>

     <div class="main-content">
  <form class="form-basic" method="post" action="#">
<table align="center">
  <tr>
    <td> First Name</td>
  	<td> <input type="text" name="fname"></td>
  </tr>
  <tr>
    <td> Middle Name</td>
    <td> <input type="text" name="mname"></td>
  </tr>
  <tr>
    <td> Last name</td>
    <td> <input type="text" name="lname"></td>
  </tr>
  <tr>
    <td>Username</td>
    <td> <input type="text" name="username"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
  </tr>

  <tr>
    <td>Position</td>
    <td>   <select name="position">
              <option value="Choose Member Type">Choose Member Type</option>
              <option value="admin">Admin</option>
              <option value="epmloyee">Employee</option>
            </select>
</td>
  </tr>
  <tr>
    <td colspan="2"><br></td>

  </tr>
  <tr>
    <td colspan="2"><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
  </form>


  <?php
  /*
  if(isset($_POST["submit"])){
  $dbPassword = "";
  $dbUsername = "root";
  $dbServer = "localhost";
  $dbDatabase = "db_ccasd";

  // Create connection
  $con=new mysqli($dbServer,$dbUsername,$dbPassword,$dbDatabase);
  // Check connection
  if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
  }

  $sql = "INSERT INTO systemcred (fname,mname,lname,username,password,position) VALUES
  VALUES ( ".$_POST["fname"]."','".$_POST["mname"]."','".$_POST["lname"]."','".$_POST["user"]."',
  '".$_POST["pass"]."','".$_POST["position"]."')";

  if ($con->query($sql) === TRUE) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Succesfully Registered')
       window.location.href='fertreco.php';
       </SCRIPT>");}
  else {
  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
  }

  $con->close();
  }
  */
  ?>




</body>
</html>
