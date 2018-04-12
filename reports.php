<?php
session_start ();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ccasd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$position = $_SESSION ['login_user'];
if ($position == "admin") {
	include ('mainnav.php');
} elseif ($position == "employee") {
	include ('emp_nav.php');
} else {
	$error = "Username or Password is invalid";
	header ( "Location: index.php" );
}


?>


<html>
<head>

	<script type="text/javascript" src="assets/script/jquery-1.7.1.min.js"></script>
<style>
#main_div {
    /* margin: auto;
    width: 80%; */
    padding-top: 110px;
}
#main_ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
}

.li-class {
	float: left;
}

.li-class a, .dropbtn {
	display: inline-block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}

.li-class a:hover, .sub-menu:hover .dropbtn {
	background-color: #7bba03;
}

.li-class.sub-menu {
	display: inline-block;
}

.sub-menu-cont {
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
	z-index: 1;
}

.sub-menu-cont a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

.sub-menu-cont a:hover {
	background-color: #7bba03;
}

.sub-menu:hover .sub-menu-cont {
	display: block;
}
</style>

<script type="text/javascript">

function navs(r) {
    var summary = document.getElementById("summary");
    var hvc = document.getElementById("hvc");
    var corn = document.getElementById("corn");
    var rice = document.getElementById("rice");
    var cd = document.getElementById("cd");
    
	switch (r) {
	case 1:
		summary.style.display = "block";
		cd.style.display = "none";
		hvc.style.display = "none";
		corn.style.display = "none";
		rice.style.display = "none";
		break;
	case 2:
		break;
	case 3:
		hvc.style.display = "block";
		summary.style.display = "none";
		cd.style.display = "none";
		corn.style.display = "none";
		rice.style.display = "none";
		break;
	case 4:
		corn.style.display = "block";
		summary.style.display = "none";
		hvc.style.display = "none";
		cd.style.display = "none";
		rice.style.display = "none";
		break;
	case 5:
		rice.style.display = "block";
		summary.style.display = "none";
		hvc.style.display = "none";
		corn.style.display = "none";
		cd.style.display = "none";
		break;
	case 6:
		cd.style.display = "block";
		summary.style.display = "none";
		hvc.style.display = "none";
		corn.style.display = "none";
		rice.style.display = "none";
		break;
	}

}

</script>
</head>
<body>

<div id="main_div" class="col-lg-12 col-md-12 col-sm-12">
	
	<div id="main_nav" class="col-lg-12 col-md-12 col-sm-12">
		<ul id="main_ul">
			<li class="li-class"><a href="javascript:navs(1);">Summary</a></li>
			<li class="sub-menu li-class"><a href="javascript:navs(2);" class="dropbtn">Breakdown</a>
				<div class="sub-menu-cont">
					<a href="javascript:navs(3);">High Value Commercial Crops</a>
					<a href="javascript:navs(4);">Corn</a>
					<a href="javascript:navs(5);">Rice</a>
				</div>
			</li>
			<li class="li-class"><a href="javascript:navs(6);">Crop Development</a></li>
		</ul>
	</div>
	
	<div id="report_container" class="col-lg-12 col-md-12 col-sm-12">
		<div id="summary" class="col-lg-12 col-md-12 col-sm-12">
