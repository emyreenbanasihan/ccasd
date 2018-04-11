<?php

session_start();
include('mainnav.php');
include_once 'server.php';

//$sample = (isset($_GET["id"]) && $_GET['id'] != "") ? $_GET['id'] : "";

    $select="SELECT * FROM temp INNER JOIN tblfert ON temp.crop = tblfert.crops WHERE temp.id='1' ";
    $results = mysql_query($select);

    while($rowval = mysql_fetch_array($results))
     {
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
  mysql_close($con);


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

          <?php

          $db = mysql_connect("localhost","root","") or die ("Unable to connect to Localhost");
          mysql_select_db("db_ccasd") or die ("Could not select the database.");


        $query=mysql_query("select * from upload where n='$res_n' and p='$res_p' and k='$res_k' and crop='$crop'")or die(mysql_error());
        while($row=mysql_fetch_array($query)){
        $fileName = $row['name'];
        $fileContents   = file_get_contents("files/$fileName");
        echo $fileContents;
        }

           ?>
               </td>
           </tr>
           <tr class="table-heads ">
              <th class="head-item mbr-fonts-style display-7" colspan="5"><center>Lime Requirement(Bag/ha)</center></th>
            </tr>
            <tr class="table-heads ">
              <td class="head-item mbr-fonts-style display-7" colspan="5">
                <?php

                if($res_ph=="7.6"){
                  echo  "No need to apply";
                }elseif($res_ph=="7.2"){
                  echo  "Neutral";
                }elseif($res_ph=="6.8"){
                  echo  "Neutral";
                }elseif($res_ph=="6.4"){
                  echo  "5 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="6.6"){
                  echo  "5 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="6.0"){
                  echo  "10-15 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="5.8"){
                  echo  "10-15 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="5.4"){
                  echo  "15-20 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="5.2"){
                  echo  "15-20 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="5.0"){
                  echo  "20-25 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="4.8"){
                  echo  "20-25 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="4.4"){
                  echo  "25-30 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
                }elseif($res_ph=="4.0"){
                  echo  "25-30 calcium carbonate(CaCO3) apply 30 days before planting for 3 consecutive years";
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
