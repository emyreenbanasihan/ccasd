
<?php
	include('mainnav.php');
	session_start();

	include_once 'msqli.php';

	# Validate the Sample ID provided.
	if (isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$sql = "SELECT * from temp where id = {$id}";
		$result = $conn->query($sql);		
		if (!$row = $result->fetch_assoc()) {
			# The ID provided does not exist.
			# Redirect back to sampno.php
			header("Location: sampno.php");
		}
	} else {
		# Meaning no Sample ID provided. Redirect to sampno.php
		header("Location: sampno.php");
	}

	if (isset($_POST['submit'])) {
		$sql = "UPDATE `temp` SET datee = '{$_POST['datee']}', name = '{$_POST['name']}', brgy = '{$_POST['brgy']}', area = '{$_POST['area']}', crop = '{$_POST['crop']}' WHERE id = $id";
		if ($conn->query($sql) === TRUE) {
			echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='fertreco.php?id={$id}'; </script>";
		} else {
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
		}
	}
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


<form class="form-basic"  method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="row">
		<div class="col-span-6">
			<div class="form-row">
				<label>
					<span>Sample No.</span>
					<input type="text"  value="<?php echo  $row['sample']; ?>" readonly />
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>Nitrogen</span>
					<input type="text"  value="<?php echo  $row['res_n']; ?>" readonly />
					<span> </span>
					<input type="text"  value="<?php echo  $row['res_n_val']; ?>" readonly />
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>Phosporus</span>
					<input type="text"  value="<?php echo  $row['res_p']; ?>" readonly />
					<span> </span>
					<input type="text"  value="<?php echo  $row['res_p_val']; ?>" readonly />
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>Potassium</span>
					<input type="text"  value="<?php echo  $row['res_k']; ?>" readonly />
					<span> </span>
					<input type="text"  value="<?php echo  $row['res_k_val']; ?>" readonly />
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>pH</span>
					<input type="text"  value="<?php echo  $row['res_ph']; ?>" readonly />
					<span> </span>
					<input type="text"  value="<?php echo  $row['resp_ph_val']; ?>" readonly />
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>Date</span>
					<input type="date" name="datee" id="date" required="required" placeholder="Please enter the date today"/><br /><br />
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Farmer's Name</span>
					<input type="text" name="name" id="name" required="required" placeholder="Please enter your full name" value=''/><br/><br />
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Baranggay</span>
					<select name="brgy">
						<option value="">Please select a barangay</option>
						<option value="Bagong Kalsada">Bagong Kalsada</option>
						<option value="Banlic" >Banlic</option>
						<option value="Barandal" >Barandal</option>
						<option value="1">Barangay 1 (Poblacion)</option>
						<option value="2">Barangay 2 (Poblacion)</option>
						<option value="3">Barangay 3 (Poblacion)</option>
						<option value="4">Barangay 4 (Poblacion)</option>
						<option value="5">Barangay 5 (Poblacion)</option>
						<option value="6">Barangay 6 (Poblacion)</option>
						<option value="7">Barangay 7 (Poblacion)</option>
						<option value="Batino">Batino</option>
						<option value="Bañadero">Bañadero</option>
						<option value="Bubuyan">Bubuyan</option>
						<option value="Bucal">Bucal</option>
						<option value="Bunggo">Bunggo</option>
						<option value="Burol">Burol</option>
						<option value="Camaligan">Camaligan</option>
						<option value="Canlubang">Canlubang</option>
						<option value="Halang">Halang</option>
						<option value="Hornalan">Hornalan</option>
						<option value="Kay-Anlog">Kay-Anlog</option>
						<option value="La Mesa">La Mesa</option>
						<option value="Laguerta">Laguerta</option>
						<option value="Lawa">Lawa</option>
						<option value="Lecheria">Lecheria</option>
						<option value="Lingga">Lingga</option>
						<option value="Looc">Looc</option>
						<option value="Mabato">Mabato</option>
						<option value="Majada In">Majada In</option>
						<option value="Majada Out">Majada In</option>
						<option value="Makiling">Makiling</option>
						<option value="Mapagong">Mapagong</option>
						<option value="Masili">Masili</option>
						<option value="Maunong">Maunong</option>
						<option value="Mayapa">Mayapa</option>
						<option value="Milagrosa">Milagrosa</option>
						<option value="Paciano Rizal">Paciano Rizal</option>
						<option value="Palingon">Palingon</option>
						<option value="Palo-Alto">Palo-Alto</option>
						<option value="Pansol">Pansol</option>
						<option value="Parian">Parian</option>
						<option value="Prinza">Prinza</option>
						<option value="Punta">Punta</option>
						<option value="Puting Lupa">Puting Lupa</option>
						<option value="Real">Real</option>
						<option value="Saimsim" >Saimsim</option>
						<option value="Sampiruhan">Sampiruhan</option>
						<option value="San Cristobal">San Cristobal</option>
						<option value="San Jose">San Jose</option>
						<option value="San Juan">San Juan</option>
						<option value="Sirang Lupa">Sirang Lupa</option>
						<option value="Sucol">Sucol</option>
						<option value="Turbina">Turbina</option>
						<option value="Ulango">Ulango</option>
						<option value="Uwisan">Uwisan</option>
					</select>
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>Plantation Area</span>
					<input type="number" name="area" id="area" required="required" placeholder="Please enter your plantation area" /><br/><br />
				</label>
			</div>

			<div class="form-row">
				<label>
					<span>Crop</span>
					<?php
						$sql = "SELECT crops from tblfert ORDER BY crops ASC";
						$result = $conn->query($sql);
						echo "<select name='crop'>";
						echo "<option>Please select a crop</option>";
						while($crops_row = $result->fetch_assoc()) {
							echo "<option value='{$crops_row['crops']}'>{$crops_row['crops']}</option>";
						}
						echo "<select/>";
					?>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>&nbsp;</span>
					<input name="submit" type="submit"  value="submit" />
				</label>
			</div>
		</div>
	</div>
</form>

<?php
include('footer.php');
?>
