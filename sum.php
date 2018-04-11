
<style type="text/css" media="print">
  @page { size: landscape; }
</style>
<style>

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
<div id="printableArea">
<div class="container">
<div class="media-container-row">
<div class="title col-12 col-md-8">
<br>
<br>
<center><img src="assets\images\header.png"></center>
</div>
</div>

         <table class="table isSearch" cellspacing="0" >
            <thead>
              <tr class="table-heads ">
              <th class="head-item mbr-fonts-style display-7">Crops</th>
              <th class="head-item mbr-fonts-style display-7">No. of Baranggay</th>
              <th class="head-item mbr-fonts-style display-7">Area(Has.)</th>
              <th class="head-item mbr-fonts-style display-7">No. of Farmers</th></tr>
            </thead>
            <tbody>
             <tr>
              <td align="center">Rice</td>
              <td colspan="3"></td>
            </tr>
            <tr>
              <?php
              $con=mysqli_connect("localhost","root","","db_ccasd");
              // Check connection
              if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
              $a = mysqli_query($con,"SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Rice' AND (brgy ='Lingga' OR brgy ='San Jose' OR brgy ='Lecheria' OR brgy ='Halang' OR brgy ='Banlic' OR brgy ='Bucal' OR brgy ='Pansol' OR brgy ='Real' OR brgy ='Bañadero' OR brgy ='Parian' OR brgy ='San Cristobal' OR brgy ='Looc' OR brgy ='Mapagong' OR brgy ='Uwisan')");
              while($row = mysqli_fetch_array($a))
                {
                  echo "<td class='head-item mbr-fonts-style display-7'> Irrigated Low Land Rice </td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noB'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
                }
              ?>
              </tr>
              <tr>
                <?php

                $b = mysqli_query($con,"SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Rice' AND (brgy='Banlic' OR brgy='Kay-anlog' OR brgy='Majada' OR brgy='Makiling' OR brgy='Punta'  OR brgy='Sancristobal' OR brgy='Ulanggo')");
                while($row = mysqli_fetch_array($b))
                  {
                    echo "<td class='head-item mbr-fonts-style display-7'> Upland Rice </td>";
                    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noB'] . "</td>";
                    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                    echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
                  }
                ?>
              </tr>
              <tr>

              <?php
              $c = mysqli_query($con,"SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Rice' AND (brgy='Banlic' OR brgy='Kay-anlog' OR brgy='Majada' OR brgy='Makiling' OR brgy='Punta'  OR brgy='Sancristobal' OR brgy='Ulanggo' OR   brgy ='Lingga' OR brgy ='San Jose' OR brgy ='Lecheria' OR brgy ='Halang' OR brgy ='Banlic' OR brgy ='Bucal' OR brgy ='Pansol' OR brgy ='Real' OR brgy ='Bañadero' OR brgy ='Parian' OR brgy ='San Cristobal' OR brgy ='Looc' OR brgy ='Mapagong' OR brgy ='Uwisan')");
              while($row = mysqli_fetch_array($c))
                {
                  echo "<td class='head-item mbr-fonts-style display-7'> Subtotal: </td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noB'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
                }
              ?>
              </tr>

              <tr><td colspan="4"></td></tr>

              <tr>
              <?php
              $d = mysqli_query($con,"SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop = 'Corn'");
              while($row = mysqli_fetch_array($d))
                {
                  echo "<td class='head-item mbr-fonts-style display-7'> Corn </td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noB'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
                }
              ?>
              </tr>
               <tr>

              <?php
              $e = mysqli_query($con,"SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE crop != 'Corn' AND crop != 'Rice' ");
              while($row = mysqli_fetch_array($e))
                {
                  echo "<td class='head-item mbr-fonts-style display-7'> High Value Commercial Crops </td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noB'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
                }
              ?>
              </tr>
              <tr>
              <td colspan="4">
              </td>
              </tr>

              <tr>
              <?php
              $f = mysqli_query($con,"SELECT SUM(area) as area, COUNT(brgy) as noB,COUNT(name) as noF from tblresults WHERE brgy='Banlic' OR brgy='Kay-anlog' OR brgy='Majada' OR brgy='Makiling' OR brgy='Punta'  OR brgy='Sancristobal' OR brgy='Ulanggo' OR   brgy ='Lingga' OR brgy ='San Jose' OR brgy ='Lecheria' OR brgy ='Halang' OR brgy ='Banlic' OR brgy ='Bucal' OR brgy ='Pansol' OR brgy ='Real' OR brgy ='Bañadero' OR brgy ='Parian' OR brgy ='San Cristobal' OR brgy ='Looc' OR brgy ='Mapagong' OR brgy ='Uwisan'");
              while($row = mysqli_fetch_array($f))
                {
                  echo "<td class='head-item mbr-fonts-style display-7'>Total </td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noB'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                  echo "<td class='head-item mbr-fonts-style display-7'>" . $row['noF'] . "</td>";
                }
              ?>
              </tr>
               </tbody>
          </table>

          <br><br><br>
                   <table class="table isSearch" cellspacing="0" >
                      <thead>
                        <tr class="table-heads ">
                        <th class="head-item mbr-fonts-style display-7" colspan="2"><b>Other Crops</b></th>
                      </thead>
                      <tbody>
                 <tr>
                  <?php
                  $g = mysqli_query($con,"SELECT SUM(area) as area from tblresults WHERE crop = 'Ube' AND crop = 'Coffee' ");

                  while($row = mysqli_fetch_array($g))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'> Ube and Coffee </td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                    }
                  ?>
                </tr>
                <tr>
                  <?php
                  $h = mysqli_query($con,"SELECT SUM(area) as area from tblresults WHERE crop = 'Sugarcane' ");
                  while($row = mysqli_fetch_array($h))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'> Sugarcane </td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                    }
                  ?>
                </tr>
                  <tr>
                  <?php
                  $i = mysqli_query($con,"SELECT SUM(area) as area from tblresults WHERE crop = 'Coconut' AND brgy !='Canlubang' ");
                  while($row = mysqli_fetch_array($i))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'> Coconut(outside canlubang) </td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                    }
                  ?>
                  </tr>
                    <tr>
                  <?php
                  $j = mysqli_query($con,"SELECT SUM(area) as area from tblresults WHERE crop = 'Rambutan' ");
                  while($row = mysqli_fetch_array($j))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'>Rambutan </td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                    }
                  ?>
                </tr>
                  <tr>
                  <?php
                  $k = mysqli_query($con,"SELECT SUM(area) as area from tblresults WHERE crop = 'Mango'  ");
                  while($row = mysqli_fetch_array($k))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'> Mango</td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";

                    }
                  ?>
                </tr>
                <tr>
                <td colspan="2">
                </td>
                </tr>
                  <tr>
                  <?php
                  $l = mysqli_query($con,"SELECT SUM(area) as area from tblresults WHERE crop = 'Ube' OR crop = 'Coffee' OR crop = 'Sugarcane' OR crop = 'Coconut' AND brgy !='Canlubang' OR crop = 'Rambutan' OR crop = 'Mango'");
                  while($row = mysqli_fetch_array($l))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'>Total</td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                    }
                  ?>
                  </tr>
                </tbody>
                </table>

                <br>
                <br>
                <table class="table isSearch" >
                  <tbody>
                  <tr>
                  <?php
                  $m = mysqli_query($con,"SELECT SUM(area) as area from tblresults ");
                  while($row = mysqli_fetch_array($m))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'>Land Area of Calamba:</td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>" . $row['area'] . "</td>";
                    }
                  ?>
                </tr>
                  <tr>
                  <?php
                  $m = mysqli_query($con,"SELECT SUM(area) as area from tblresults ");
                  while($row = mysqli_fetch_array($m))
                    {
                      echo "<td class='head-item mbr-fonts-style display-7'>Agricultural area:</td>";
                      echo "<td class='head-item mbr-fonts-style display-7'>  18%</td>";
                    }
                  ?>
                </tr>
</tbody>
</table>
          </div>
        </div>

<br><br><hr>
          <div class="alignright">
          <input type="button" onclick="printDiv('printableArea')" value="Print"  class="btn btn-info btn-lg"/>
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
