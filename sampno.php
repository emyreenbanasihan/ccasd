<?php
	include('mainnav.php');
	session_start();
?>

<link rel="stylesheet" href="assets/css/form-basic.css">

<div class="container">
	<div class="media-container-row">
		<div class="title col-12 col-md-8">
			<h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Soil Test
			</h2>
			<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

		</div>
	</div>
</div>

<div class="main-content">
	<!-- You only need this form and the form-basic.css -->
	<?php
		$sample = isset($_POST['sample']) ? $_POST['sample']: "";
	?>

	<?php
		// $servername = "localhost";
		//    $username = "root";
		//    $password = "";
		//    $dbname = "db_ccasd";
		//
		//    // Create connection
		//    $conn = new mysqli($servername, $username, $password, $dbname);
		//    // Check connection
		//    if ($conn->connect_error) {
		//    die("Connection failed: " . $conn->connect_error);
		//    }
		//    $sql = "DELETE FROM temp WHERE id='1'";
		//
		//    if ($conn->query($sql) === TRUE) {
		//
		//    } else {
		//  echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
		//    }
		//
		//    $conn->close();
	?>




		<form class="form-basic"  method="post" >
			<div id="sampleNo" class="form-row">
				<label>
					<span>Sample No.</span>
					<input type="text" name="sampno" value='<?php echo  $sample; ?>' required>
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>&nbsp;</span>
					<input name="next" type="Submit" id="submit" value="next" />
				</label>
			</div>
		</form>


	<?php
		include_once 'server.php';

		if (isset($_POST["next"])) {
			//$id =$_POST["id"];
			$sampno = $_POST["sampno"];

			$sql = "INSERT INTO temp(sample) VALUES ('$sampno')";

			if(mysql_query($sql)) {
				$id = mysql_insert_id();
				$url = "nitrogen.php?id={$id}";
	?>
				<script type="text/javascript">
					window.location.href = '<?php echo $url; ?>';
				</script>
	<?php
			} else {
	?>
				<script type="text/javascript">
					alert('error occured while inserting your data');
				</script>
	<?php
			}
			
			// sql query execution function
		}
	?>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
	include('footer.php');
?>

<!-- <script type="text/javascript" src="../assets/js/action.js"> -->

<script>
	$(document).ready(function() {
		$(".btn1").click(function(){
			$(testHide).show();
		});
	});
</script>
