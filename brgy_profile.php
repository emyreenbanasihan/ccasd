
<?php
session_start();


$position = $_SESSION['login_user'];
if ($position == "admin") {
include('mainnav.php');

} elseif ($position == "employee") {
  include('emp_nav.php');
}
else {
$error = "Username or Password is invalid";
header("Location: login.php");
}
 ?>

<!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
        <!-- Custom Styles-->
<link href="assets/css/custom-styles.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/morris.css  ">
<script src="assets/js/jquery-1.9.0.min.js"></script>
<script src="assets/js/raphael-min.js"></script>
<script src="assets/js/morris.min.js"></script>

<br>
<br>

<?php

$brgy123 = (isset($_GET["brgy"]) && $_GET['brgy'] != "") ? $_GET['brgy'] : "";

//index.php
$connect = mysqli_connect("localhost", "root", "", "db_ccasd");

$q = "SELECT * FROM tblresults";//where brgy= $brgy and crop=$crop
$result = mysqli_query($connect, $q);
while($row = mysqli_fetch_array($result))
{
  $sample= $row['sample'];
  $res_n= $row['res_n'];
  $res_n_val= $row['res_n_val'];
  $res_p= $row['res_p'];
  $res_p_val= $row['res_p_val'];
  $res_k= $row['res_k'];
  $res_k_val= $row['res_k_val'];
  $res_ph= $row['res_ph'];
  $resp_ph_val= $row['resp_ph_val'];
  $datee = $row['datee'];
  $name = $row['name'];
  $brgy = $row['brgy'];
  $area = $row['area'];
  $crop = $row['crop'];
}

$query = "SELECT crop,COUNT(crop) AS try FROM tblresults WHERE brgy='$brgy123' group by crop order by crop";//where brgy= $brgy and crop=$crop
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ crop:'".$row["crop"]."',try:".$row["try"]." }, ";

}
$chart_data = substr($chart_data, 0, -2);


//chart1
$q = "SELECT name,datee,COUNT(name) AS cnt FROM tblresults WHERE brgy='$brgy123' group by name order by name";//where brgy= $brgy and crop=$crop
$result = mysqli_query($connect, $q);
$chart = '';


while($row = mysqli_fetch_array($result))
{
 $chart .= "{ name:'".$row["name"]."',datee:'".$row['datee']."', cnt:".$row["cnt"]." }, ";

}
$chart= substr($chart, 0, -2);

?>
 </head>
 <body>
  <br /><br />
  <div id="page-inner">
  	<div class="row">
      <div class="col-md-12">
      <h2 class="page-header">
          <?php
          echo $brgy123;
          ?>
          <small>
            <a href="farmers.php?farmer=<?php echo $brgy123?>" >Show Farmers</a>
           </small>
      </h2>
      </div>
      </div>
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<div class="panel panel-default">
  				<div class="panel-heading">Farmers</div>
  				<div class="panel-body">
  				<center><div id="graph" ></div></center>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<div class="panel panel-default">
  				<div class="panel-heading">Crops</div>
  				<div class="panel-body">
  				<center><div id="chart" ></div></center>
  				</div>
  			</div>
  		</div>
  	</div>
 </body>
</html>

<script>

Morris.Line({
  element: 'graph',
  data: [<?php echo $chart;?>],
  xkey:'datee',
  ykeys:['cnt'],
  labels:['Count'],

});
</script>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data;?>],
 xkey:'crop',
 ykeys:['try'],
 labels:['try'],
 hideHover:'auto',
});


</script>




<?php
include('footer.php');
 ?>