<div id="printableArea">
	<div class="container">
		<div class="media-container-row">
			<div class="title col-12 col-md-8">
				<br> <br>
				<center>
					<img src="assets\images\header.png">
				</center>
			</div>
		</div>

		<table class="table isSearch" cellspacing="0">
			<thead>
				<tr class="table-heads ">
					<th class="head-item mbr-fonts-style display-7">Crops</th>
					<th class="head-item mbr-fonts-style display-7">No. of Baranggay</th>
					<th class="head-item mbr-fonts-style display-7">Area(Has.)</th>
					<th class="head-item mbr-fonts-style display-7">No. of Farmers</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td align="center">Rice</td>
					<td colspan="3"></td>
				</tr>
				<tr>
              <?php
				$con = mysqli_connect ( "localhost", "root", "", "db_ccasd" );
				// Check connection
				if (mysqli_connect_errno ()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error ();
				}
				$a = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Rice' AND (brgy ='Lingga' OR brgy ='San Jose' OR brgy ='Lecheria' OR brgy ='Halang' OR brgy ='Banlic' OR brgy ='Bucal' OR brgy ='Pansol' OR brgy ='Real' OR brgy ='Bañadero' OR brgy ='Parian' OR brgy ='San Cristobal' OR brgy ='Looc' OR brgy ='Mapagong' OR brgy ='Uwisan')" );
				while ( $row = mysqli_fetch_array ( $a ) ) {
					echo "<td class='head-item mbr-fonts-style display-7'> Irrigated Low Land Rice </td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noB'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
				}
				?>
              </tr>
				<tr>
                <?php
				
				$b = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Rice' AND (brgy='Banlic' OR brgy='Kay-anlog' OR brgy='Majada' OR brgy='Makiling' OR brgy='Punta'  OR brgy='Sancristobal' OR brgy='Ulanggo')" );
				while ( $row = mysqli_fetch_array ( $b ) ) {
					echo "<td class='head-item mbr-fonts-style display-7'> Upland Rice </td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noB'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
				}
				?>
              </tr>
				<tr>

              <?php
				$c = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Rice' AND (brgy='Banlic' OR brgy='Kay-anlog' OR brgy='Majada' OR brgy='Makiling' OR brgy='Punta'  OR brgy='Sancristobal' OR brgy='Ulanggo' OR   brgy ='Lingga' OR brgy ='San Jose' OR brgy ='Lecheria' OR brgy ='Halang' OR brgy ='Banlic' OR brgy ='Bucal' OR brgy ='Pansol' OR brgy ='Real' OR brgy ='Bañadero' OR brgy ='Parian' OR brgy ='San Cristobal' OR brgy ='Looc' OR brgy ='Mapagong' OR brgy ='Uwisan')" );
				while ( $row = mysqli_fetch_array ( $c ) ) {
					echo "<td class='head-item mbr-fonts-style display-7'> Subtotal: </td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noB'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
				}
				?>
              </tr>

				<tr>
					<td colspan="4"></td>
				</tr>

				<tr>
              <?php
				$d = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Corn'" );
				while ( $row = mysqli_fetch_array ( $d ) ) {
					echo "<td class='head-item mbr-fonts-style display-7'> Corn </td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noB'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
				}
				?>
              </tr>
				<tr>

              <?php
				$e = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop != 'Corn' AND crop != 'Rice' " );
				while ( $row = mysqli_fetch_array ( $e ) ) {
					echo "<td class='head-item mbr-fonts-style display-7'> High Value Commercial Crops </td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noB'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
				}
				?>
              </tr>
				<tr>
					<td colspan="4"></td>
				</tr>

				<tr>
              <?php
				$f = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE brgy='Banlic' OR brgy='Kay-anlog' OR brgy='Majada' OR brgy='Makiling' OR brgy='Punta'  OR brgy='Sancristobal' OR brgy='Ulanggo' OR   brgy ='Lingga' OR brgy ='San Jose' OR brgy ='Lecheria' OR brgy ='Halang' OR brgy ='Banlic' OR brgy ='Bucal' OR brgy ='Pansol' OR brgy ='Real' OR brgy ='Bañadero' OR brgy ='Parian' OR brgy ='San Cristobal' OR brgy ='Looc' OR brgy ='Mapagong' OR brgy ='Uwisan'" );
				while ( $row = mysqli_fetch_array ( $f ) ) {
					echo "<td class='head-item mbr-fonts-style display-7'>Total </td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noB'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
				}
				?>
              </tr>
			</tbody>
		</table>

		<br>
		<br>
		<br>
		<table class="table isSearch" cellspacing="0">
			<thead>
				<tr class="table-heads ">
					<th class="head-item mbr-fonts-style display-7" colspan="2"><b>Other
							Crops</b></th>
			
			</thead>
			<tbody>
				<tr>
                  <?php
					$g = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults WHERE crop = 'Ube' AND crop = 'Coffee' " );
					
					while ( $row = mysqli_fetch_array ( $g ) ) {
						echo "<td class='head-item mbr-fonts-style display-7'> Ube and Coffee </td>";
						echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					}
					?>
                </tr>
				<tr>
                  <?php
					$h = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults WHERE crop = 'Sugarcane' " );
					while ( $row = mysqli_fetch_array ( $h ) ) {
						echo "<td class='head-item mbr-fonts-style display-7'> Sugarcane </td>";
						echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
					}
					?>
                </tr>
				<tr>
                  <?php
																		$i = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults WHERE crop = 'Coconut' AND brgy !='Canlubang' " );
																		while ( $row = mysqli_fetch_array ( $i ) ) {
																			echo "<td class='head-item mbr-fonts-style display-7'> Coconut(outside canlubang) </td>";
																			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
																		}
																		?>
                  </tr>
				<tr>
                  <?php
																		$j = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults WHERE crop = 'Rambutan' " );
																		while ( $row = mysqli_fetch_array ( $j ) ) {
																			echo "<td class='head-item mbr-fonts-style display-7'>Rambutan </td>";
																			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
																		}
																		?>
                </tr>
				<tr>
                  <?php
																		$k = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults WHERE crop = 'Mango'  " );
																		while ( $row = mysqli_fetch_array ( $k ) ) {
																			echo "<td class='head-item mbr-fonts-style display-7'> Mango</td>";
																			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
																		}
																		?>
                </tr>
				<tr>
					<td colspan="2"></td>
				</tr>
				<tr>
                  <?php
																		$l = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults WHERE crop = 'Ube' OR crop = 'Coffee' OR crop = 'Sugarcane' OR crop = 'Coconut' AND brgy !='Canlubang' OR crop = 'Rambutan' OR crop = 'Mango'" );
																		while ( $row = mysqli_fetch_array ( $l ) ) {
																			echo "<td class='head-item mbr-fonts-style display-7'>Total</td>";
																			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
																		}
																		?>
                  </tr>
			</tbody>
		</table>

		<br> <br>
		<table class="table isSearch">
			<tbody>
				<tr>
                  <?php
																		$m = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults " );
																		while ( $row = mysqli_fetch_array ( $m ) ) {
																			echo "<td class='head-item mbr-fonts-style display-7'>Land Area of Calamba:</td>";
																			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
																		}
																		?>
                </tr>
				<tr>
                  <?php
																		$m = mysqli_query ( $con, "SELECT SUM(area) as area from tblresults " );
																		while ( $row = mysqli_fetch_array ( $m ) ) {
																			echo "<td class='head-item mbr-fonts-style display-7'>Agricultural area:</td>";
																			echo "<td class='head-item mbr-fonts-style display-7'>  18%</td>";
																		}
																		?>
                </tr>
			</tbody>
		</table>
	</div>
