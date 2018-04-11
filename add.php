
<?php
include('mainnav.php');
session_start();
// $sql = "INSERT INTO tblresults(sample,res_n,res_n_val,res_p,res_p_val,res_k,res_k_val,res_ph,resp_ph_val,datee,name,brgy,area,crop) VALUES('$sample','$res_n','$res_n_val','$res_p','$res_p_val','$res_k','$res_k_val','$res_ph','$resp_ph_val','$datee','$name','$brgy','$area','$crop')";

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

$con = mysql_connect("localhost","root","");

if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("db_ccasd", $con);

$con = mysql_connect("localhost","root","");

if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("db_ccasd ", $con);


$select = "SELECT * FROM temp WHERE 1";
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
}

mysql_close($con);


?>


<form class="form-basic"  method="post">
    <div class="row">

<div class="col-span-6">
  <div class="form-row">
           <label>
               <span>Date</span>
               <input type="date" name="datee" id="date" required="required" placeholder="Please enter the date today" value='<?php echo  $datee; ?>'/><br /><br />
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
               <option value="please choose tour barangay">Please choose your barangay</option>
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
               <!--<input type="text" name="brgy" id="brgy" required="required" placeholder="Please enter your barangay"/><br/><br/>-->
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
               <input type="text" name="crop" id="crop" required="required" placeholder="Please enter your crop" /><br/><br />

           </label>
       </div>
</div>
</div>
     <th class="head-item mbr-fonts-style display-7" colspan="4">
<input name="submit" type="submit"  value="submit" />
</th>
</tr>
</table>
</div>
</div>
</form>

<?php


    if(isset($_POST["submit"])){

      include_once 'msqli.php';

    


      $sql = "UPDATE `temp` SET datee='$datee',name='$name',brgy='$brgy',area='$area',crop='$crop' from temp WHERE 1";
      if ($conn->query($sql) === TRUE) {
      echo "<script type= 'text/javascript'>alert('New record created successfully'); window.location.href='fertreco.php';
      </script>";
      } else {
      echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }

      $conn->close();
      }
      ?>





<?php
include('footer.php');
?>
