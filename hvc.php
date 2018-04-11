<div class="container" id="printableArea">
         <table class="table isSearch"  cellspacing="0" align="center">
            <thead>
              <tr class="table-heads ">
              <th  colspan="4"><center><img src="assets\images\header.png"></center></th>
              </tr>
              <tr class="table-heads ">
              <th  colspan="4"><center>High Value Commercial Crops</center></th>
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

$a = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bagong Kalsada' AND crop!='Rice' AND crop!='Corn'");
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
   $b = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Banlic' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($b))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>2</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Banlic </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $c = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Barandal' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($c))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>3</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Barandal </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $d = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Batino' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($d))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>4</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Batino </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $e = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bucal' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($e))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>5</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Bucal </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $f = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bubuyan' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($f))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>6</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Bubuyan </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <?php
 $g = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Bungo' AND crop!='Rice' AND crop!='Corn'");
 while($row = mysqli_fetch_array($g))
   {

     echo "<td class='head-item mbr-fonts-style display-7'>7</td>";
     echo "<td class='head-item mbr-fonts-style display-7'> Bungo </td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
   }
 ?>
 </tr>
 <tr style='height:10.3pt'>
   <?php
   $h = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Burol' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($h))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>8</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Burol </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
 $i = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Camaligan' AND crop!='Rice' AND crop!='Corn'");
 while($row = mysqli_fetch_array($i))
   {

     echo "<td class='head-item mbr-fonts-style display-7'>9</td>";
     echo "<td class='head-item mbr-fonts-style display-7'> Camaligan </td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
   }
 ?>
 </tr>
 <tr>
   <?php
   $j = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Hornalan' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($j))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>10</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Hornalan </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $k = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Kay-anlog' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($k))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>11</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Kay-anlog </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $l = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lamesa' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($l))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>12</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Lamesa </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $m = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Laguerta' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($m))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>13</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Laguerta </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $n = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Lawa' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($n))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>14</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Lawa </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $s = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Looc' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($s))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>15</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Looc </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $t = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mabato' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($t))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>16</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Mabato </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $u = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada In' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($u))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>17</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Majada In </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
    $v = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Majada Out' AND crop!='Rice' AND crop!='Corn'");
    while($row = mysqli_fetch_array($v))
      {

        echo "<td class='head-item mbr-fonts-style display-7'>18</td>";
        echo "<td class='head-item mbr-fonts-style display-7'> Majada Out </td>";
        echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
        echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
      }
    ?>
 </tr>
 <tr>
   <?php
   $w = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Makiling' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($w))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>19</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Makiling </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
 $x = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Mapagong' AND crop!='Rice' AND crop!='Corn'");
 while($row = mysqli_fetch_array($x))
   {

     echo "<td class='head-item mbr-fonts-style display-7'>20</td>";
     echo "<td class='head-item mbr-fonts-style display-7'> Mapagong </td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
   }
 ?>
 </tr>
 <tr>
   <?php
   $y = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Maunong' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($y))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>21</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Maunong </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
 $z = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Milagrosa' AND crop!='Rice' AND crop!='Corn'");
 while($row = mysqli_fetch_array($z))
   {

     echo "<td class='head-item mbr-fonts-style display-7'>22</td>";
     echo "<td class='head-item mbr-fonts-style display-7'> Milagrosa </td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
   }
 ?>
 </tr>
 <tr>
   <?php
   $aa = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Palo-Alto' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($aa))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>23</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Palo-Alto </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $cc = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Parian' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($cc))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>24</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Parian </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
 $dd = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Prinza' AND crop!='Rice' AND crop!='Corn'");
 while($row = mysqli_fetch_array($dd))
   {

     echo "<td class='head-item mbr-fonts-style display-7'>25</td>";
     echo "<td class='head-item mbr-fonts-style display-7'> Prinza </td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
     echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
   }
 ?>
 </tr>
 <tr>
   <?php
   $ee = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Punta' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($ee))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>26</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Punta </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $ff = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Saimsim' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($ff))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>27</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Saimsim </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr style='height:18.4pt'>
   <?php
   $gg = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Sampiruhan' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($gg))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>28</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Sampiruhan </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $ii = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Siranglupa' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($ii))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>29</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Siranglupa </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $jj = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Turbina' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($jj))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>30</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Turbina </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>
   <?php
   $kk = mysqli_query($con,"SELECT SUM(area) as area, COUNT(name) as noF from tblresults WHERE brgy = 'Ulango' AND crop!='Rice' AND crop!='Corn'");
   while($row = mysqli_fetch_array($kk))
     {

       echo "<td class='head-item mbr-fonts-style display-7'>31</td>";
       echo "<td class='head-item mbr-fonts-style display-7'> Ulango </td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
       echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
     }
   ?>
 </tr>
 <tr>

  <th class="head-item mbr-fonts-style display-7" colspan="2"><center>Total</center></th>

 </tr>
</table>
</div>
<div class="alignright">
<input type="button" onclick="printDiv('printableArea')" value="Print"  class="btn btn-info btn-lg"/>
</div>