</div>

<br>
<br>
<hr>
<div class="alignright">
	<input id="hideprint" type="button" onclick="printDiv('printableArea')" value="Print"
		class="btn btn-info btn-lg" />
</div>


<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;


	var hideprint = document.getElementById("hideprint");
	hideprint.style.display = "none";
		
		
     window.print();

     document.body.innerHTML = originalContents;
}
</script>

		</div> <!-- summary -->
		
		
		<div id="hvc" class="col-lg-12 col-md-12 col-sm-12" style="display: none;">
		
		<div class="container" id="printableArea">
	<table class="table isSearch" cellspacing="0" align="center">
		<thead>
			<tr class="table-heads ">
				<th colspan="4"><center>
						<img src="assets\images\header.png">
					</center></th>
			</tr>
			<tr class="table-heads ">
				<th colspan="4"><center>High Value Commercial Crops</center></th>
			</tr>
		</thead>
		<tbody>
			<tr class="table-heads ">
				<th class="head-item mbr-fonts-style display-7"></th>
				<th class="head-item mbr-fonts-style display-7">BARANGAY</th>
				<th class="head-item mbr-fonts-style display-7">Area</th>
				<th class="head-item mbr-fonts-style display-7">No of Farmers</th>
			</tr>
			<tr>
<?php
include_once 'server.php';

