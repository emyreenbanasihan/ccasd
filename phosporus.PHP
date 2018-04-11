
<?php
	session_start();

	include('mainnav.php');
	include_once 'server.php';
	include_once 'msqli.php';

	# Validate the Sample ID provided.
	if (isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql = "SELECT sample from temp where id = {$id}";
		$result = $conn->query($sql);		
		if (!$sample_row = $result->fetch_assoc()) {
			# The ID provided does not exist.
			# Redirect back to sampno.php
			header("Location: sampno.php");
		}
	} else {
		# Meaning no Sample ID provided. Redirect to sampno.php
		header("Location: sampno.php");
	}

	# Check the Phosporus form is submitted
	if (isset($_POST['next'])) {
		# Upload photo -- copied original code
		$name = $_FILES['photo']['name'];
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
		// Select file type
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Valid file extensions
		$extensions_arr = array("jpg","jpeg","png","gif");

		// Check extension
		if (in_array($imageFileType,$extensions_arr)) {
			// Convert to base64
			$image_base64 = base64_encode(file_get_contents($_FILES['photo']['tmp_name']) );
			$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

			// Insert record
			mysql_query("insert into images values(null,'".$name."','".$image."')");

			// Upload file
			move_uploaded_file($_FILES['photo']['tmp_name'],'upload/'.$name);
		}

		# Check if pixcolor exist in table phosporus, insert if not.
		$hex_val = substr($_POST["pixcolor"], 1);
		$level = 'low'; # Always low

		$sql = "SELECT * from tblphosphorus where hex_val = '{$hex_val}'";
		$result = $conn->query($sql);

		if (!$row = $result->fetch_assoc()) {
			# The hex_val value does not exist, create a new entry.
			$sql = "INSERT INTO tblphosphorus (hex_val, level) VALUES ('{$hex_val}', '{$level}')";
			$conn->query($sql);
		}

		# Update sample's res_n and res_n_val
		$sql = "UPDATE temp SET res_p = '{$level}', res_p_val = '{$hex_val}' WHERE id = {$id}";

		if ($conn->query($sql) === TRUE) {
			echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='potassium.php?id={$id}'; </script>";
		} else {
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
		}
	}
?>

<link rel="stylesheet" href="assets/processing/foundation.min.css">
<link rel="stylesheet" href="assets/processing/img.min.css">
<link rel="stylesheet" href="assets/css/form-basic.css">

<style type="text/css">
	#pixcolor {
		pointer-events: none;
	}
</style>

<script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>

<div class="container">
	<div class="media-container-row">
		<div class="title col-12 col-md-8">
			<h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>
				<?php echo "Phosporus {$sample_row['sample']}"; ?>
			</h2>
			<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>
		</div>
	</div>
</div>

	 <div class="main-content">

<!-- PHOTO -->

<center>
<!-- CONTAINER FOR PHOTO -->
<table>
	<tr>
		<td colspan="3">
			<canvas id="imageCanvas" width="300" height="300"></canvas>
		</td>
	</tr>
	<tr>
		<td>
			<canvas id="pixCanvas" width="100" height="100" style="background-color: #ddd;" ></canvas>
		</td>
		<td>
			<canvas id="barvaCanvas" width="100" height="100" style="background-color: #ddd;" hidden></canvas>
		</td>
	</tr>
</table>

	<div class="main-content">

<form class="form-basic" method="post" action="#" enctype="multipart/form-data">

	<table align="center">
		<tr>
			<td>
				<input type="file" name="photo" id="imageLoader" required="" />
				<a href="https://html-color-codes.info/colors-from-image/#" id="webbtn" ></a>
			</td>
		</tr>

		<tr>
			<td><input type="text" name="pixcolor" id="pixcolor" style="height:40px;" placeholder="Color Hex Value" required/></td>
		</tr>

		<tr>
			<td colspan="2"><input name="next" type="Submit"  id="next" value="Next"/></td>
		</tr>
	</table>
</form>

<script src="assets/processing/jquery.min.js.download"></script>
<script src="assets/processing/img.min.js.download"></script>
<script src="assets/processing/foundation.min.js.download"></script>
<script>
	$(document).foundation();
</script>

<?php
include('footer.php');
?>