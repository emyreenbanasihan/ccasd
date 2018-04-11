<div class="container" id="c">
         <table class="table isSearch"  cellspacing="0" align="center">
            <thead>
              <tr class="table-heads ">
              <th  colspan="4"><center><img src="assets\images\header.png"></center></th>
              </tr>
              <tr class="table-heads ">
              <th  colspan="4"><center>Irrigated
              Lowland Area</center></th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-heads ">
              <th class="head-item mbr-fonts-style display-7" ></th>
              <th class="head-item mbr-fonts-style display-7" >BARANGAY</th>
              <th class="head-item mbr-fonts-style display-7" >Area</th>
              <th class="head-item mbr-fonts-style display-7" >No of Farmers</th>
              </tr>
   <tr>
  <?php
  include_once 'server.php';

  $a = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bagong Kalsada' AND crop='Rice'");
  while($row = mysqli_fetch_array($a))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>1</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> Bagong Kalsada </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>
<tr>
  <?php
  $k = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Halang' AND crop='Rice'");
  while($row = mysqli_fetch_array($k))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>2</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> Halang </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>
<tr>
  <?php
$c = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bañadero' AND crop='Rice'");
while($row = mysqli_fetch_array($c))
  {

    echo "<td class='head-item mbr-fonts-style display-7'>3</td>";
    echo "<td class='head-item mbr-fonts-style display-7'> Bañadero </td>";
    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
  }
?>
</tr>
<tr>
  <?php
  $x = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mapagong' AND crop='Rice'");
  while($row = mysqli_fetch_array($x))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>4</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> Mapagong </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>
<tr>
  <?php
  $hh = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'San Cristobal' AND crop='Rice'");
  while($row = mysqli_fetch_array($hh))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>5</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> San Cristobal </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>
<tr>
  <?php
  $cc = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Parian' AND crop='Rice'");
  while($row = mysqli_fetch_array($cc))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>6</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> Parian </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>
<tr>
  <?php
  $b = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Banlic' AND crop='Rice'");
  while($row = mysqli_fetch_array($b))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>7</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> Banlic </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>
<tr>
  <?php
$aq = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'San Jose' AND crop='Rice'");
while($row = mysqli_fetch_array($aq))
  {

    echo "<td class='head-item mbr-fonts-style display-7'>8</td>";
    echo "<td class='head-item mbr-fonts-style display-7'> San Jose </td>";
    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
  }
?>
</tr>
<tr>
  <?php
  $ll = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Uwisan' AND crop='Rice'");
  while($row = mysqli_fetch_array($ll))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>9</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> Uwisan </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>
<tr>
  <?php
  $q = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lingga' AND crop='Rice'");
  while($row = mysqli_fetch_array($q))
    {

      echo "<td class='head-item mbr-fonts-style display-7'>10</td>";
      echo "<td class='head-item mbr-fonts-style display-7'> Lingga </td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
    }
  ?>
</tr>

 <tr>
   <?php
   $s = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Looc' AND crop='Rice'");
   while($row = mysqli_fetch_array($s))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>11</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Looc </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $sa = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Real' AND crop='Rice'");
   while($row = mysqli_fetch_array($s))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>12</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Real</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $f = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bucal' AND crop='Rice'");
   while($row = mysqli_fetch_array($f))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>13</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Bucal </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $r = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lecheria' AND crop='Rice'");
   while($row = mysqli_fetch_array($r))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>14</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Lecheria </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $bb = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Pansol' AND crop='Rice'");
   while($row = mysqli_fetch_array($bb))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>15</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Pansol </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
<tr>
<th class="head-item mbr-fonts-style display-7" colspan="2"><center>Subtotal</center></th>
</tr>


     <tr class="table-heads ">
     <th  colspan="4"><center>Upland Rice</center></th>
     </tr>
   </thead>

<tr>
<?php
include_once 'server.php';

$w = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Makiling' AND crop='Rice' ");
while($row = mysqli_fetch_array($w))
  {

    echo "<td class='head-item mbr-fonts-style display-7'>1</td>";
    echo "<td class='head-item mbr-fonts-style display-7'> Makiling </td>";
    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
  }
?>
</tr>



 <tr style='height:7.25pt'>
   <?php
   $m = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Kay-anlog' AND crop='Rice' ");
   while($row = mysqli_fetch_array($m))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>2</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Kay-anlog </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr style='height:7.25pt'>
   <?php
   $kk = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Ulango' AND crop='Rice' ");
   while($row = mysqli_fetch_array($kk))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>3</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Ulango </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr style='height:7.25pt'>
   <?php
   $u = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada In' AND crop='Rice' ");
   while($row = mysqli_fetch_array($u))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>4</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Majada In </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $v = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada Out' AND crop='Rice' ");
   while($row = mysqli_fetch_array($v))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>5</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Majada Out </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr style='height:7.25pt'>
   <?php
   $ee = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Punta' AND crop='Rice' ");
   while($row = mysqli_fetch_array($ee))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>6</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Punta </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>

 </tr>
 <tr style='height:7.25pt'>
   <?php
   $hh = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'San Cristobal' AND crop='Rice' ");
   while($row = mysqli_fetch_array($hh))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>7</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> San Cristobal </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
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
<input type="button" onclick="printDiv('c')" value="Print"  class="btn btn-info btn-lg"/>
</div>