$a = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bagong Kalsada' AND crop!='Rice' AND crop!='Corn'" );
while ( $row = mysqli_fetch_array ( $a ) ) {
	
	echo "<td class='head-item mbr-fonts-style display-7'>1</td>";
	echo "<td class='head-item mbr-fonts-style display-7'> Bagong Kalsada </td>";
	echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
	echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
}
?>
 </tr>
			<tr>
   <?php
			$b = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Banlic' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $b ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>2</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Banlic </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$c = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Barandal' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $c ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>3</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Barandal </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$d = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Batino' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $d ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>4</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Batino </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$e = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bucal' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $e ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>5</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Bucal </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$f = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bubuyan' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $f ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>6</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Bubuyan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
 <?php
	$g = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bungo' AND crop!='Rice' AND crop!='Corn'" );
	while ( $row = mysqli_fetch_array ( $g ) ) {
		
		echo "<td class='head-item mbr-fonts-style display-7'>7</td>";
		echo "<td class='head-item mbr-fonts-style display-7'> Bungo </td>";
		echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
		echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
	}
	?>
 </tr>
			<tr style='height: 10.3pt'>
   <?php
			$h = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Burol' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $h ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>8</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Burol </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$i = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Camaligan' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $i ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>9</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Camaligan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$j = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Hornalan' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $j ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>10</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Hornalan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$k = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Kay-anlog' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $k ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>11</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Kay-anlog </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$l = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lamesa' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $l ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>12</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Lamesa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$m = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Laguerta' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $m ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>13</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Laguerta </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$n = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lawa' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $n ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>14</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Lawa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$s = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Looc' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $s ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>15</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Looc </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$t = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mabato' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $t ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>16</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Mabato </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$u = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada In' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $u ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>17</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Majada In </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$v = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada Out' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $v ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>18</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Majada Out </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$w = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Makiling' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $w ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>19</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Makiling </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$x = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mapagong' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $x ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>20</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Mapagong </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$y = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Maunong' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $y ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>21</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Maunong </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$z = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Milagrosa' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $z ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>22</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Milagrosa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$aa = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Palo-Alto' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $aa ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>23</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Palo-Alto </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$cc = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Parian' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $cc ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>24</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Parian </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$dd = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Prinza' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $dd ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>25</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Prinza </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$ee = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Punta' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $ee ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>26</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Punta </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$ff = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Saimsim' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $ff ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>27</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Saimsim </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 18.4pt'>
   <?php
			$gg = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Sampiruhan' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $gg ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>28</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Sampiruhan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$ii = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Siranglupa' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $ii ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>29</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Siranglupa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$jj = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Turbina' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $jj ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>30</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Turbina </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$kk = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Ulango' AND crop!='Rice' AND crop!='Corn'" );
			while ( $row = mysqli_fetch_array ( $kk ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>31</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Ulango </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>

				<th class="head-item mbr-fonts-style display-7" colspan="2"><center>Total</center></th>

			</tr>
	
	</table>
</div>
<div class="alignright">
	<input type="button" onclick="printDiv('printableArea')" value="Print"
		class="btn btn-info btn-lg" />
</div>
		
		
		</div> <!-- hvc -->
		
		
		<div id="corn" class="col-lg-12 col-md-12 col-sm-12" style="display: none;">
		
		<div class="container" id="b">
	<table class="table isSearch" cellspacing="0" align="center">
		<thead>
			<tr class="table-heads ">
				<th colspan="4"><center>
						<img src="assets\images\header.png">
					</center></th>
			</tr>
			<tr class="table-heads ">
				<th colspan="4"><center>Corn</center></th>
			</tr>
		</thead>
		<tbody>
			<tr class="table-heads ">
				<th class="head-item mbr-fonts-style display-7"></th>
				<th class="head-item mbr-fonts-style display-7">BARANGAY</th>
				<th class="head-item mbr-fonts-style display-7">Area</th>
				<th class="head-item mbr-fonts-style display-7">No of Farmers</th>
			</tr>
			<tr>
<?php
include_once 'server.php';

$c = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bañadero' AND crop ='Corn'" );
while ( $row = mysqli_fetch_array ( $c ) ) {
	
	echo "<td class='head-item mbr-fonts-style display-7'>1</td>";
	echo "<td class='head-item mbr-fonts-style display-7'> Bañadero </td>";
	echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
	echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
}
?>
 </tr>
			<tr>
   <?php
			$d = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Barandal' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $d ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>2</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Barandal </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$e = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Batino' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $e ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>3</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Batino </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$g = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bubuyan' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $g ) ) {
				
				echo "<td class='head-item mbr-fonBungots-style display-7'>4</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Bubuyan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$h = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bungo' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $h ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>5</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Bungo </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$i = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Burol' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $i ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>6</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Burol </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 19.25pt'>
   <?php
			$j = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Camaligan' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $j ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>7</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Camaligan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$l = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Hornalan' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $l ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>8</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Hornalan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 13.4pt'>
   <?php
			$m = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Kay-anlog' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $m ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>9</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Kay-anlog </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$n = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lamesa' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $n ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>10</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Lamesa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$o = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Laguerta' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $o ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>11</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Laguerta </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$p = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lawa'  AND crop ='Corn'" );
			while ( $row = mysqli_fetch_array ( $p ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>12</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Lawa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$s = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Looc' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $s ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>13</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Looc </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$t = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mabato' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $t ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>14</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Mabato </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 19.7pt'>
   <?php
			$u = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada In' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $u ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>15</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Majada In </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$v = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada Out' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $v ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>16</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Majada Out </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 13.85pt'>
   <?php
			$x = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mapagong' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $x ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>17</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Mapagong </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$y = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Maunong' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $y ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>18</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Maunong </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 17.9pt'>
   <?php
			$z = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Milagrosa' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $z ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>19</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Milagrosa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$aa = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Palo-Alto' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $aa ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>20</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Palo-Alto </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$dd = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Prinza' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $dd ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>21</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Prinza </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$ee = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Punta' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $ee ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>22</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Punta </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$ff = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Saimsim' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $ff ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>23</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Saimsim </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 9.35pt'>
   <?php
			$gg = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Sampiruhan' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $gg ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>24</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Sampiruhan </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 12.5pt'>
   <?php
			$hh = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'San Cristobal' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $hh ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>25</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> San Cristobal </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr style='height: 7.55pt'>
   <?php
			$ii = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Siranglupa' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $ii ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>26</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Siranglupa </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$jj = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Turbina' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $jj ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>27</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Turbina </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$kk = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Ulango' AND crop='Corn'" );
			while ( $row = mysqli_fetch_array ( $kk ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>28</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Ulango </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>

			<tr>
				<th class="head-item mbr-fonts-style display-7" colspan="2"><center>Total</center></th>
			</tr>
	
	</table>
</div>
<div class="alignright">
	<input type="button" onclick="printDiv('b')" value="Print"
		class="btn btn-info btn-lg" />
</div>
		
		
		</div> <!-- corn -->
		
		
		<div id="rice" class="col-lg-12 col-md-12 col-sm-12" style="display: none;">
		
		<div class="container" id="c">
	<table class="table isSearch" cellspacing="0" align="center">
		<thead>
			<tr class="table-heads ">
				<th colspan="4"><center>
						<img src="assets\images\header.png">
					</center></th>
			</tr>
			<tr class="table-heads ">
				<th colspan="4"><center>Irrigated Lowland Area</center></th>
			</tr>
		</thead>
		<tbody>
			<tr class="table-heads ">
				<th class="head-item mbr-fonts-style display-7"></th>
				<th class="head-item mbr-fonts-style display-7">BARANGAY</th>
				<th class="head-item mbr-fonts-style display-7">Area</th>
				<th class="head-item mbr-fonts-style display-7">No of Farmers</th>
			</tr>
			<tr>
  <?php
		include_once 'server.php';
		
		$a = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bagong Kalsada' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $a ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>1</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Bagong Kalsada </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$k = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Halang' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $k ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>2</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Halang </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$c = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bañadero' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $c ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>3</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Bañadero </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$x = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mapagong' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $x ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>4</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Mapagong </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$hh = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'San Cristobal' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $hh ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>5</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> San Cristobal </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$cc = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Parian' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $cc ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>6</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Parian </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$b = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Banlic' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $b ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>7</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Banlic </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$aq = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'San Jose' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $aq ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>8</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> San Jose </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$ll = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Uwisan' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $ll ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>9</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Uwisan </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>
			<tr>
  <?php
		$q = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lingga' AND crop='Rice'" );
		while ( $row = mysqli_fetch_array ( $q ) ) {
			
			echo "<td class='head-item mbr-fonts-style display-7'>10</td>";
			echo "<td class='head-item mbr-fonts-style display-7'> Lingga </td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
			echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
		}
		?>
</tr>

			<tr>
   <?php
			$s = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Looc' AND crop='Rice'" );
			while ( $row = mysqli_fetch_array ( $s ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>11</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Looc </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$sa = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Real' AND crop='Rice'" );
			while ( $row = mysqli_fetch_array ( $s ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>12</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Real</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$f = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bucal' AND crop='Rice'" );
			while ( $row = mysqli_fetch_array ( $f ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>13</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Bucal </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$r = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lecheria' AND crop='Rice'" );
			while ( $row = mysqli_fetch_array ( $r ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>14</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Lecheria </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
			<tr>
   <?php
			$bb = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Pansol' AND crop='Rice'" );
			while ( $row = mysqli_fetch_array ( $bb ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>15</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Pansol </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>

			
			
			<tr>
				<th class="head-item mbr-fonts-style display-7" colspan="2"><center>Subtotal</center></th>
			</tr>


			<tr class="table-heads ">
				<th colspan="4"><center>Upland Rice</center></th>
			</tr>
		
		
		</thead>

		<tr>
<?php
include_once 'server.php';

$w = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Makiling' AND crop='Rice' " );
while ( $row = mysqli_fetch_array ( $w ) ) {
	
	echo "<td class='head-item mbr-fonts-style display-7'>1</td>";
	echo "<td class='head-item mbr-fonts-style display-7'> Makiling </td>";
	echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
	echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
}
?>
</tr>



		<tr style='height: 7.25pt'>
   <?php
			$m = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Kay-anlog' AND crop='Rice' " );
			while ( $row = mysqli_fetch_array ( $m ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>2</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Kay-anlog </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
		<tr style='height: 7.25pt'>
   <?php
			$kk = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Ulango' AND crop='Rice' " );
			while ( $row = mysqli_fetch_array ( $kk ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>3</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Ulango </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
		<tr style='height: 7.25pt'>
   <?php
			$u = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada In' AND crop='Rice' " );
			while ( $row = mysqli_fetch_array ( $u ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>4</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Majada In </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
		<tr>
   <?php
			$v = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada Out' AND crop='Rice' " );
			while ( $row = mysqli_fetch_array ( $v ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>5</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Majada Out </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
 </tr>
		<tr style='height: 7.25pt'>
   <?php
			$ee = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Punta' AND crop='Rice' " );
			while ( $row = mysqli_fetch_array ( $ee ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>6</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> Punta </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>

 </tr>
		<tr style='height: 7.25pt'>
   <?php
			$hh = mysqli_query ( $con, "SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'San Cristobal' AND crop='Rice' " );
			while ( $row = mysqli_fetch_array ( $hh ) ) {
				
				echo "<td class='head-item mbr-fonts-style display-7'>7</td>";
				echo "<td class='head-item mbr-fonts-style display-7'> San Cristobal </td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['area'] . "</td>";
				echo "<td class='head-item mbr-fonts-style display-7'>" . $row ['noF'] . "</td>";
			}
			?>
  </td>
		</tr>
		<tr>
			<th class="head-item mbr-fonts-style display-7" colspan="2"><center>Subtotal</center></th>
		</tr>
		<tr>
			<th class="head-item mbr-fonts-style display-7" colspan="2"><center>Total</center></th>
		</tr>
	</table>
</div>
<div class="alignright">
	<input type="button" onclick="printDiv('c')" value="Print"
		class="btn btn-info btn-lg" />
</div>
		
		
		</div> <!-- rice -->
		
		
		<div id="cd" class="col-lg-12 col-md-12 col-sm-12" style="display: none;">
			<div id="header-cd" class="col-lg-12 col-md-12 col-sm-12">
				<center> <img src="assets\images\header.png"> </center>
				<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
					APPROVED BUDGET FOR THE CONTRACT<br> <u>SUPPLY ANDDELIVERY OF
						FERTILIZER</u><br> Project Name and Location
				</h3>
			</div>
			
			<div class="table-wrapper" class="col-lg-12 col-md-12 col-sm-12">
				<table id="resultTable" border="1" class="table isSearch" align="center" width="500">
					<tr class="table-heads">
						<th class="head-item mbr-fonts-style display-7" rowspan="2">Items</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">DESCRIPTION</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">QTY</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">UNIT</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">CURRENT
							MARKET PRICE</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">VAT,OTHER
							TAXES AND/OR DUTIES APPLICAPBLE</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">FREIGHT
							& INSURANCE</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">OTHER
							INDIRECT COST</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="1"
							colspan="2">OTHER COST FACTORS, (COST OF SUPPLY, INFLATION,
							CURRENCY VALUATIOn OTHER ADJUSTMENT)</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">TOTAL
							COST</th>
						<th class="head-item mbr-fonts-style display-7" rowspan="2">UNIT
							COST</th>
					</tr>

					<tr class="table-heads">
						<td class="head-item mbr-fonts-style display-7">%</td>
						<td class="head-item mbr-fonts-style display-7">Value</td>
					</tr>
					<tr class="table-heads">
						<td class="head-item mbr-fonts-style display-7">(1)</td>
						<td class="head-item mbr-fonts-style display-7">(2)</td>
						<td class="head-item mbr-fonts-style display-7">(3)</td>
						<td class="head-item mbr-fonts-style display-7">(4)</td>
						<td class="head-item mbr-fonts-style display-7">(5)</td>
						<td class="head-item mbr-fonts-style display-7">(6)</td>
						<td class="head-item mbr-fonts-style display-7">(7)</td>
						<td class="head-item mbr-fonts-style display-7">(8)</td>
						<td class="head-item mbr-fonts-style display-7">(9)</td>
						<td class="head-item mbr-fonts-style display-7">(10) (5)X(9)</td>
						<td class="head-item mbr-fonts-style display-7">(11)</td>
						<td class="head-item mbr-fonts-style display-7">(12 )</td>
					</tr>
					<tr class="table-heads">
						<td class="head-item mbr-fonts-style display-7"></td>
						<td class="head-item mbr-fonts-style display-7">FERTILIZER</td>
						<td class="head-item mbr-fonts-style display-7" id="qty">
		          			<?php
								$sql = "SELECT COUNT(DISTINCT name) AS count FROM temp";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										$count_f = $row ['count'];
										echo $count_f;
									}
								} else {
									echo "0 results";
								}
								$conn->close();
							?>
						</td>
						<td class="head-item mbr-fonts-style display-7">Bag</td>
						<td class="head-item mbr-fonts-style display-7">Php 1,275.00</td>
						<td class="head-item mbr-fonts-style display-7">Php 153.00</td>
						<td class="head-item mbr-fonts-style display-7">Php 25.50</td>
						<td class="head-item mbr-fonts-style display-7">Php 127.50</td>
						<td class="head-item mbr-fonts-style display-7">4.00%</td>
						<td class="head-item mbr-fonts-style display-7">Php 51.00</td>
						<td class="head-item mbr-fonts-style display-7">
		          			<?php
								$compute = $count_f * 1275;
								$format_number = number_format ( $compute );
								echo "Php " . $format_number;
							?>
					</td>
					<td class="head-item mbr-fonts-style display-7">Php 1,632.00</td>
				</tr>
				<tr class="table-heads">
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7">INORGANIC
						FERTILIZER</td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></br></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
				</tr>
				<tr class="table-heads">
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7">Specifications:</td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></br></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
				</tr>
				<tr class="table-heads">
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7">UREA 46-0-0
						(granular)</td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></br></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
				</tr>
				<tr class="table-heads">
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7">Nitrogen-46.4%</td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></br></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
				</tr>
				<tr class="table-heads">
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7">Biuret-0.84%</td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></br></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
				</tr>
				<tr class="table-heads">
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7">Moisture-0.30%</td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></br></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
				</tr>
				<tr class="table-heads">
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7">Packaging: In
						bags, approx. 50kGs capacity</td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></br></td>
					<td class="head-item mbr-fonts-style display-7"></td>
					<td class="head-item mbr-fonts-style display-7"></td>
				</tr>

			</table>
			</div>
			
			<div class="alignright">
				<input id="hideprint" type="button" onclick="printDiv('cd')" value="Print"  class="btn btn-info btn-lg"/>
			</div>
			
			<script>
			function printDiv(divName) {
				var css = '@page { size: landscape; } @media print { #main_nav, #hideprint * { visibility: hidden; } #cd * { visibility: visible; } #cd { position: absolute; left: -5; top: 0; } }',
				head = document.head || document.getElementsByTagName('head')[0],
				style = document.createElement('style');

				style.type = 'text/css';
				style.media = 'print';
	
				if (style.styleSheet){
				  style.styleSheet.cssText = css;
				} else {
				  style.appendChild(document.createTextNode(css));
				}
	
				head.appendChild(style);

			    var hideprint = document.getElementById("hideprint");
				hideprint.style.display = "none";
				
				window.print();
			}

			</script>

		</div> <!-- cd -->
	</div> <!-- report_container -->

</div>

</body>
</html>