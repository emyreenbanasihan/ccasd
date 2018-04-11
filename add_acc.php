<!DOCTYPE html>
<html>
<head>
<style>
.center {
margin: auto;
width: 30%;
  }

</style>

<?php
session_start();

include('mainnav.php');
 ?>
<?php

include_once 'server.php';

if(isset($_POST['btn-save']))
{
	// variables for input data
	$fname = $_POST['fname'];
	$mname= $_POST['mname'];
	$lname = $_POST['lname'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $position = $_POST['position'];
	// variables for input data

	// sql query for inserting data into database
	$sql_query = "INSERT INTO systemcred (fname,mname,lname,username,password,position) VALUES('$fname','$mname','$lname','$username','$password','$position')";
	// sql query for inserting data into database

	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='acc.php';
		</script>
		<?php
	}	else	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
	// sql query execution function
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


		<div style="text-align:center;width:100%">
  <div style="margin: 0 auto; display: inline-block;">

	 <div class="main-content">
<form class="form-basic" method="post" action="#">


<div class="center">
<input type="text" name="fname" placeholder="First Name">
</div>

<div class="center">
<input type="text" name="mname" placeholder="Middle Name">
</div>

<div class="center">
<input type="text" name="lname" placeholder="Last name">
</div>

<div class="center">
<input type="text" name="username" placeholder="Username">
</div>

<div class="center">
<input type="password" name="password" placeholder="Password">
</div>

<div class="center">
<select name="position">
						<option value="Choose Position">Choose Member Type</option>
						<option value="admin">Admin</option>
						<option value="employee">Employee</option>
					</select>
</div>


<button type="submit" name="btn-save"><strong>SAVE</strong></button>

	    </form>
</div>
</center>
</body>
</html>
