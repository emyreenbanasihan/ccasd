<?php

	session_start();
	include('mainnav.php');
	include_once 'msqli.php';

	if (isset($_GET['id'])) {
		$sql = "SELECT * FROM temp INNER JOIN tblfert ON temp.crop = tblfert.crops WHERE temp.id=".$_GET['id'];
		$result = $conn->query($sql);

		while($rowval = $result->fetch_assoc()) {
			$sample= $rowval['sample'];
			$res_n= $rowval['res_n'];
			$res_n_val= $rowval['res_n_val'];
			$res_p= $rowval['res_p'];
			$res_p_val= $rowval['res_p_val'];
			$res_k= $rowval['res_k'];
			$res_k_val= $rowval['res_k_val'];
			$res_ph= $rowval['res_ph'];
			$resp_ph_val= $rowval['resp_ph_val'];
			$datee = $rowval['datee'];
			$name = $rowval['name'];
			$brgy = $rowval['brgy'];
			$area = $rowval['area'];
			$crop = $rowval['crop'];

			$crops = $rowval['crops'];
			$n_low = $rowval['n_low'];
			$n_medium = $rowval['n_medium'];
			$n_high = $rowval['n_high'];
			$p_low = $rowval['p_low'];
			$p_medium= $rowval['p_medium'];
			$p_high = $rowval['p_high'];
			$k_deficient = $rowval['k_deficient'];
		}

	} else {
		header("Location: sampno.php");
	}
 ?>
 <div id="printableArea">
<div class="container">
<div class="media-container-row">
<div class="title col-12 col-md-8">
<!-- <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>City of Calamba
</h2>
<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
	Agricultural Services Department</h3> -->
		<br>
		<br>
		<br>
		<br>
<center><img src="assets\images\header.png"></center>

</div>
</div>


