
<?php

    session_start();
include('mainnav.php');


$barangay_farmer = (isset($_GET["farmer"]) && $_GET['farmer'] != "") ? $_GET['farmer'] : "";

 ?>


<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
<script src="assets/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/application.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
function edt_id(id)
{
 if(confirm('View?'))
 {
   window.location.href='fertreco.php?edit_id='+id;
 }
}
</script>

<div class="container">

<div class="main-content">
<div class="container container-table">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
<!-- start of print area -->
<div class="table-wrapper" id="printableArea">
<div class="container scroll"  >


  <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <center><img src="assets\images\header.png"></center>
          <h2 class="align-center pb-3 mbr-fonts-style display-2">
            <?PHP echo $barangay_farmer; ?>
          </h2>
      </div>
  </div>





		  <table border="1" cellpadding="0" cellspacing="0" id="resultTable" class="table isSearch">
        <thead>
          <tr class="table-heads ">
      <th class="head-item mbr-fonts-style display-7">Sample No.</th>
      <th class="head-item mbr-fonts-style display-7">Date</th>
      <th class="head-item mbr-fonts-style display-7">Name</th>
      <th class="head-item mbr-fonts-style display-7">Area(hectares)</th>
      <th class="head-item mbr-fonts-style display-7">Crop</th>
      <th class="head-item mbr-fonts-style display-7">view</th>

      </tr>
      </thead>
          <tbody>

<?php
include_once 'server.php';

$sql_query = "SELECT * FROM tblresults WHERE brgy = '$barangay_farmer'";
$result_set=mysql_query($sql_query);
if(mysql_num_rows($result_set)>0)
{
       while($row=mysql_fetch_row($result_set))
  {
    ?>
             <tr>
             <td><?php echo $row[1]; ?></td>
             <td><?php echo $row[10]; ?></td>
             <td><?php echo $row[11]; ?></td>
             <td><?php echo $row[13]; ?></td>
             <td><?php echo $row[14]; ?></td>
      <td><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="view.png"/></a></td>
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
        </tbody>
       </table>

     </div>
   </div>
   <!-- end of div for print -->
   <div class="alignright">
   <input type="button" onclick="printDiv('printableArea')" value="Print"  class="btn btn-info btn-lg"/>
   <div>
 </div>

 </div>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</body>
