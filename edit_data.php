

<?php
session_start();

include('mainnav.php');
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

    <style>
    .center {
    margin: auto;
    width: 30%;
      }
    </style>
	 <div class="main-content">
		 <?php

		 include_once 'server.php';

		 if(isset($_GET['edit_id']))
		 {
		 	$select="SELECT * FROM systemcred WHERE id=".$_GET['edit_id'];
		 	$results = mysql_query($select);

		 	while($rowval = mysql_fetch_array($results))
		 	 {

						$fname = $rowval['fname'];
						$mname= $rowval['mname'];
						$lname = $rowval['lname'];
						$username = $rowval['username'];
						$password = $rowval['password'];
						$position = $rowval['position'];
				 }
				 mysql_close($con);
}
		 ?>
<form class="form-basic" method="post" action="#">

<table align="center">
<tr>
	<td><input type="text" name="fname" placeholder="First Name" value='<?php echo  $fname; ?>'></td>
</tr>
<tr>
	<td> <input type="text" name="mname" placeholder="Middle Name" value='<?php echo  $mname; ?>'></td>
</tr>
<tr>
	<td> <input type="text" name="lname" placeholder="Last name" value='<?php echo  $lname; ?>'></td>
</tr>
<tr>
	<td><input type="text" name="username" placeholder="Username" value='<?php echo  $username; ?>'></td>
</tr>
<tr>
	<td><input type="password" name="password" placeholder="Password" value='<?php echo  $password; ?>'></td>
</tr>
<tr>
	<td>
		<select name="position">
		<option value="Choose Position">Choose Member Type</option>
		<option value="admin" <?php if ($position=='admin') { echo "SELECTED"; } ?>>Admin</option>
		<option value="employee" <?php if ($position=='employee') { echo "SELECTED"; } ?>>Employee</option>
		</select>
	</td>
</tr>
<tr>
	<td>
		<button type="submit" name="btn-save"><strong>SAVE</strong></button>
		<button type="submit" name="btn-cancel"><strong>CANCEL</strong></button>
	</td>
</tr>
    </table>
    </form>
<?php
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

	// sql query for update data into database
	$sql_query = "UPDATE systemcred SET fname='$fname',mname='$mname',lname='$lname',username='$username',password='$password',password='$password', position='$position' WHERE id=".$_GET['edit_id'];
	// sql query for update data into database

	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='acc.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}



 ?>
</div>
</center>
</body>
</html>
