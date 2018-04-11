
<?php
include('mainnav.php');
 ?>
 <?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "db_ccasd";
mysql_connect($host,$user,$password);
mysql_select_db($datbase);

 ?>

 <link rel="stylesheet" href="style.css" type="text/css" />
 <link rel="stylesheet" href="assets/css/form-basic.css">
 <style>
 .alignleft {
	float: left;
}
.alignright {
	float: right;
}
</style>
 <div class="container">
 				<div class="media-container-row">
 						<div class="title col-12 col-md-8">
 								<h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>
 								</h2>
 								<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

 						</div>
 				</div>
 		</div>

       <div class="container container-table">

         <ul class="nav nav-tabs">
           <li class="nav-item">
               <a href="userlog.php" class="btn btn-primary">UserLog</a>
           </li>
           <li class="nav-item">
             <a href="acc.php" class="btn btn-primary"> Accounts</a>
           </li>
         </ul>

       <div class="table-wrapper">
       <div class="container scroll" style="overflow-x:auto;">
     <table align="center" class="table" cellspacing="0">
       <tr class="table-heads ">
       <th class="head-item mbr-fonts-style display-7" colspan="5"><center>UserLog</center></th>
       </tr>
         <tr class="table-heads ">
         <th class="head-item mbr-fonts-style display-7">Sno.</th>
         <th class="head-item mbr-fonts-style display-7">User Name</th>
         <th class="head-item mbr-fonts-style display-7">Position</th>
         <th class="head-item mbr-fonts-style display-7">User Ip</th>
         <th class="head-item mbr-fonts-style display-7">Login Time</th>
         <!--<th>Logout Time</th>-->
         </tr>
         <?php

      $sql="SELECT * FROM userlog";
      $result = mysql_query($sql);
      while ($row = mysql_fetch_row($result))
        {
        ?>
                 <tr class="table-heads ">
                 <td class="head-item mbr-fonts-style display-7"><?php echo $row[0]; ?></td>
                 <td class="head-item mbr-fonts-style display-7"><?php echo $row[1]; ?></td>
                 <td class="head-item mbr-fonts-style display-7"><?php echo $row[2]; ?></td>
                 <td class="head-item mbr-fonts-style display-7"><?php echo $row[3]; ?></td>

                 <?php
                 echo "<td>" . date('h:i a M/d/Y' , strtotime($row[4])) . "</td>";
                 ?>
              <!--  <td><?php echo $row[5]; ?></td>-->


                 </tr>
             <?php
        }

?>


</table>
<center>
</body>
</html>
