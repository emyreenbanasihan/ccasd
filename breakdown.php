<style>

.tablink {
    background-color: #333;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;

    font-size: 17px;
    width:430px;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontents {
    display: none;
    padding: 100px 20px;
    height: 100%;
}

</style>
<button class="tablink" onclick="openCity('London', this, '#777')" id="defaultOpens">High Value Commercial Crops</button>
<button class="tablink" onclick="openCity('Paris', this, '#777')">Corn</button>
<button class="tablink" onclick="openCity('Tokyo', this, '#777')">Rice</button>
<div id="London" class="tabcontents">
  <?php
  include('hvc.php');
   ?>
</div>

<div id="Paris" class="tabcontents">
  <?php
  include('corn.php');
   ?>
</div>

<div id="Tokyo" class="tabcontents">
  <?php
  include('rice.php');
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
function openCity(cityName,elmnt,color) {
    var i, tabcontents, tablinks;
    tabcontents = document.getElementsByClassName("tabcontents");
    for (i = 0; i < tabcontents.length; i++) {
        tabcontents[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpens" and click on it
document.getElementById("defaultOpens").click();
</script>