<body>
	 <div class="main-content">
	 <center>

		 <div class="container container-table">

			 <div class="table-wrapper" >
				 <br>
				 <br>
				 <br>
		 <div class="container scroll">
					<table  id="resultTable" border="0" class="table isSearch" align="center">
				<tr class="table-heads">
					 <th class="head-item mbr-fonts-style display-7" >Name</th>
					 <td class="head-item mbr-fonts-style display-7"><?php echo  $name; ?></td>
					 <th class="head-item mbr-fonts-style display-7" >Date</th>
					 <td class="head-item mbr-fonts-style display-7"><?php echo  $datee; ?></td>
				 </tr>
				 <tr class="table-heads ">
						<th class="head-item mbr-fonts-style display-7">Location</th>
						<td class="head-item mbr-fonts-style display-7"><?php echo  $brgy; ?></td>
						<th class="head-item mbr-fonts-style display-7" >Crop</th>
						<td class="head-item mbr-fonts-style display-7"><?php echo  $crop; ?></td>

					</tr>
					<tr class="table-heads ">
						<th class="head-item mbr-fonts-style display-7"></th>
						<th class="head-item mbr-fonts-style display-7"></th>
						<th class="head-item mbr-fonts-style display-7"></th>
						<th class="head-item mbr-fonts-style display-7"></th>
											 </tr>

				</table>
				<br>
				<table  id="resultTable" border="0" class="table isSearch" align="center">

					<tr class="table-heads ">
						 <th class="head-item mbr-fonts-style display-7" colspan="5"><center>Results of Soil Analysis</center></th>
					 </tr>

					 <tr class="table-heads ">
							<th class="head-item mbr-fonts-style display-7">SAMPLE NO.</th>
							<th class="head-item mbr-fonts-style display-7">pH</th>
							<th class="head-item mbr-fonts-style display-7">N</th>
							<th class="head-item mbr-fonts-style display-7">P</th>
							<th class="head-item mbr-fonts-style display-7">K</th>
						</tr>
						<tr class="table-heads ">
							 <td class="head-item mbr-fonts-style display-7"><?php echo  $sample; ?></td>
							 <td class="head-item mbr-fonts-style display-7">
								 <?php
								 echo $res_ph;
								 echo '<br>';
								 if($res_ph=="7.6"){
									 echo  "";
								 }elseif($res_ph=="7.2"){
									 echo  "Neutral";
								 }elseif($res_ph=="6.8"){
									 echo  "Neutral";
								 }elseif($res_ph=="6.4"){
									 echo  "Slightly Acidic";
								 }elseif($res_ph=="6.6"){
									 echo  "Slightly Acidic";
								 }elseif($res_ph=="6.0"){
									 echo  "Medium Acidic";
								 }elseif($res_ph=="5.8"){
									 echo  "Medium Acidic";
								 }elseif($res_ph=="5.4"){
									 echo  "Strongly Acidic";
								 }elseif($res_ph=="5.2"){
									 echo  "Strongly Acidic";
								 }elseif($res_ph=="5.0"){
									 echo  "Very Strongly Acidic";
								 }elseif($res_ph=="4.8"){
									 echo  "Very Strongly Acidic";
								 }elseif($res_ph=="4.4"){
									 echo  "Extremely acidic";
								 }elseif($res_ph=="4.0"){
									 echo  "Extremely acidic";
								 }
								 ?>
								</td>
							 <td class="head-item mbr-fonts-style display-7"><?php echo  $res_n; ?></td>
							 <td class="head-item mbr-fonts-style display-7"><?php echo  $res_p; ?></td>
							 <td class="head-item mbr-fonts-style display-7"><?php echo  $res_k; ?></td>
						 </tr>
						 <tr class="table-heads ">
								<th class="head-item mbr-fonts-style display-7" colspan="2">Nutrient Requirement (kg/Ha.)</th>
								<th class="head-item mbr-fonts-style display-7">N</th>
								<th class="head-item mbr-fonts-style display-7">P</th>
								<th class="head-item mbr-fonts-style display-7">K</th>
							</tr>
							<tr class="table-heads ">
								 <td class="head-item mbr-fonts-style display-7" colspan="2"><center><?php echo  $crops; ?></center></td>

								 <td class="head-item mbr-fonts-style display-7">
									 <?php
									 if($res_n=="Low"){
										 echo  $n_low;
									 }elseif($res_n=="Medium"){
										 echo  $n_medium;
									 }elseif($res_n=="High"){
										 echo  $n_high;
									 }
										?>
								 </td>
								 <td class="head-item mbr-fonts-style display-7">
								 <?php
								 if($res_p=="Low"){
									 echo  $p_low;
								 }elseif($res_p=="Medium"){
									 echo  $p_medium;
								 }elseif($res_p=="High"){
									 echo  $p_high;
								 }
									?>
									</td>
								 <td class="head-item mbr-fonts-style display-7">
								 <?php
								 if($res_k=="Deficient"){
									 echo  $k_deficient;
								 }elseif($res_k=="Sufficient"){
									 echo  "No need to apply <br>Potassium Fertilizer";
								 }
									?>
									</td>
						 </tr>
						 <tr class="table-heads ">
								<th class="head-item mbr-fonts-style display-7" colspan="5"><center>Fertilizer Recommendation(bag/ha.)</center></th>
						</tr>
						<tr class="table-heads ">
							 <td class="head-item mbr-fonts-style display-7">
								<b> <?php echo $crop ?></b>
								<hr>
								 <br>
								 <br>

									<!--
									Basal Application<br>
								 //10-15 bags Organic Fertilizer<br>
									<?php
									// if($res_n=="Low" && $res_p=="Low" && $res_k=="Deficient" ){
									//   echo  '20-35 bags Organic Fertilizer<br>';
									// }elseif($res_n=="Low" && $res_p=="High" && $res_k=="Deficient" ){
									//   echo  '20-35 bags Organic Fertilizer<br>';
									// }elseif($res_n=="Low" && $res_p=="High" && $res_k=="Sufficient" ){
									//   echo  '10-15 bags Organic Fertilizer<br>';
									// }elseif($res_n=="Medium" && $res_p=="High" && $res_k=="Sufficient" ){
									//   echo  '10-15 bags Organic Fertilizer<br>';
									// }
									?>

									////////////<br>
									3 bags Complete(14-14-14)<br>
									1st Sidedress(30 araw pagkabasal)<br>
									1 bag Urea<br>
									2nd Sidedress(25 araw pagka 1st sidedress)<br>
									1 bag Urea(46-0-0)<br>
									1 bag Muriate of potash(0-0-60)<br> -->
							 </td>
					 </tr>
					 <tr class="table-heads ">
							<th class="head-item mbr-fonts-style display-7" colspan="5"><center>Lime Requirement(Bag/ha)</center></th>
						</tr>
						<tr class="table-heads ">
							<td class="head-item mbr-fonts-style display-7" colspan="5">
								<?php
								$slightly="5 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
								$medium ="10-15 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
								$storngly="15-20 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
								$Vstorngly="20-25 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
								$extremely="25-30 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";


								if($res_ph=="7.6"){
									echo  "";
								}elseif($res_ph=="7.2"){
									echo  "Neutral";
								}elseif($res_ph=="6.8"){
									echo  "Neutral";
								}elseif($res_ph=="6.4"){
									echo  $slightly;
								}elseif($res_ph=="6.6"){
									echo  $slightly;
								}elseif($res_ph=="6.0"){
									echo  $medium;
								}elseif($res_ph=="5.8"){
									echo  $medium;
								}elseif($res_ph=="5.4"){
									echo  $strongly;
								}elseif($res_ph=="5.2"){
									echo  $strongly;
								}elseif($res_ph=="5.0"){
									echo  $Vstrongly;
								}elseif($res_ph=="4.8"){
									echo  $Vstrongly;
								}elseif($res_ph=="4.4"){
									echo  $extremely;
								}elseif($res_ph=="4.0"){
									echo  $extremely;
								}
								?>
							</td>
					</tr>
					<tr class="table-heads ">
						 <th class="head-item mbr-fonts-style display-7" colspan="5">

							Note:<br>
							L(Low)
							M(Medium)
							H(High)
							-for N and P<br>
							D(Deficient)
							S(Sufficient)
							-for K
						 </th>
					 </tr>
</table>

</center>
</div>
</body>


			</div>
		</div>
</div>
<div class="alignright">
<input type="button" onclick="printDiv('printableArea')" value="Print"  class="btn btn-info btn-lg"/>
<div>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "error4mobile.php";
}
//-->
</script>

<script>
function printDiv(divName) {
		 var printContents = document.getElementById(divName).innerHTML;
		 var originalContents = document.body.innerHTML;

		 document.body.innerHTML = printContents;

		 window.print();

		 document.body.innerHTML = originalContents;
}
</script>
