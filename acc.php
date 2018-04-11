
<?php

session_start();

include('mainnav.php');
 ?>

 <?php
 include_once 'server.php';


 // delete condition
 if(isset($_GET['delete_id']))
 {
 	$sql_query="DELETE FROM systemcred WHERE id=".$_GET['delete_id'];
 	mysql_query($sql_query);
 	header("Location: $_SERVER[PHP_SELF]");
 }
 // delete condition
 ?>

 <script type="text/javascript">
 function edt_id(id)
 {
 	if(confirm('Sure to edit ?'))
 	{
 		window.location.href='edit_data.php?edit_id='+id;
 	}
 }
 function delete_id(id)
 {
 	if(confirm('Sure to Delete ?'))
 	{
 		window.location.href='acc.php?delete_id='+id;
 	}
 }
 </script>
 <link rel="stylesheet" href="assets/css/form-basic.css">
 <link rel="stylesheet" href="style.css" type="text/css" />

 <div class="container">
 				<div class="media-container-row">
 						<div class="title col-12 col-md-8">
 								<h2 class="align-center pb-3 mbr-fonts-style display-2">
                  <br><br>
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
    <a href="add_acc.php" class="btn btn-primary"> ADD NEW USER</a>
  </li>
</ul>
         <div class="table-wrapper">
         <div class="container scroll" style="overflow-x:auto;">
       <table align="center" class="table" cellspacing="0">
           <tr class="table-heads ">
             <th class="head-item mbr-fonts-style display-7" colspan="8"><center>Accounts</center></th>
           </tr>
           <tr class="table-heads ">
          <th class="head-item mbr-fonts-style display-7">First Name</th>
          <th class="head-item mbr-fonts-style display-7">Middle Name</th>
          <th class="head-item mbr-fonts-style display-7">Last Name</th>
          <th class="head-item mbr-fonts-style display-7">Username</th>
          <th class="head-item mbr-fonts-style display-7">Password</th>
          <th class="head-item mbr-fonts-style display-7">Position</th>
           <th class="head-item mbr-fonts-style display-7" colspan="2">Operations</th>
           </tr>
           <?php
       	$sql_query="SELECT * FROM systemcred";
       	$result_set=mysql_query($sql_query);
       	if(mysql_num_rows($result_set)>0)
       	{
               while($row=mysql_fetch_row($result_set))
       		{
       		?>
                   <tr>
                   <td><?php echo $row[1]; ?></td>
                   <td><?php echo $row[2]; ?></td>
                   <td><?php echo $row[3]; ?></td>
                   <td><?php echo $row[4]; ?></td>
                   <td><?php echo $row[5]; ?></td>
                   <td><?php echo $row[6]; ?></td>

                   <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="edit.png" align="EDIT" /></a></td>
                   <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="garbage.png" align="DELETE" /></a></td>
                   </tr>
               <?php
       		}
       	}
       	else
       	{
       		?>
               <tr>
               <td colspan="5">No Data Found !</td>
               </tr>
               <?php
       	}

       	?>

           </table>
         </div>
       </div>
     </div>

</body>
</html>
