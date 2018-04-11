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
header("Location: index.php");
}
?>
<style>

/* Style tab links */
.tablink {
    background-color: #333;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding:  16px;
    font-size: 17px;
    width: 449px;
    /* width:30%; */
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    display: none;
    padding: 100px 20px;
    height: 100%;
}
</style>

<br>
<br>
<br>

<button class="tablink" onclick="openPage('sum', this, '#777')"  id="defaultOpen">Summary</button>
<button class="tablink" onclick="openPage('breakdown', this, '#777')">Breakdown</button>
<button class="tablink" onclick="openPage('CD', this, '#777')">Crop Development</button>

<div id="sum" class="tabcontent">
  <?php
  include('sum.php');
   ?>
</div>

<div id="breakdown" class="tabcontent">
  <?php
  include('breakdown.php');
   ?>
</div>

<div id="CD" class="tabcontent">
  <?php
  include('CD.php');
   ?>
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
<script>
function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
