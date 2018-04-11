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
  header("Location: login.php");
}

    $colorCanlubang = "#";
       $colorMapagong = "#";
       $colorMabato = "#";
       $colorSanCristobal = "#";
       $colorUwisan = "#";
       $colorLooc = "#";
       $colorSampiruhan = "#";
       $colorPalingon = "#";
       $colorLingga = "#";
       $colorSanJuan = "#";
       $colorBanadero = "#";
       $colorSanJose = "#";
       $colorPoblacion = "#";
       $colorParian = "#";
       $colorPaciano = "#";
       $colorMayapa = "#";
       $colorSirangLupa = "#";
       $colorMajada = "#";
       $colorPaloAlto = "#";
       $colorBarndal = "#";
       $colorBatino = "#";
       $colorLawa = "#";
       $colorReal = "#";
       $colorPainza = "#";
       $colorLecheria = "#";
       $colorHalang = "#";
       $colorTurbina = "#";
       $colorBabuyan = "#";
       $colorLaguerta = "#";
       $colorHornalan = "#";
       $colorBunggo = "#";
       $colorBurol = "#";
       $colorKayanlog = "#";
       $colorUlango = "#";
       $colorTulo = "#";
       $colorLamesa = "#";
       $colorBucal = "#";
       $colorPansol = "#";
       $colorMaunong = "#";
       $colorSaimsim = "#";
       $colorPalingon = "#";
       $colorCamaligan = "#";
       $colorPutingLupa = "#";
       $colorBagongKalsada = "#";
       $colorSucol = "#";
       $colorMasili = "#";
       $colorMakiling = "#";
    $colorPunta = "#";
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="assets/css/style.css">

 <!-- Title of the Map -->
<div class="container">
    <div class="media-container-row">
        <div class="title col-12 col-md-8">
            <h2 class="align-center pb-3 mbr-fonts-style display-2">
                <br><br><br>Map of Calamba
            </h2>
        </div>
    </div>
</div>

<div class="main-content">



    <!-- Dropdown for choices to change color values of map -->
    <center>
        <form action="" method="post">
            <select name="choiceForMap" onchange='this.form.submit()' >
                <option disabled selected >--- select ---</option>
                <option <?php if (isset($_POST['choiceForMap']) && $_POST['choiceForMap'] == 'farmers') { ?> selected="true" <?php }; ?> value="farmers">Farmers</option>
                <option <?php if (isset($_POST['choiceForMap']) && $_POST['choiceForMap'] == 'nitrogen') { ?> selected="true" <?php }; ?> value="nitrogen">Nitrogen</option>
                <option <?php if (isset($_POST['choiceForMap']) && $_POST['choiceForMap'] == 'phosphorus') { ?> selected="true" <?php }; ?> value="phosphorus">Phosphorus</option>
                <option <?php if (isset($_POST['choiceForMap']) && $_POST['choiceForMap'] == 'potassium') { ?> selected="true" <?php }; ?> value="potassium">Potassium</option>
                <option <?php if (isset($_POST['choiceForMap']) && $_POST['choiceForMap'] == 'pH') { ?> selected="true" <?php }; ?> value="pH">pH</option>
            </select>
        </form>
    </center>

    <?php

        if (isset($_POST['choiceForMap'])) {
            $con = new mysqli("localhost","root","","db_ccasd");

            $choice = $_POST['choiceForMap'];

            $sql = "SELECT count(*) as ctr FROM tblresults";
            $result = $con->query($sql);

            //Drop down choice
            if ($result->num_rows > 0) {
                if ($choice == "farmers") {
                    echo '<center><img src="assets/images/farmers.png"></center';
                    $sqlMapagong = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'mapagong'";
                    $sqlCanlubang = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'canlubang'";
                    $sqlSanCristobal = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'sancristobal'";
                    $sqlUwisan = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'uwisan'";
                    $sqLooc = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'looc'";
                    $sqlSampiruhan = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'sampiruhan'";
                    $sqlPalingon = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'palingon'";
                    $sqlLingga = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'lingga'";
                    $sqlSanJuan = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'sanjuan'";
                    $sqlBanadero = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'banadero'";
                    $sqlSanJose = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'sanjose'";
                    $sqlPoblacion = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'poblacion'";
                    $sqlParian = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'parian'";
                    $sqlpaciano = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'paciano'";
                    $sqlMayapa = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'mayapa'";
                    $sqlSirangLupa = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'siranglupa'";
                    $sqlMajada = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'majada'";
                    $sqlPaloAlto = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'paloalto'";
                    $sqlBarndal = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'barndal'";
                    $sqlBatino = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'batino'";
                    $sqlLawa = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'lawa'";
                    $sqlReal = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'real'";
                    $sqlPainza = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'painza'";
                    $sqlLecheria = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'lecheria'";
                    $sqlHalang = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'halang'";
                    $sqlTurbina = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'turbina'";
                    $sqlBabuyan = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'babuyan'";
                    $sqlLaguerta = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'laguerta'";
                    $sqlHornalan = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'hornalan'";
                    $sqlBunggo = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'bunggo'";
                    $sqlBurol = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'burol'";
                    $sqlKayanlog = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'kayanlog'";
                    $sqlUlango = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'ulango'";
                    $sqlTulo = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'tulo'";
                    $sqlLamesa = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'lamesa'";
                    $sqlBucal = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'bucal'";
                    $sqlPansol = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'pansol'";
                    $sqlMaunong = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'maunong'";
                    $sqlSaimsim = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'saimsim'";
                    $sqlCamaligan = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'camaligan'";
                    $sqlPutingLupa = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'putinglupa'";
                    $sqlBagongKalsada = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'bagongkalsada'";
                    $sqlSucol = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'sucol'";
                    $sqlMasili = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'masili'";
                    $sqlMakiling = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'makiling'";
                    $sqlMabato = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'mabato'";
                    $sqlPunta = "SELECT DISTINCT name FROM tblresults WHERE brgy LIKE 'punta'";

                    $resultMapagong = $con->query($sqlMapagong);
                    $resultPunta = $con->query($sqlPunta);
                    $resultMabato = $con->query($sqlMabato);
                    $resultCanlubang = $con->query($sqlCanlubang);
                    $resultSanCristobal = $con->query($sqlSanCristobal);
                    $resultUwisan = $con->query($sqlUwisan);
                    $resultLooc = $con->query($sqLooc);
                    $resultSampiruhan = $con->query($sqlSampiruhan);
                    $resultPalingon = $con->query($sqlPalingon);
                    $resultLingga = $con->query($sqlLingga);
                    $resultSanJuan = $con->query($sqlSanJuan);
                    $resultBanadero = $con->query($sqlBanadero);
                    $resultSanJose = $con->query($sqlSanJose);
                    $resultPoblacion = $con->query($sqlPoblacion);
                    $resultParian = $con->query($sqlParian);
                    $resultPaciano = $con->query($sqlpaciano);
                    $resultMayapa = $con->query($sqlMayapa);
                    $resultSirangLupa = $con->query($sqlSirangLupa);
                    $resultMajada = $con->query($sqlMajada);
                    $resultPaloAlto = $con->query($sqlPaloAlto);
                    $resultBarndal = $con->query($sqlBarndal);
                    $resultBatino = $con->query($sqlBatino);
                    $resultLawa = $con->query($sqlLawa);
                    $resultReal = $con->query($sqlReal);
                    $resultPainza = $con->query($sqlPainza);
                    $resultLecheria = $con->query($sqlLecheria);
                    $resultHalang = $con->query($sqlHalang);
                    $resultTurbina = $con->query($sqlTurbina);
                    $resultBabuyan = $con->query($sqlBabuyan);
                    $resultLaguerta = $con->query($sqlLaguerta);
                    $resultHornalan = $con->query($sqlHornalan);
                    $resultBunggo = $con->query($sqlBunggo);
                    $resultBurol = $con->query($sqlBurol);
                    $resultKayanlog = $con->query($sqlKayanlog);
                    $resultUlango = $con->query($sqlUlango);
                    $resultTulo = $con->query($sqlTulo);
                    $resultLamesa = $con->query($sqlLamesa);
                    $resultBucal = $con->query($sqlBucal);
                    $resultPansol = $con->query($sqlPansol);
                    $resultMaunong = $con->query($sqlMaunong);
                    $resultSaimsim = $con->query($sqlSaimsim);
                    $resultCamaligan = $con->query($sqlCamaligan);
                    $resultPutingLupa = $con->query($sqlPutingLupa);
                    $resultBagongKalsada = $con->query($sqlBagongKalsada);
                    $resultSucol = $con->query($sqlSucol);
                    $resultMasili = $con->query($sqlMasili);
                    $resultMakiling = $con->query($sqlMakiling);

                    //Crucial to lessen work

                    $lowColor = "#FFFF00";
                    $mediumColor = "#E68000";
                    $highColor = "#CC0000";

                    if ($resultCanlubang->num_rows >= 1 && ($resultCanlubang->num_rows <=1)) {
                        $colorCanlubang = $lowColor;
                    } else if ($resultCanlubang->num_rows >= 2 && ($resultCanlubang->num_rows <=4)) {
                     $colorCanlubang = $mediumColor;
                    } else if ($resultCanlubang->num_rows >= 5 ) {
                        $colorCanlubang = $highColor;
                    } else {
                        $colorCanlubang = "#";
                    }

                    if ($resultPunta->num_rows >= 1 && ($resultPunta->num_rows <=1)) {
                        $colorPunta = $lowColor;
                    } else if ($resultPunta->num_rows >= 2 && ($resultPunta->num_rows <=4)) {
                     $colorPunta = $mediumColor;
                    } else if ($resultPunta->num_rows >= 5 ) {
                        $colorPunta = $highColor;
                    } else {
                        $colorPunta = "#";
                    }

                    if ($resultMapagong->num_rows >= 1 && ($resultMapagong->num_rows <=1)) {
                        $colorMapagong = $lowColor;
                    } else if ($resultMapagong->num_rows >= 2 && ($resultMapagong->num_rows <=4)) {
                     $colorMapagong = $mediumColor;
                    } else if ($resultMapagong->num_rows >= 5 ) {
                        $colorMapagong = $highColor;
                    } else {
                        $colorMapagong = "#";
                    }

                    if ($resultMabato->num_rows >= 1 && ($resultMabato->num_rows <=1)) {
                        $colorMabato = $lowColor;
                    } else if ($resultMabato->num_rows >= 2 && ($resultMabato->num_rows <=4)) {
                        $colorMabato = $mediumColor;
                    } else if ($resultMabato->num_rows >= 5 ) {
                        $colorMabato = $highColor;
                    } else {
                        $colorMabato = "#";
                    }

                    if ($resultSanCristobal->num_rows >= 1 && ($resultSanCristobal->num_rows <=1)) {
                        $colorSanCristobal = $lowColor;
                    } else if ($resultSanCristobal->num_rows >= 2 && ($resultSanCristobal->num_rows <=4)) {
                     $colorSanCristobal = $mediumColor;
                    } else if ($resultSanCristobal->num_rows >= 5 ) {
                        $colorSanCristobal = $highColor;
                    } else {
                        $colorSanCristobal = "#";
                    }

                    if ($resultUwisan->num_rows >= 1 && ($resultUwisan->num_rows <=1)) {
                        $colorUwisan =$lowColor;
                    } else if ($resultUwisan->num_rows >= 2 && ($resultUwisan->num_rows <=4)) {
                     $colorUwisan = $mediumColor;
                    } else if ($resultUwisan->num_rows >= 5 ) {
                        $colorUwisan = $highColor;
                    } else {
                        $colorUwisan = "#";
                    }

                    if ($resultLooc->num_rows >= 1 && ($resultLooc->num_rows <=1)) {
                        $colorLooc = $lowColor;
                    } else if ($resultLooc->num_rows >= 2 && ($resultLooc->num_rows <=4)) {
                     $colorLooc = $mediumColor;
                    } else if ($resultLooc->num_rows >= 5 ) {
                        $coloLooc = $highColor;
                    } else {
                        $colorLooc = "#";
                    }

                    if ($resultSampiruhan->num_rows >= 1 && ($resultSampiruhan->num_rows <=1)) {
                        $colorSampiruhan = $lowColor;
                    } else if ($resultSampiruhan->num_rows >= 2 && ($resultSampiruhan->num_rows <=4)) {
                     $colorSampiruhan = $mediumColor;
                    } else if ($resultSampiruhan->num_rows >= 5 ) {
                        $colorSampiruhan = $highColor;
                    } else {
                        $colorSampiruhan = "#";
                    }

                    if ($resultPalingon->num_rows >= 1 && ($resultPalingon->num_rows <=1)) {
                        $colorPalingon = $lowColor;
                    } else if ($resultPalingon->num_rows >= 2 && ($resultPalingon->num_rows <=4)) {
                     $colorPalingon = $mediumColor;
                    } else if ($resultPalingon->num_rows >= 5 ) {
                        $colorPalingon = $highColor;
                    } else {
                        $colorPalingon = "#";
                    }

                    if ($resultLingga->num_rows >= 1 && ($resultLingga->num_rows <=1)) {
                        $colorLingga = $lowColor;
                    } else if ($resultLingga->num_rows >= 2 && ($resultLingga->num_rows <=4)) {
                     $colorLingga = $mediumColor;
                    } else if ($resultLingga->num_rows >= 5 ) {
                        $colorLingga = $highColor;
                    } else {
                        $colorLingga = "#";
                    }

                    if ($resultSanJuan->num_rows >= 1 && ($resultSanJuan->num_rows <=1)) {
                        $colorSanJuan = $lowColor;
                    } else if ($resultSanJuan->num_rows >= 2 && ($resultSanJuan->num_rows <=4)) {
                     $colorSanJuan = $mediumColor;
                    } else if ($resultSanJuan->num_rows >= 5 ) {
                        $colorSanJuan = $highColor;
                    } else {
                        $colorSanJuan = "#";
                    }

                    if ($resultBanadero->num_rows >= 1 && ($resultBanadero->num_rows <=1)) {
                        $colorBanadero = $lowColor;
                    } else if ($resultBanadero->num_rows >= 2 && ($resultBanadero->num_rows <=4)) {
                     $colorBanadero = $mediumColor;
                    } else if ($resultBanadero->num_rows >= 5 ) {
                        $colorBanadero = $highColor;
                    } else {
                        $colorBanadero = "#";
                    }

                    if ($resultSanJose->num_rows >= 1 && ($resultSanJose->num_rows <=1)) {
                        $colorSanJose = $lowColor;
                    } else if ($resultSanJose->num_rows >= 2 && ($resultSanJose->num_rows <=4)) {
                     $colorSanJose = $mediumColor;
                    } else if ($resultSanJose->num_rows >= 5 ) {
                        $colorSanJose = $highColor;
                    } else {
                        $colorSanJose = "#";
                    }

                    if ($resultPoblacion->num_rows >= 1 && ($resultPoblacion->num_rows <=1)) {
                        $colorPoblacion = $lowColor;
                    } else if ($resultPoblacion->num_rows >= 2 && ($resultPoblacion->num_rows <=4)) {
                     $colorPoblacion = $mediumColor;
                    } else if ($resultPoblacion->num_rows >= 5 ) {
                        $colorPoblacion = $highColor;
                    } else {
                        $colorPoblacion = "#";
                    }

                    if ($resultParian->num_rows >= 1 && ($resultParian->num_rows <=1)) {
                        $colorParian = $lowColor;
                    } else if ($resultParian->num_rows >= 2 && ($resultParian->num_rows <=4)) {
                     $colorParian = $mediumColor;
                    } else if ($resultParian->num_rows >= 5 ) {
                        $colorParian = $highColor;
                    } else {
                        $colorParian = "#";
                    }

                    if ($resultPaciano->num_rows >= 1 && ($resultPaciano->num_rows <=1)) {
                        $colorPaciano = $lowColor;
                    } else if ($resultPaciano->num_rows >= 2 && ($resultPaciano->num_rows <=4)) {
                     $colorPaciano = $mediumColor;
                    } else if ($resultPaciano->num_rows >= 5 ) {
                        $colorPaciano = $highColor;
                    } else {
                        $colorPaciano = "#";
                    }

                    if ($resultMayapa->num_rows >= 1 && ($resultMayapa->num_rows <=1)) {
                        $colorMayapa = $lowColor;
                    } else if ($resultMayapa->num_rows >= 2 && ($resultMayapa->num_rows <=4)) {
                     $colorMayapa = $mediumColor;
                    } else if ($resultMayapa->num_rows >= 5 ) {
                        $colorMayapa = $highColor;
                    } else {
                        $colorMayapa = "#";
                    }

                    if ($resultSirangLupa->num_rows >= 1 && ($resultSirangLupa->num_rows <=1)) {
                        $colorSirangLupa = $lowColor;
                    } else if ($resultSirangLupa->num_rows >= 2 && ($resultSirangLupa->num_rows <=4)) {
                     $colorSirangLupa = $mediumColor;
                    } else if ($resultSirangLupa->num_rows >= 5 ) {
                        $colorSirangLupa = $highColor;
                    } else {
                        $colorSirangLupa = "#";
                    }

                    if ($resultMajada->num_rows >= 1 && ($resultMajada->num_rows <=1)) {
                        $colorMajada = $lowColor;
                    } else if ($resultPalingon->num_rows >= 2 && ($resultMajada->num_rows <=4)) {
                     $colorMajada = $mediumColor;
                    } else if ($resultMajada->num_rows >= 5 ) {
                        $colorMajada = $highColor;
                    } else {
                        $colorMajada = "#";
                    }

                    if ($resultPaloAlto->num_rows >= 1 && ($resultPaloAlto->num_rows <=1)) {
                        $colorPaloAlto = $lowColor;
                    } else if ($resultPaloAlto->num_rows >= 2 && ($resultPaloAlto->num_rows <=4)) {
                     $colorPaloAlto = $mediumColor;
                    } else if ($resultPaloAlto->num_rows >= 5 ) {
                        $colorPaloAlto = $highColor;
                    } else {
                        $colorPaloAlto = "#";
                    }

                    if ($resultBarndal->num_rows >= 1 && ($resultBarndal->num_rows <=1)) {
                        $colorBarndal = $lowColor;
                    } else if ($resultBarndal->num_rows >= 2 && ($resultBarndal->num_rows <=4)) {
                     $colorBarndal = $mediumColor;
                    } else if ($resultBarndal->num_rows >= 5 ) {
                        $colorBarndal = $highColor;
                    } else {
                        $colorBarndal = "#";
                    }

                    if ($resultBatino->num_rows >= 1 && ($resultBatino->num_rows <=1)) {
                        $colorBatino = $lowColor;
                    } else if ($resultBatino->num_rows >= 2 && ($resultBatino->num_rows <=4)) {
                     $colorBatino = $mediumColor;
                    } else if ($resultBatino->num_rows >= 5 ) {
                        $colorBatino = $highColor;
                    } else {
                        $colorBatino = "#";
                    }

                    if ($resultLawa->num_rows >= 1 && ($resultLawa->num_rows <=1)) {
                        $colorLawa = $lowColor;
                    } else if ($resultLawa->num_rows >= 2 && ($resultLawa->num_rows <=4)) {
                     $colorLawa = $mediumColor;
                    } else if ($resultLawa->num_rows >= 5 ) {
                        $colorLawa = $highColor;
                    } else {
                        $colorLawa = "#";
                    }

                    if ($resultReal->num_rows >= 1 && ($resultReal->num_rows <=1)) {
                        $colorReal = $lowColor;
                    } else if ($resultReal->num_rows >= 2 && ($resultReal->num_rows <=4)) {
                     $colorReal = $mediumColor;
                    } else if ($resultReal->num_rows >= 5 ) {
                        $colorReal = $highColor;
                    } else {
                        $colorReal = "#";
                    }

                    if ($resultPainza->num_rows >= 1 && ($resultPainza->num_rows <=1)) {
                        $colorPainza = $lowColor;
                    } else if ($resultPainza->num_rows >= 2 && ($resultPainza->num_rows <=4)) {
                     $colorPainza = $mediumColor;
                    } else if ($resultPainza->num_rows >= 5 ) {
                        $colorPainza = $highColor;
                    } else {
                        $coloPainza = "#";
                    }

                    if ($resultLecheria->num_rows >= 1 && ($resultLecheria->num_rows <=1)) {
                        $colorLecheria = $lowColor;
                    } else if ($resultLecheria->num_rows >= 2 && ($resultLecheria->num_rows <=4)) {
                     $colorLecheria = $mediumColor;
                    } else if ($resultLecheria->num_rows >= 5 ) {
                        $colorLecheria = $highColor;
                    } else {
                        $colorLecheria = "#";
                    }

                    if ($resultHalang->num_rows >= 1 && ($resultHalang->num_rows <=1)) {
                        $colorHalang = $lowColor;
                    } else if ($resultHalang->num_rows >= 2 && ($resultHalang->num_rows <=4)) {
                     $colorHalang = $mediumColor;
                    } else if ($resultHalang->num_rows >= 5 ) {
                        $colorHalang = $highColor;
                    } else {
                        $colorHalang = "#";
                    }

                    if ($resultTurbina->num_rows >= 1 && ($resultTurbina->num_rows <=1)) {
                        $colorTurbina = $lowColor;
                    } else if ($resultTurbina->num_rows >= 2 && ($resultTurbina->num_rows <=4)) {
                        $colorTurbina = $mediumColor;
                    } else if ($resultTurbina->num_rows >= 5 ) {
                        $colorTurbina = $highColor;
                    } else {
                        $colorTurbina = "#";
                    }

                    if ($resultBabuyan->num_rows >= 1 && ($resultBabuyan->num_rows <=1)) {
                        $colorBabuyan = $lowColor;
                    } else if ($resultBabuyan->num_rows >= 2 && ($resultBabuyan->num_rows <=4)) {
                        $colorBabuyan = $mediumColor;
                    } else if ($resultBabuyan->num_rows >= 5 ) {
                        $colorBabuyan = $highColor;
                    } else {
                        $colorBabuyan = "#";
                    }

                    if ($resultLaguerta->num_rows >= 1 && ($resultLaguerta->num_rows <=1)) {
                        $colorLaguerta = $lowColor;
                    } else if ($resultLaguerta->num_rows >= 2 && ($resultLaguerta->num_rows <=4)) {
                        $colorLaguerta = $mediumColor;
                    } else if ($resultLaguerta->num_rows >= 5 ) {
                        $colorLaguerta = $highColor;
                    } else {
                        $colorLaguerta = "#";
                    }

                    if ($resultHornalan->num_rows >= 1 && ($resultHornalan->num_rows <=1)) {
                        $colorHornalan = $lowColor;
                    } else if ($resultHornalan->num_rows >= 2 && ($resultHornalan->num_rows <=4)) {
                        $colorHornalan = $mediumColor;
                    } else if ($resultHornalan->num_rows >= 5 ) {
                        $colorHornalan = $highColor;
                    } else {
                        $colorHornalan = "#";
                    }

                    if ($resultBunggo->num_rows >= 1 && ($resultBunggo->num_rows <=1)) {
                        $colorBunggo = $lowColor;
                    } else if ($resultBunggo->num_rows >= 2 && ($resultBunggo->num_rows <=4)) {
                        $colorBunggo = $mediumColor;
                    } else if ($resultBunggo->num_rows >= 5 ) {
                        $colorBunggo = $highColor;
                    } else {
                        $colorBunggo = "#";
                    }

                    if ($resultBurol->num_rows >= 1 && ($resultBurol->num_rows <=1)) {
                        $colorBurol = $lowColor;
                    } else if ($resultBurol->num_rows >= 2 && ($resultBurol->num_rows <=4)) {
                        $colorBurol = $mediumColor;
                    } else if ($resultBurol->num_rows >= 5 ) {
                        $colorBurol = $highColor;
                    } else {
                        $colorBurol = "#";
                    }

                    if ($resultKayanlog->num_rows >= 1 && ($resultKayanlog->num_rows <=1)) {
                        $colorKayanlog = $lowColor;
                    } else if ($resultKayanlog->num_rows >= 2 && ($resultKayanlog->num_rows <=4)) {
                        $colorKayanlog = $mediumColor;
                    } else if ($resultKayanlog->num_rows >= 5 ) {
                        $colorKayanlog = $highColor;
                    } else {
                        $colorKayanlog = "#";
                    }

                    if ($resultUlango->num_rows >= 1 && ($resultUlango->num_rows <=1)) {
                        $colorUlango = $lowColor;
                    } else if ($resultUlango->num_rows >= 2 && ($resultUlango->num_rows <=4)) {
                     $colorUlango = $mediumColor;
                    } else if ($resultUlango->num_rows >= 5 ) {
                        $colorUlango = $highColor;
                    } else {
                        $colorUlango = "#";
                    }

                    if ($resultTulo->num_rows >= 1 && ($resultTulo->num_rows <=1)) {
                        $colorTulo = $lowColor;
                    } else if ($resultTulo->num_rows >= 2 && ($resultTulo->num_rows <=4)) {
                     $colorTulo = $mediumColor;
                    } else if ($resultTulo->num_rows >= 5 ) {
                        $colorTulo = $highColor;
                    } else {
                        $colorTulo = "#";
                    }

                    if ($resultLamesa->num_rows >= 1 && ($resultLamesa->num_rows <=1)) {
                        $colorLamesa = $lowColor;
                    } else if ($resultLamesa->num_rows >= 2 && ($resultLamesa->num_rows <=4)) {
                     $colorLamesa = $mediumColor;
                    } else if ($resultLamesa->num_rows >= 5 ) {
                        $colorLamesa = $highColor;
                    } else {
                        $colorLamesa = "#";
                    }

                    if ($resultBucal->num_rows >= 1 && ($resultBucal->num_rows <=1)) {
                        $colorBucal = $lowColor;
                    } else if ($resultBucal->num_rows >= 2 && ($resultBucal->num_rows <=4)) {
                     $colorBucal = $mediumColor;
                    } else if ($resultBucal->num_rows >= 5 ) {
                        $colorBucal = $highColor;
                    } else {
                        $colorBucal = "#";
                    }

                    if ($resultPansol->num_rows >= 1 && ($resultPansol->num_rows <=1)) {
                        $colorPansol = $lowColor;
                    } else if ($resultPansol->num_rows >= 2 && ($resultPansol->num_rows <=4)) {
                     $colorPansol = $mediumColor;
                    } else if ($resultPansol->num_rows >= 5 ) {
                        $colorPansol = $highColor;
                    } else {
                        $colorPansol = "#";
                    }

                    if ($resultMaunong->num_rows >= 1 && ($resultMaunong->num_rows <=1)) {
                        $colorMaunong = $lowColor;
                    } else if ($resultMaunong->num_rows >= 2 && ($resultMaunong->num_rows <=4)) {
                     $colorMaunong = $mediumColor;
                    } else if ($resultMaunong->num_rows >= 5 ) {
                        $colorMaunong = $highColor;
                    } else {
                        $colorMaunong = "#";
                    }

                    if ($resultSaimsim->num_rows >= 1 && ($resultSaimsim->num_rows <=1)) {
                        $colorSaimsim = $lowColor;
                    } else if ($resultSaimsim->num_rows >= 2 && ($resultSaimsim->num_rows <=4)) {
                     $colorSaimsim = $mediumColor;
                    } else if ($resultSaimsim->num_rows >= 5 ) {
                        $colorSaimsim = $highColor;
                    } else {
                        $colorSaimsim = "#";
                    }

                    if ($resultPalingon->num_rows >= 1 && ($resultPalingon->num_rows <=1)) {
                        $colorPalingon = $lowColor;
                    } else if ($resultPalingon->num_rows >= 2 && ($resultPalingon->num_rows <=4)) {
                     $colorPalingon = $mediumColor;
                    } else if ($resultPalingon->num_rows >= 5 ) {
                        $colorPalingon = $highColor;
                    } else {
                        $colorPalingon = "#";
                    }

                    if ($resultCamaligan->num_rows >= 1 && ($resultCamaligan->num_rows <=1)) {
                        $colorCamaligan = $lowColor;
                    } else if ($resultCamaligan->num_rows >= 2 && ($resultCamaligan->num_rows <=4)) {
                     $colorCamaligan = $mediumColor;
                    } else if ($resultCamaligan->num_rows >= 5 ) {
                        $colorCamaligan = $highColor;
                    } else {
                        $colorCamaligan = "#";
                    }

                    if ($resultPutingLupa->num_rows >= 1 && ($resultPutingLupa->num_rows <=1)) {
                        $colorPutingLupa = $lowColor;
                    } else if ($resultPutingLupa->num_rows >= 2 && ($resultPutingLupa->num_rows <=4)) {
                     $colorPutingLupa = $mediumColor;
                    } else if ($resultPutingLupa->num_rows >= 5 ) {
                        $colorPutingLupa = $highColor;
                    } else {
                        $colorPutingLupa = "#";
                    }

                    if ($resultBagongKalsada->num_rows >= 1 && ($resultBagongKalsada->num_rows <=1)) {
                        $colorBagongKalsada = $lowColor;
                    } else if ($resultBagongKalsada->num_rows >= 2 && ($resultBagongKalsada->num_rows <=4)) {
                     $colorBagongKalsada = $mediumColor;
                    } else if ($resultBagongKalsada->num_rows >= 5 ) {
                        $colorBagongKalsada = $highColor;
                    } else {
                        $colorBagongKalsada = "#";
                    }

                    if ($resultSucol->num_rows >= 1 && ($resultSucol->num_rows <=1)) {
                        $colorSucol = $lowColor;
                    } else if ($resultSucol->num_rows >= 2 && ($resultSucol->num_rows <=4)) {
                     $colorSucol = $mediumColor;
                    } else if ($resultSucol->num_rows >= 5 ) {
                        $colorSucol = $highColor;
                    } else {
                        $colorSucol = "#";
                    }

                    if ($resultMasili->num_rows >= 1 && ($resultMasili->num_rows <=1)) {
                        $colorMasili = $lowColor;
                    } else if ($resultMasili->num_rows >= 2 && ($resultMasili->num_rows <=4)) {
                     $colorMasili = $mediumColor;
                    } else if ($resultMasili->num_rows >= 5 ) {
                        $colorMasili = $highColor;
                    } else {
                        $colorMasili = "#";
                    }

                    if ($resultMakiling->num_rows >= 1 && ($resultMakiling->num_rows <=1)) {
                        $colorMakiling = $lowColor;
                    } else if ($resultMakiling->num_rows >= 2 && ($resultMakiling->num_rows <=4)) {
                     $colorMakiling = $mediumColor;
                    } else if ($resultMakiling->num_rows >= 5 ) {
                        $colorMakiling = $highColor;
                    } else {
                        $colorMakiling = "#";
                    }
                } else if ($choice == "nitrogen") {
                    //Which field will be used
                    $res = "res_n";
                    echo '<center><img src="assets/images/nitrogen.png"></center>';

                    //Open for optimization
                    $sqlCanlubangLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'low'";
                    $sqlCanlubangMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'medium'";
                    $sqlCanlubangHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'high'";
                    $sqlPuntaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'low'";
                    $sqlPuntaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'medium'";
                    $sqlPuntaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'high'";
                    $sqlMapagongLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'low'";
                    $sqlMapagongMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mapagong' AND " . $res . " LIKE 'medium'";
                    $sqlMapagongHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mapagong' AND " . $res . " LIKE 'high'";
                    $sqlSanCristobalLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'low'";
                    $sqlSanCristobalMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'medium'";
                    $sqlSanCristobalHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'high'";
                    $sqlUwisanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'low'";
                    $sqlUwisanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'medium'";
                    $sqlUwisanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'high'";
                    $sqLoocLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'low'";
                    $sqLoocMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'medium'";
                    $sqLoocHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'high'";
                    $sqlSampiruhanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'low'";
                    $sqlSampiruhanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'medium'";
                    $sqlSampiruhanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'high'";
                    $sqlPalingonLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'low'";
                    $sqlPalingonMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'medium'";
                    $sqlPalingonHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'high'";
                    $sqlLinggaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'low'";
                    $sqlLinggaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'medium'";
                    $sqlLinggaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'high'";
                    $sqlSanJuanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'low'";
                    $sqlSanJuanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'medium'";
                    $sqlSanJuanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'high'";
                    $sqlBanaderoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'low'";
                    $sqlBanaderoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'medium'";
                    $sqlBanaderoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'high'";
                    $sqlSanJoseLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'low'";
                    $sqlSanJoseMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'medium'";
                    $sqlSanJoseHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'high'";
                    $sqlPoblacionLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'low'";
                    $sqlPoblacionMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'medium'";
                    $sqlPoblacionHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'high'";
                    $sqlParianLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'low'";
                    $sqlParianMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'medium'";
                    $sqlParianHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'high'";
                    $sqlpaciano = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'low'";
                    $sqlpaciano = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'medium'";
                    $sqlpaciano = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'high'";
                    $sqlMayapaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'low'";
                    $sqlMayapaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'medium'";
                    $sqlMayapaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'high'";
                    $sqlSirangLupaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'low'";
                    $sqlSirangLupaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'medium'";
                    $sqlSirangLupaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'high'";
                    $sqlMajadaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'low'";
                    $sqlMajadaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'medium'";
                    $sqlMajadaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'high'";
                    $sqlPaloAltoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'low'";
                    $sqlPaloAltoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'medium'";
                    $sqlPaloAltoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'high'";
                    $sqlBarndalLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'low'";
                    $sqlBarndalMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'medium'";
                    $sqlBarndalHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'high'";
                    $sqlBatinoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'low'";
                    $sqlBatinoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'medium'";
                    $sqlBatinoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'high'";
                    $sqlLawaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'low'";
                    $sqlLawaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'medium'";
                    $sqlLawaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'high'";
                    $sqlRealLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'low'";
                    $sqlRealMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'medium'";
                    $sqlRealHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'high'";
                    $sqlPainzaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'low'";
                    $sqlPainzaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'medium'";
                    $sqlPainzaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'high'";
                    $sqlLecheriaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'low'";
                    $sqlLecheriaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'medium'";
                    $sqlLecheriaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'high'";
                    $sqlHalangLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'low'";
                    $sqlHalangMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'medium'";
                    $sqlHalangHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'high'";
                    $sqlTurbinaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'low'";
                    $sqlTurbinaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'medium'";
                    $sqlTurbinaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'high'";
                    $sqlBabuyanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'low'";
                    $sqlBabuyanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'medium'";
                    $sqlBabuyanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'high'";
                    $sqlLaguertaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'low'";
                    $sqlLaguertaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'medium'";
                    $sqlLaguertaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'high'";
                    $sqlHornalanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'low'";
                    $sqlHornalanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'medium'";
                    $sqlHornalanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'high'";
                    $sqlBunggoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'low'";
                    $sqlBunggoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'medium'";
                    $sqlBunggoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'high'";
                    $sqlBurolLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'low'";
                    $sqlBurolMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'medium'";
                    $sqlBurolHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'high'";
                    $sqlKayanlogLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'low'";
                    $sqlKayanlogMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'medium'";
                    $sqlKayanlogHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'high'";
                    $sqlUlangoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'low'";
                    $sqlUlangoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'medium'";
                    $sqlUlangoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'high'";
                    $sqlTuloLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'low'";
                    $sqlTuloMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'medium'";
                    $sqlTuloHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'high'";
                    $sqlLamesaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'low'";
                    $sqlLamesaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'medium'";
                    $sqlLamesaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'high'";
                    $sqlBucalLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'low'";
                    $sqlBucalMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'medium'";
                    $sqlBucalHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'high'";
                    $sqlPansolLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'low'";
                    $sqlPansolMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'medium'";
                    $sqlPansolHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'high'";
                    $sqlMaunongLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'low'";
                    $sqlMaunongMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'medium'";
                    $sqlMaunongHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'high'";
                    $sqlSaimsimLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'low'";
                    $sqlSaimsimMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'medium'";
                    $sqlSaimsimHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'high'";
                    $sqlCamaliganLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'low'";
                    $sqlCamaliganMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'medium'";
                    $sqlCamaliganHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'high'";
                    $sqlPutingLupaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'low'";
                    $sqlPutingLupaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'medium'";
                    $sqlPutingLupaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'high'";
                    $sqlBagongKalsadaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'low'";
                    $sqlBagongKalsadaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'medium'";
                    $sqlBagongKalsadaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'high'";
                    $sqlSucolLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'low'";
                    $sqlSucolMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'medium'";
                    $sqlSucolHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'high'";
                    $sqlMasiliLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'low'";
                    $sqlMasiliMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'medium'";
                    $sqlMasiliHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'high'";
                    $sqlMakilingLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'low'";
                    $sqlMakilingMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'medium'";
                    $sqlMakilingHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'high'";
                    $sqlMabatoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'low'";
                    $sqlMabatoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'medium'";
                    $sqlMabatoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'high'";
                    //holy fucking ineffiecient lmao

                    $resultCanlubangLow = $con->query($sqlCanlubangLow);
                    $resultCanlubangMedium = $con->query($sqlCanlubangMedium);
                    $resultCanlubangHigh = $con->query($sqlCanlubangHigh);
                    $resultPuntaLow = $con->query($sqlPuntaLow);
                    $resultPuntaMedium = $con->query($sqlPuntaMedium);
                    $resultPuntaHigh = $con->query($sqlPuntaHigh);
                    $resultMabatoLow = $con->query($sqlMabatoLow);
                    $resultMabatoMedium = $con->query($sqlMabatoMedium);
                    $resultMabatoHigh = $con->query($sqlMabatoHigh);
                    $resultMapagongLow = $con->query($sqlMapagongLow);
                    $resultMapagongMedium = $con->query($sqlMapagongMedium);
                    $resultMapagongHigh = $con->query($sqlMapagongHigh);
                    $resultSanCristobalLow = $con->query($sqlSanCristobalLow);
                    $resultSanCristobalMedium = $con->query($sqlSanCristobalMedium);
                    $resultSanCristobalHigh = $con->query($sqlSanCristobalHigh);
                    $resultUwisanLow = $con->query($sqlUwisanLow);
                    $resultUwisanMedium = $con->query($sqlUwisanMedium);
                    $resultUwisanHigh = $con->query($sqlUwisanHigh);
                    $resultLoocLow = $con->query($sqLoocLow);
                    $resultLoocMedium = $con->query($sqLoocMedium);
                    $resultLoocHigh = $con->query($sqLoocHigh);
                    $resultSampiruhanLow = $con->query($sqlSampiruhanLow);
                    $resultSampiruhanMedium = $con->query($sqlSampiruhanMedium);
                    $resultSampiruhanHigh = $con->query($sqlSampiruhanHigh);
                    $resultPalingonLow = $con->query($sqlPalingonLow);
                    $resultPalingonMedium = $con->query($sqlPalingonMedium);
                    $resultPalingonHigh = $con->query($sqlPalingonHigh);
                    $resultLinggaLow = $con->query($sqlLinggaLow);
                    $resultLinggaMedium = $con->query($sqlLinggaMedium);
                    $resultLinggaHigh = $con->query($sqlLinggaHigh);
                    $resultSanJuanLow = $con->query($sqlSanJuanLow);
                    $resultSanJuanMedium = $con->query($sqlSanJuanMedium);
                    $resultSanJuanHigh = $con->query($sqlSanJuanHigh);
                    $resultBanaderoLow = $con->query($sqlBanaderoLow);
                    $resultBanaderoMedium = $con->query($sqlBanaderoMedium);
                    $resultBanaderoHigh = $con->query($sqlBanaderoHigh);
                    $resultSanJoseLow = $con->query($sqlSanJoseLow);
                    $resultSanJoseMedium = $con->query($sqlSanJoseMedium);
                    $resultSanJoseHigh = $con->query($sqlSanJoseHigh);
                    $resultPoblacionLow = $con->query($sqlPoblacionLow);
                    $resultPoblacionMedium = $con->query($sqlPoblacionMedium);
                    $resultPoblacionHigh = $con->query($sqlPoblacionHigh);
                    $resultParianLow = $con->query($sqlParianLow);
                    $resultParianMedium = $con->query($sqlParianMedium);
                    $resultParianHigh = $con->query($sqlParianHigh);
                    $resultPacianoLow = $con->query($sqlpaciano);
                    $resultPacianoMedium = $con->query($sqlpaciano);
                    $resultPacianoHigh = $con->query($sqlpaciano);
                    $resultMayapaLow = $con->query($sqlMayapaLow);
                    $resultMayapaMedium = $con->query($sqlMayapaMedium);
                    $resultMayapaHigh = $con->query($sqlMayapaHigh);
                    $resultSirangLupaLow = $con->query($sqlSirangLupaLow);
                    $resultSirangLupaMedium = $con->query($sqlSirangLupaMedium);
                    $resultSirangLupaHigh = $con->query($sqlSirangLupaHigh);
                    $resultMajadaLow = $con->query($sqlMajadaLow);
                    $resultMajadaMedium = $con->query($sqlMajadaMedium);
                    $resultMajadaHigh = $con->query($sqlMajadaHigh);
                    $resultPaloAltoLow = $con->query($sqlPaloAltoLow);
                    $resultPaloAltoMedium = $con->query($sqlPaloAltoMedium);
                    $resultPaloAltoHigh = $con->query($sqlPaloAltoHigh);
                    $resultBarndalLow = $con->query($sqlBarndalLow);
                    $resultBarndalMedium = $con->query($sqlBarndalMedium);
                    $resultBarndalHigh = $con->query($sqlBarndalHigh);
                    $resultBatinoLow = $con->query($sqlBatinoLow);
                    $resultBatinoMedium = $con->query($sqlBatinoMedium);
                    $resultBatinoHigh = $con->query($sqlBatinoHigh);
                    $resultLawaLow = $con->query($sqlLawaLow);
                    $resultLawaMedium = $con->query($sqlLawaMedium);
                    $resultLawaHigh = $con->query($sqlLawaHigh);
                    $resultRealLow = $con->query($sqlRealLow);
                    $resultRealMedium = $con->query($sqlRealMedium);
                    $resultRealHigh = $con->query($sqlRealHigh);
                    $resultPainzaLow = $con->query($sqlPainzaLow);
                    $resultPainzaMedium = $con->query($sqlPainzaMedium);
                    $resultPainzaHigh = $con->query($sqlPainzaHigh);
                    $resultLecheriaLow = $con->query($sqlLecheriaLow);
                    $resultLecheriaMedium = $con->query($sqlLecheriaMedium);
                    $resultLecheriaHigh = $con->query($sqlLecheriaHigh);
                    $resultHalangLow = $con->query($sqlHalangLow);
                    $resultHalangMedium = $con->query($sqlHalangMedium);
                    $resultHalangHigh = $con->query($sqlHalangHigh);
                    $resultTurbinaLow = $con->query($sqlTurbinaLow);
                    $resultTurbinaMedium = $con->query($sqlTurbinaMedium);
                    $resultTurbinaHigh = $con->query($sqlTurbinaHigh);
                    $resultBabuyanLow = $con->query($sqlBabuyanLow);
                    $resultBabuyanMedium = $con->query($sqlBabuyanMedium);
                    $resultBabuyanHigh = $con->query($sqlBabuyanHigh);
                    $resultLaguertaLow = $con->query($sqlLaguertaLow);
                    $resultLaguertaMedium = $con->query($sqlLaguertaMedium);
                    $resultLaguertaHigh = $con->query($sqlLaguertaHigh);
                    $resultHornalanLow = $con->query($sqlHornalanLow);
                    $resultHornalanMedium = $con->query($sqlHornalanMedium);
                    $resultHornalanHigh = $con->query($sqlHornalanHigh);
                    $resultBunggoLow = $con->query($sqlBunggoLow);
                    $resultBunggoMedium = $con->query($sqlBunggoMedium);
                    $resultBunggoHigh = $con->query($sqlBunggoHigh);
                    $resultBurolLow = $con->query($sqlBurolLow);
                    $resultBurolMedium = $con->query($sqlBurolMedium);
                    $resultBurolHigh = $con->query($sqlBurolHigh);
                    $resultKayanlogLow = $con->query($sqlKayanlogLow);
                    $resultKayanlogMedium = $con->query($sqlKayanlogMedium);
                    $resultKayanlogHigh = $con->query($sqlKayanlogHigh);
                    $resultUlangoLow = $con->query($sqlUlangoLow);
                    $resultUlangoMedium = $con->query($sqlUlangoMedium);
                    $resultUlangoHigh = $con->query($sqlUlangoHigh);
                    $resultTuloLow = $con->query($sqlTuloLow);
                    $resultTuloMedium = $con->query($sqlTuloMedium);
                    $resultTuloHigh = $con->query($sqlTuloHigh);
                    $resultLamesaLow = $con->query($sqlLamesaLow);
                    $resultLamesaMedium = $con->query($sqlLamesaMedium);
                    $resultLamesaHigh = $con->query($sqlLamesaHigh);
                    $resultBucalLow = $con->query($sqlBucalLow);
                    $resultBucalMedium = $con->query($sqlBucalMedium);
                    $resultBucalHigh = $con->query($sqlBucalHigh);
                    $resultPansolLow = $con->query($sqlPansolLow);
                    $resultPansolMedium = $con->query($sqlPansolMedium);
                    $resultPansolHigh = $con->query($sqlPansolHigh);
                    $resultMaunongLow = $con->query($sqlMaunongLow);
                    $resultMaunongMedium = $con->query($sqlMaunongMedium);
                    $resultMaunongHigh = $con->query($sqlMaunongHigh);
                    $resultSaimsimLow = $con->query($sqlSaimsimLow);
                    $resultSaimsimMedium = $con->query($sqlSaimsimMedium);
                    $resultSaimsimHigh = $con->query($sqlSaimsimHigh);
                    $resultCamaliganLow = $con->query($sqlCamaliganLow);
                    $resultCamaliganMedium = $con->query($sqlCamaliganMedium);
                    $resultCamaliganHigh = $con->query($sqlCamaliganHigh);
                    $resultPutingLupaLow = $con->query($sqlPutingLupaLow);
                    $resultPutingLupaMedium = $con->query($sqlPutingLupaMedium);
                    $resultPutingLupaHigh = $con->query($sqlPutingLupaHigh);
                    $resultBagongKalsadaLow = $con->query($sqlBagongKalsadaLow);
                    $resultBagongKalsadaMedium = $con->query($sqlBagongKalsadaMedium);
                    $resultBagongKalsadaHigh = $con->query($sqlBagongKalsadaHigh);
                    $resultSucolLow = $con->query($sqlSucolLow);
                    $resultSucolMedium = $con->query($sqlSucolMedium);
                    $resultSucolHigh = $con->query($sqlSucolHigh);
                    $resultMasiliLow = $con->query($sqlMasiliLow);
                    $resultMasiliMedium = $con->query($sqlMasiliMedium);
                    $resultMasiliHigh = $con->query($sqlMasiliHigh);
                    $resultMakilingLow = $con->query($sqlMakilingLow);
                    $resultMakilingMedium = $con->query($sqlMakilingMedium);
                    $resultMakilingHigh = $con->query($sqlMakilingHigh);

                    //Crucial to lessen work

                    $lowColor = "#dca72b";
                    $lowmediumColor = "#dca72b";
                    $mediumColor = "#569b07 ";
                    $mediumhighColor = "#E2D820";
                    $highColor = "#036814";

                    $resultLow = $resultCanlubangLow->num_rows;
                    $resultMedium = $resultCanlubangMedium->num_rows;
                    $resultHigh = $resultCanlubangHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorCanlubang = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorCanlubang = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorCanlubang = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorCanlubang = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorCanlubang = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorCanlubang = $highColor;
                    } else {
                        $colorCanlubang = "#";
                    }}

                    $resultLow = $resultPuntaLow->num_rows;
                    $resultMedium = $resultPuntaMedium->num_rows;
                    $resultHigh = $resultPuntaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPunta = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPunta = $lowmediumColor;
                    }   else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPunta = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPunta = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPunta = $highColor;
                    } else {
                        $colorPunta = "#";
                    }}

                    $resultLow = $resultMapagongLow->num_rows;
                    $resultMedium = $resultMapagongMedium->num_rows;
                    $resultHigh = $resultMapagongHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorMapagong = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorMapagong = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorMapagong = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorMapagong = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorMapagong = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorMapagong = $highColor;
                    } else {
                        $colorMapagong = "#";
                    }}

                    $resultLow = $resultSanCristobalLow->num_rows;
                    $resultMedium = $resultSanCristobalMedium->num_rows;
                    $resultHigh = $resultSanCristobalHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorSanCristobal = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorSanCristobal = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorSanCristobal = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorSanCristobal = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorSanCristobal = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorSanCristobal = $highColor;
                    } else {
                        $colorSanCristobal = "#";
                    }}

                    $resultLow = $resultUwisanLow->num_rows;
                    $resultMedium = $resultUwisanMedium->num_rows;
                    $resultHigh = $resultUwisanHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorUwisan = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorUwisan = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorUwisan = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorUwisan = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorUwisan = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorUwisan = $highColor;
                    } else {
                        $colorUwisan = "#";
                    }}

                    $resultLow = $resultLoocLow->num_rows;
                    $resultMedium = $resultLoocMedium->num_rows;
                    $resultHigh = $resultLoocHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorLooc = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorLooc = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorLooc = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorLooc = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorLooc = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorLooc = $highColor;
                    } else {
                        $colorLooc = "#";
                    }}

                    $resultLow = $resultSampiruhanLow->num_rows;
                    $resultMedium = $resultSampiruhanMedium->num_rows;
                    $resultHigh = $resultSampiruhanHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorSampiruhan = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorSampiruhan = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorSampiruhan = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorSampiruhan = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorSampiruhan = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorSampiruhan = $highColor;
                    } else {
                        $colorSampiruhan = "#";
                    }}

                    $resultLow = $resultPalingonLow->num_rows;
                    $resultMedium = $resultPalingonMedium->num_rows;
                    $resultHigh = $resultPalingonHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPalingon = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPalingon = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorPalingon = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPalingon = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPalingon = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPalingon = $highColor;
                    } else {
                        $colorPalingon = "#";
                    }}

                    $resultLow = $resultLinggaLow->num_rows;
                    $resultMedium = $resultLinggaMedium->num_rows;
                    $resultHigh = $resultLinggaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorLingga = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorLingga = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorLingga = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorLingga = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorLingga = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorLingga = $highColor;
                    } else {
                        $colorLingga = "#";
                    }}

                    $resultLow = $resultSanJuanLow->num_rows;
                    $resultMedium = $resultSanJuanMedium->num_rows;
                    $resultHigh = $resultSanJuanHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorSanJuan = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorSanJuan = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorSanJuan = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorSanJuan = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorSanJuan = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorSanJuan = $highColor;
                    } else {
                        $colorSanJuan = "#";
                    }}

                    $resultLow = $resultBanaderoLow->num_rows;
                    $resultMedium = $resultBanaderoMedium->num_rows;
                    $resultHigh = $resultBanaderoHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBanadero = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBanadero = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBanadero = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBanadero = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBanadero = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBanadero = $highColor;
                    } else {
                        $colorBanadero = "#";
                    }}

                    $resultLow = $resultSanJoseLow->num_rows;
                    $resultMedium = $resultSanJoseMedium->num_rows;
                    $resultHigh = $resultSanJoseHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorSanJose = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorSanJose = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorSanJose = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorSanJose = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorSanJose = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorSanJose = $highColor;
                    } else {
                        $colorSanJose = "#";
                    }}

                    $resultLow = $resultPoblacionLow->num_rows;
                    $resultMedium = $resultPoblacionMedium->num_rows;
                    $resultHigh = $resultPoblacionHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPoblacion = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPoblacion = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorPoblacion = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPoblacion = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPoblacion = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPoblacion = $highColor;
                    } else {
                        $colorPoblacion = "#";
                    }}

                    $resultLow = $resultParianLow->num_rows;
                    $resultMedium = $resultParianMedium->num_rows;
                    $resultHigh = $resultParianHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorParian = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorParian = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorParian = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorParian = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorParian = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorParian = $highColor;
                    } else {
                        $colorParian = "#";
                    }}

                    $resultLow = $resultPacianoLow->num_rows;
                    $resultMedium = $resultPacianoMedium->num_rows;
                    $resultHigh = $resultPacianoHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPaciano = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPaciano = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorPaciano = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPaciano = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPaciano = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPaciano = $highColor;
                    } else {
                        $colorPaciano = "#";
                    }}

                    $resultLow = $resultMayapaLow->num_rows;
                    $resultMedium = $resultMayapaMedium->num_rows;
                    $resultHigh = $resultMayapaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorMayapa = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorMayapa = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorMayapa = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorMayapa = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorMayapa = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorMayapa = $highColor;
                    } else {
                        $colorMayapa = "#";
                    }}

                    $resultLow = $resultSirangLupaLow->num_rows;
                    $resultMedium = $resultSirangLupaMedium->num_rows;
                    $resultHigh = $resultSirangLupaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorSirangLupa = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorSirangLupa = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorSirangLupa = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorSirangLupa = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorSirangLupa = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorSirangLupa = $highColor;
                    } else {
                        $colorSirangLupa = "#";
                    }}

                    $resultLow = $resultMajadaLow->num_rows;
                    $resultMedium = $resultMajadaMedium->num_rows;
                    $resultHigh = $resultMajadaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorMajada = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorMajada = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorMajada = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorMajada = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorMajada = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorMajada = $highColor;
                    } else {
                        $colorMajada = "#";
                    }}

                    $resultLow = $resultPaloAltoLow->num_rows;
                    $resultMedium = $resultPaloAltoMedium->num_rows;
                    $resultHigh = $resultPaloAltoHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPaloAlto = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPaloAlto = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorPaloAlto = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPaloAlto = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPaloAlto = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPaloAlto = $highColor;
                    } else {
                        $colorPaloAlto = "#";
                    }}

                    $resultLow = $resultBarndalLow->num_rows;
                    $resultMedium = $resultBarndalMedium->num_rows;
                    $resultHigh = $resultBarndalHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBarndal = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBarndal = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBarndal = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBarndal = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBarndal = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBarndal = $highColor;
                    } else {
                        $colorBarndal = "#";
                    }}

                    $resultLow = $resultBatinoLow->num_rows;
                    $resultMedium = $resultBatinoMedium->num_rows;
                    $resultHigh = $resultBatinoHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBatino = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBatino = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBatino = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBatino = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBatino = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBatino = $highColor;
                    } else {
                        $colorBatino = "#";
                    }}

                    $resultLow = $resultLawaLow->num_rows;
                    $resultMedium = $resultLawaMedium->num_rows;
                    $resultHigh = $resultLawaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorLawa = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorLawa = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorLawa = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorLawa = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorLawa = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorLawa = $highColor;
                    } else {
                        $colorLawa = "#";
                    }}

                    $resultLow = $resultRealLow->num_rows;
                    $resultMedium = $resultRealMedium->num_rows;
                    $resultHigh = $resultRealHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorReal = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorReal = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorReal = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorReal = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorReal = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorReal = $highColor;
                    } else {
                        $colorReal = "#";
                    }}

                    $resultLow = $resultPainzaLow->num_rows;
                    $resultMedium = $resultPainzaMedium->num_rows;
                    $resultHigh = $resultPainzaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPainza = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPainza = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorPainza = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPainza = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPainza = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPainza = $highColor;
                    } else {
                        $colorPainza = "#";
                    }}

                    $resultLow = $resultLecheriaLow->num_rows;
                    $resultMedium = $resultLecheriaMedium->num_rows;
                    $resultHigh = $resultLecheriaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorLecheria = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorLecheria = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorLecheria = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorLecheria = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorLecheria = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorLecher = $highColor;
                    } else {
                        $colorLecheria = "#";
                    }}

                    $resultLow = $resultHalangLow->num_rows;
                    $resultMedium = $resultHalangMedium->num_rows;
                    $resultHigh = $resultHalangHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorHalang = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorHalang = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorHalang = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorHalang = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorHalang = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorHalang = $highColor;
                    } else {
                        $colorHalang = "#";
                    }}

                    $resultLow = $resultTurbinaLow->num_rows;
                    $resultMedium = $resultTurbinaMedium->num_rows;
                    $resultHigh = $resultTurbinaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorTurbina = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorTurbina = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorTurbina = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorTurbina = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorTurbina = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorTurbina = $highColor;
                    } else {
                        $colorTurbina = "#";
                    }}

                    $resultLow = $resultBabuyanLow->num_rows;
                    $resultMedium = $resultBabuyanMedium->num_rows;
                    $resultHigh = $resultBabuyanHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBabuyan = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBabuyan = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBabuyan = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBabuyan = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBabuyan = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBabuyan = $highColor;
                    } else {
                        $colorBabuyan = "#";
                    }}

                    $resultLow = $resultLaguertaLow->num_rows;
                    $resultMedium = $resultLaguertaMedium->num_rows;
                    $resultHigh = $resultLaguertaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorLaguerta = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorLaguerta = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorLaguerta = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorLaguerta = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorLaguerta = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorLaguerta = $highColor;
                    } else {
                        $colorLaguerta = "#";
                    }}

                    $resultLow = $resultHornalanLow->num_rows;
                    $resultMedium = $resultHornalanMedium->num_rows;
                    $resultHigh = $resultHornalanHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorHornalan = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorHornalan = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorHornalan = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorHornalan = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorHornalan = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorHornalan = $highColor;
                    } else {
                        $colorHornalan = "#";
                    }}

                    $resultLow = $resultBunggoLow->num_rows;
                    $resultMedium = $resultBunggoMedium->num_rows;
                    $resultHigh = $resultBunggoHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBunggo = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBunggo = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBunggo = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBunggo = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBunggo = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBunggo = $highColor;
                    } else {
                        $colorBunggo = "#";
                    }}

                    $resultLow = $resultMabatoLow->num_rows;
                    $resultMedium = $resultMabatoMedium->num_rows;
                    $resultHigh = $resultMabatoHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorMabato = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorMabato = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorMabato = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorMabato = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorMabato = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorMabato = $highColor;
                    } else {
                        $colorMabato = "#";
                    }}

                    $resultLow = $resultBurolLow->num_rows;
                    $resultMedium = $resultBurolMedium->num_rows;
                    $resultHigh = $resultBurolHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBurol = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBurol = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBurol = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBurol = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBurol = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBurol = $highColor;
                    } else {
                        $colorBurol = "#";
                    }}

                    $resultLow = $resultKayanlogLow->num_rows;
                    $resultMedium = $resultKayanlogMedium->num_rows;
                    $resultHigh = $resultKayanlogHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorKayanlog = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorKayanlog = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorKayanlog = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorKayanlog = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorKayanlog = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorKayanlog = $highColor;
                    } else {
                        $colorKayanlog = "#";
                    }}

                    $resultLow = $resultUlangoLow->num_rows;
                    $resultMedium = $resultUlangoMedium->num_rows;
                    $resultHigh = $resultUlangoHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorUlango = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorUlango = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorUlango = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorUlango = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorUlango = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorUlango = $highColor;
                    } else {
                        $colorUlango = "#";
                    }}

                    $resultLow = $resultTuloLow->num_rows;
                    $resultMedium = $resultTuloMedium->num_rows;
                    $resultHigh = $resultTuloHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorTulo = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorTulo = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorTulo = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorTulo = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorTulo = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorTulo = $highColor;
                    } else {
                        $colorTulo = "#";
                    }}

                    $resultLow = $resultLamesaLow->num_rows;
                    $resultMedium = $resultLamesaMedium->num_rows;
                    $resultHigh = $resultLamesaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorLamesa = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorLamesa = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorLamesa = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorLamesa = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorLamesa = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorLamesa = $highColor;
                    } else {
                        $colorLamesa = "#";
                    }}

                    $resultLow = $resultBucalLow->num_rows;
                    $resultMedium = $resultBucalMedium->num_rows;
                    $resultHigh = $resultBucalHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBucal = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBucal = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBucal = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBucal = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBucal = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBucal = $highColor;
                    } else {
                        $colorBucal = "#";
                    }}

                    $resultLow = $resultPansolLow->num_rows;
                    $resultMedium = $resultPansolMedium->num_rows;
                    $resultHigh = $resultPansolHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPansol = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPansol = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorPansol = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPansol = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPansol = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPansol = $highColor;
                    } else {
                        $colorPansol = "#";
                    }}

                    $resultLow = $resultMaunongLow->num_rows;
                    $resultMedium = $resultMaunongMedium->num_rows;
                    $resultHigh = $resultMaunongHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorMaunong = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorMaunong = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorMaunong = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorMaunong = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorMaunong = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorMaunong = $highColor;
                    } else {
                        $colorMaunong = "#";
                    }}

                    $resultLow = $resultSaimsimLow->num_rows;
                    $resultMedium = $resultSaimsimMedium->num_rows;
                    $resultHigh = $resultSaimsimHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorSaimsim = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorSaimsim = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorSaimsim = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorSaimsim = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorSaimsim = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorSaimsim = $highColor;
                    } else {
                        $colorSaimsim = "#";
                    }}

                    $resultLow = $resultCamaliganLow->num_rows;
                    $resultMedium = $resultCamaliganMedium->num_rows;
                    $resultHigh = $resultCamaliganHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorCamaligan = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorCamaligan = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorCamaligan = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorCamaligan = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorCamaligan = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorCamaligan = $highColor;
                    } else {
                        $colorCamaligan = "#";
                    }}

                    $resultLow = $resultPutingLupaLow->num_rows;
                    $resultMedium = $resultPutingLupaMedium->num_rows;
                    $resultHigh = $resultPutingLupaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorPutingLupa = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorPutingLupa = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorPutingLupa = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorPutingLupa = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorPuting = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorPutingLupa = $highColor;
                    } else {
                        $colorPutingLupa = "#";
                    }}

                    $resultLow = $resultBagongKalsadaLow->num_rows;
                    $resultMedium = $resultBagongKalsadaMedium->num_rows;
                    $resultHigh = $resultBagongKalsadaHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorBagongKalsada = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorBagongKalsada = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorBagongKalsada = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorBagongKalsada = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorBagongKalsada = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorBagongKalsada = $highColor;
                    } else {
                        $colorBagongKalsada = "#";
                    }}

                    $resultLow = $resultSucolLow->num_rows;
                    $resultMedium = $resultSucolMedium->num_rows;
                    $resultHigh = $resultSucolHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorSucol = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorSucol = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorSucol = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorSucol = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorSucol = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorSucol = $highColor;
                    } else {
                        $colorSucol = "#";
                    }}

                    $resultLow = $resultMasiliLow->num_rows;
                    $resultMedium = $resultMasiliMedium->num_rows;
                    $resultHigh = $resultMasiliHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorMasili = $lowColor;
                    } else if ($resultHigh != ($resultLow == $resultMedium)) {
                        $colorMasili = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorMasili = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorMasili = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorMasili = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorMasili = $highColor;
                    } else {
                        $colorMasili = "#";
                    }}

                    $resultLow = $resultMakilingLow->num_rows;
                    $resultMedium = $resultMakilingMedium->num_rows;
                    $resultHigh = $resultMakilingHigh->num_rows;

                    if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                    if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                        $colorMakiling = $lowColor;
                    } else if (($resultLow == $resultMedium)) {
                        $colorMakiling = $lowmediumColor;
                    } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                        $colorMakiling = $mediumColor;
                    } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                        $colorMakiling = $mediumColor;
                    } else if ($resultLow != ($resultMedium == $resultHigh)) {
                        $colorMakiling = $mediumhighColor;
                    } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                        $colorMakiling = $highColor;
                    } else {
                        $colorMakiling = "#";
                    } }
                } else if ($choice == "phosphorus") {

                //Which field will be used
                $res = "res_p";
                echo '<center><img src="assets/images/phosphorus.png"></center>';

                //Open for optimization
                $sqlCanlubangLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'low'";
                $sqlCanlubangMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'medium'";
                $sqlCanlubangHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'high'";
                $sqlPuntaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'low'";
                $sqlPuntaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'medium'";
                $sqlPuntaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'high'";
                $sqlMapagongLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'low'";
                $sqlMapagongMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mapagong' AND " . $res . " LIKE 'medium'";
                $sqlMapagongHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mapagong' AND " . $res . " LIKE 'high'";
                $sqlSanCristobalLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'low'";
                $sqlSanCristobalMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'medium'";
                $sqlSanCristobalHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'high'";
                $sqlUwisanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'low'";
                $sqlUwisanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'medium'";
                $sqlUwisanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'high'";
                $sqLoocLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'low'";
                $sqLoocMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'medium'";
                $sqLoocHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'high'";
                $sqlSampiruhanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'low'";
                $sqlSampiruhanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'medium'";
                $sqlSampiruhanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'high'";
                $sqlPalingonLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'low'";
                $sqlPalingonMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'medium'";
                $sqlPalingonHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'high'";
                $sqlLinggaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'low'";
                $sqlLinggaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'medium'";
                $sqlLinggaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'high'";
                $sqlSanJuanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'low'";
                $sqlSanJuanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'medium'";
                $sqlSanJuanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'high'";
                $sqlBanaderoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'low'";
                $sqlBanaderoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'medium'";
                $sqlBanaderoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'high'";
                $sqlSanJoseLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'low'";
                $sqlSanJoseMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'medium'";
                $sqlSanJoseHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'high'";
                $sqlPoblacionLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'low'";
                $sqlPoblacionMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'medium'";
                $sqlPoblacionHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'high'";
                $sqlParianLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'low'";
                $sqlParianMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'medium'";
                $sqlParianHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'high'";
                $sqlpaciano = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'low'";
                $sqlpaciano = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'medium'";
                $sqlpaciano = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'high'";
                $sqlMayapaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'low'";
                $sqlMayapaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'medium'";
                $sqlMayapaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'high'";
                $sqlSirangLupaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'low'";
                $sqlSirangLupaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'medium'";
                $sqlSirangLupaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'high'";
                $sqlMajadaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'low'";
                $sqlMajadaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'medium'";
                $sqlMajadaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'high'";
                $sqlPaloAltoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'low'";
                $sqlPaloAltoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'medium'";
                $sqlPaloAltoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'high'";
                $sqlBarndalLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'low'";
                $sqlBarndalMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'medium'";
                $sqlBarndalHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'high'";
                $sqlBatinoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'low'";
                $sqlBatinoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'medium'";
                $sqlBatinoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'high'";
                $sqlLawaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'low'";
                $sqlLawaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'medium'";
                $sqlLawaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'high'";
                $sqlRealLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'low'";
                $sqlRealMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'medium'";
                $sqlRealHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'high'";
                $sqlPainzaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'low'";
                $sqlPainzaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'medium'";
                $sqlPainzaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'high'";
                $sqlLecheriaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'low'";
                $sqlLecheriaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'medium'";
                $sqlLecheriaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'high'";
                $sqlHalangLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'low'";
                $sqlHalangMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'medium'";
                $sqlHalangHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'high'";
                $sqlTurbinaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'low'";
                $sqlTurbinaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'medium'";
                $sqlTurbinaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'high'";
                $sqlBabuyanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'low'";
                $sqlBabuyanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'medium'";
                $sqlBabuyanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'high'";
                $sqlLaguertaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'low'";
                $sqlLaguertaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'medium'";
                $sqlLaguertaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'high'";
                $sqlHornalanLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'low'";
                $sqlHornalanMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'medium'";
                $sqlHornalanHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'high'";
                $sqlBunggoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'low'";
                $sqlBunggoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'medium'";
                $sqlBunggoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'high'";
                $sqlBurolLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'low'";
                $sqlBurolMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'medium'";
                $sqlBurolHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'high'";
                $sqlKayanlogLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'low'";
                $sqlKayanlogMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'medium'";
                $sqlKayanlogHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'high'";
                $sqlUlangoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'low'";
                $sqlUlangoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'medium'";
                $sqlUlangoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'high'";
                $sqlTuloLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'low'";
                $sqlTuloMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'medium'";
                $sqlTuloHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'high'";
                $sqlLamesaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'low'";
                $sqlLamesaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'medium'";
                $sqlLamesaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'high'";
                $sqlBucalLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'low'";
                $sqlBucalMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'medium'";
                $sqlBucalHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'high'";
                $sqlPansolLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'low'";
                $sqlPansolMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'medium'";
                $sqlPansolHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'high'";
                $sqlMaunongLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'low'";
                $sqlMaunongMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'medium'";
                $sqlMaunongHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'high'";
                $sqlSaimsimLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'low'";
                $sqlSaimsimMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'medium'";
                $sqlSaimsimHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'high'";
                $sqlCamaliganLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'low'";
                $sqlCamaliganMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'medium'";
                $sqlCamaliganHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'high'";
                $sqlPutingLupaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'low'";
                $sqlPutingLupaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'medium'";
                $sqlPutingLupaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'high'";
                $sqlBagongKalsadaLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'low'";
                $sqlBagongKalsadaMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'medium'";
                $sqlBagongKalsadaHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'high'";
                $sqlSucolLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'low'";
                $sqlSucolMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'medium'";
                $sqlSucolHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'high'";
                $sqlMasiliLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'low'";
                $sqlMasiliMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'medium'";
                $sqlMasiliHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'high'";
                $sqlMakilingLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'low'";
                $sqlMakilingMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'medium'";
                $sqlMakilingHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'high'";
                $sqlMabatoLow = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'low'";
                $sqlMabatoMedium = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'medium'";
                $sqlMabatoHigh = "SELECT res_n FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'high'";
                //holy fucking ineffiecient lmao

                $resultCanlubangLow = $con->query($sqlCanlubangLow);
                $resultCanlubangMedium = $con->query($sqlCanlubangMedium);
                $resultCanlubangHigh = $con->query($sqlCanlubangHigh);
                $resultPuntaLow = $con->query($sqlPuntaLow);
                $resultPuntaMedium = $con->query($sqlPuntaMedium);
                $resultPuntaHigh = $con->query($sqlPuntaHigh);
                $resultMabatoLow = $con->query($sqlMabatoLow);
                $resultMabatoMedium = $con->query($sqlMabatoMedium);
                $resultMabatoHigh = $con->query($sqlMabatoHigh);
                $resultMapagongLow = $con->query($sqlMapagongLow);
                $resultMapagongMedium = $con->query($sqlMapagongMedium);
                $resultMapagongHigh = $con->query($sqlMapagongHigh);
                $resultSanCristobalLow = $con->query($sqlSanCristobalLow);
                $resultSanCristobalMedium = $con->query($sqlSanCristobalMedium);
                $resultSanCristobalHigh = $con->query($sqlSanCristobalHigh);
                $resultUwisanLow = $con->query($sqlUwisanLow);
                $resultUwisanMedium = $con->query($sqlUwisanMedium);
                $resultUwisanHigh = $con->query($sqlUwisanHigh);
                $resultLoocLow = $con->query($sqLoocLow);
                $resultLoocMedium = $con->query($sqLoocMedium);
                $resultLoocHigh = $con->query($sqLoocHigh);
                $resultSampiruhanLow = $con->query($sqlSampiruhanLow);
                $resultSampiruhanMedium = $con->query($sqlSampiruhanMedium);
                $resultSampiruhanHigh = $con->query($sqlSampiruhanHigh);
                $resultPalingonLow = $con->query($sqlPalingonLow);
                $resultPalingonMedium = $con->query($sqlPalingonMedium);
                $resultPalingonHigh = $con->query($sqlPalingonHigh);
                $resultLinggaLow = $con->query($sqlLinggaLow);
                $resultLinggaMedium = $con->query($sqlLinggaMedium);
                $resultLinggaHigh = $con->query($sqlLinggaHigh);
                $resultSanJuanLow = $con->query($sqlSanJuanLow);
                $resultSanJuanMedium = $con->query($sqlSanJuanMedium);
                $resultSanJuanHigh = $con->query($sqlSanJuanHigh);
                $resultBanaderoLow = $con->query($sqlBanaderoLow);
                $resultBanaderoMedium = $con->query($sqlBanaderoMedium);
                $resultBanaderoHigh = $con->query($sqlBanaderoHigh);
                $resultSanJoseLow = $con->query($sqlSanJoseLow);
                $resultSanJoseMedium = $con->query($sqlSanJoseMedium);
                $resultSanJoseHigh = $con->query($sqlSanJoseHigh);
                $resultPoblacionLow = $con->query($sqlPoblacionLow);
                $resultPoblacionMedium = $con->query($sqlPoblacionMedium);
                $resultPoblacionHigh = $con->query($sqlPoblacionHigh);
                $resultParianLow = $con->query($sqlParianLow);
                $resultParianMedium = $con->query($sqlParianMedium);
                $resultParianHigh = $con->query($sqlParianHigh);
                $resultPacianoLow = $con->query($sqlpaciano);
                $resultPacianoMedium = $con->query($sqlpaciano);
                $resultPacianoHigh = $con->query($sqlpaciano);
                $resultMayapaLow = $con->query($sqlMayapaLow);
                $resultMayapaMedium = $con->query($sqlMayapaMedium);
                $resultMayapaHigh = $con->query($sqlMayapaHigh);
                $resultSirangLupaLow = $con->query($sqlSirangLupaLow);
                $resultSirangLupaMedium = $con->query($sqlSirangLupaMedium);
                $resultSirangLupaHigh = $con->query($sqlSirangLupaHigh);
                $resultMajadaLow = $con->query($sqlMajadaLow);
                $resultMajadaMedium = $con->query($sqlMajadaMedium);
                $resultMajadaHigh = $con->query($sqlMajadaHigh);
                $resultPaloAltoLow = $con->query($sqlPaloAltoLow);
                $resultPaloAltoMedium = $con->query($sqlPaloAltoMedium);
                $resultPaloAltoHigh = $con->query($sqlPaloAltoHigh);
                $resultBarndalLow = $con->query($sqlBarndalLow);
                $resultBarndalMedium = $con->query($sqlBarndalMedium);
                $resultBarndalHigh = $con->query($sqlBarndalHigh);
                $resultBatinoLow = $con->query($sqlBatinoLow);
                $resultBatinoMedium = $con->query($sqlBatinoMedium);
                $resultBatinoHigh = $con->query($sqlBatinoHigh);
                $resultLawaLow = $con->query($sqlLawaLow);
                $resultLawaMedium = $con->query($sqlLawaMedium);
                $resultLawaHigh = $con->query($sqlLawaHigh);
                $resultRealLow = $con->query($sqlRealLow);
                $resultRealMedium = $con->query($sqlRealMedium);
                $resultRealHigh = $con->query($sqlRealHigh);
                $resultPainzaLow = $con->query($sqlPainzaLow);
                $resultPainzaMedium = $con->query($sqlPainzaMedium);
                $resultPainzaHigh = $con->query($sqlPainzaHigh);
                $resultLecheriaLow = $con->query($sqlLecheriaLow);
                $resultLecheriaMedium = $con->query($sqlLecheriaMedium);
                $resultLecheriaHigh = $con->query($sqlLecheriaHigh);
                $resultHalangLow = $con->query($sqlHalangLow);
                $resultHalangMedium = $con->query($sqlHalangMedium);
                $resultHalangHigh = $con->query($sqlHalangHigh);
                $resultTurbinaLow = $con->query($sqlTurbinaLow);
                $resultTurbinaMedium = $con->query($sqlTurbinaMedium);
                $resultTurbinaHigh = $con->query($sqlTurbinaHigh);
                $resultBabuyanLow = $con->query($sqlBabuyanLow);
                $resultBabuyanMedium = $con->query($sqlBabuyanMedium);
                $resultBabuyanHigh = $con->query($sqlBabuyanHigh);
                $resultLaguertaLow = $con->query($sqlLaguertaLow);
                $resultLaguertaMedium = $con->query($sqlLaguertaMedium);
                $resultLaguertaHigh = $con->query($sqlLaguertaHigh);
                $resultHornalanLow = $con->query($sqlHornalanLow);
                $resultHornalanMedium = $con->query($sqlHornalanMedium);
                $resultHornalanHigh = $con->query($sqlHornalanHigh);
                $resultBunggoLow = $con->query($sqlBunggoLow);
                $resultBunggoMedium = $con->query($sqlBunggoMedium);
                $resultBunggoHigh = $con->query($sqlBunggoHigh);
                $resultBurolLow = $con->query($sqlBurolLow);
                $resultBurolMedium = $con->query($sqlBurolMedium);
                $resultBurolHigh = $con->query($sqlBurolHigh);
                $resultKayanlogLow = $con->query($sqlKayanlogLow);
                $resultKayanlogMedium = $con->query($sqlKayanlogMedium);
                $resultKayanlogHigh = $con->query($sqlKayanlogHigh);
                $resultUlangoLow = $con->query($sqlUlangoLow);
                $resultUlangoMedium = $con->query($sqlUlangoMedium);
                $resultUlangoHigh = $con->query($sqlUlangoHigh);
                $resultTuloLow = $con->query($sqlTuloLow);
                $resultTuloMedium = $con->query($sqlTuloMedium);
                $resultTuloHigh = $con->query($sqlTuloHigh);
                $resultLamesaLow = $con->query($sqlLamesaLow);
                $resultLamesaMedium = $con->query($sqlLamesaMedium);
                $resultLamesaHigh = $con->query($sqlLamesaHigh);
                $resultBucalLow = $con->query($sqlBucalLow);
                $resultBucalMedium = $con->query($sqlBucalMedium);
                $resultBucalHigh = $con->query($sqlBucalHigh);
                $resultPansolLow = $con->query($sqlPansolLow);
                $resultPansolMedium = $con->query($sqlPansolMedium);
                $resultPansolHigh = $con->query($sqlPansolHigh);
                $resultMaunongLow = $con->query($sqlMaunongLow);
                $resultMaunongMedium = $con->query($sqlMaunongMedium);
                $resultMaunongHigh = $con->query($sqlMaunongHigh);
                $resultSaimsimLow = $con->query($sqlSaimsimLow);
                $resultSaimsimMedium = $con->query($sqlSaimsimMedium);
                $resultSaimsimHigh = $con->query($sqlSaimsimHigh);
                $resultCamaliganLow = $con->query($sqlCamaliganLow);
                $resultCamaliganMedium = $con->query($sqlCamaliganMedium);
                $resultCamaliganHigh = $con->query($sqlCamaliganHigh);
                $resultPutingLupaLow = $con->query($sqlPutingLupaLow);
                $resultPutingLupaMedium = $con->query($sqlPutingLupaMedium);
                $resultPutingLupaHigh = $con->query($sqlPutingLupaHigh);
                $resultBagongKalsadaLow = $con->query($sqlBagongKalsadaLow);
                $resultBagongKalsadaMedium = $con->query($sqlBagongKalsadaMedium);
                $resultBagongKalsadaHigh = $con->query($sqlBagongKalsadaHigh);
                $resultSucolLow = $con->query($sqlSucolLow);
                $resultSucolMedium = $con->query($sqlSucolMedium);
                $resultSucolHigh = $con->query($sqlSucolHigh);
                $resultMasiliLow = $con->query($sqlMasiliLow);
                $resultMasiliMedium = $con->query($sqlMasiliMedium);
                $resultMasiliHigh = $con->query($sqlMasiliHigh);
                $resultMakilingLow = $con->query($sqlMakilingLow);
                $resultMakilingMedium = $con->query($sqlMakilingMedium);
                $resultMakilingHigh = $con->query($sqlMakilingHigh);

                //Crucial to lessen work

                $lowColor = "#7db9ed";
                $lowmediumColor = "#3F90DD";
                $mediumColor = "#0066CC";
                $mediumhighColor = "#003399";
                $highColor = "#000066";

                $resultLow = $resultCanlubangLow->num_rows;
                $resultMedium = $resultCanlubangMedium->num_rows;
                $resultHigh = $resultCanlubangHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorCanlubang = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorCanlubang = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorCanlubang = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorCanlubang = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorCanlubang = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorCanlubang = $highColor;
                } else {
                    $colorCanlubang = "#";
                }}

                $resultLow = $resultPuntaLow->num_rows;
                $resultMedium = $resultPuntaMedium->num_rows;
                $resultHigh = $resultPuntaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPunta = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPunta = $lowmediumColor;
                }   else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPunta = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPunta = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPunta = $highColor;
                } else {
                    $colorPunta = "#";
                }}

                $resultLow = $resultMapagongLow->num_rows;
                $resultMedium = $resultMapagongMedium->num_rows;
                $resultHigh = $resultMapagongHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorMapagong = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorMapagong = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorMapagong = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorMapagong = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorMapagong = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorMapagong = $highColor;
                } else {
                    $colorMapagong = "#";
                }}

                $resultLow = $resultSanCristobalLow->num_rows;
                $resultMedium = $resultSanCristobalMedium->num_rows;
                $resultHigh = $resultSanCristobalHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorSanCristobal = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorSanCristobal = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorSanCristobal = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorSanCristobal = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorSanCristobal = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorSanCristobal = $highColor;
                } else {
                    $colorSanCristobal = "#";
                }}

                $resultLow = $resultUwisanLow->num_rows;
                $resultMedium = $resultUwisanMedium->num_rows;
                $resultHigh = $resultUwisanHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorUwisan = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorUwisan = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorUwisan = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorUwisan = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorUwisan = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorUwisan = $highColor;
                } else {
                    $colorUwisan = "#";
                }}

                $resultLow = $resultLoocLow->num_rows;
                $resultMedium = $resultLoocMedium->num_rows;
                $resultHigh = $resultLoocHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorLooc = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorLooc = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorLooc = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorLooc = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorLooc = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorLooc = $highColor;
                } else {
                    $colorLooc = "#";
                }}

                $resultLow = $resultSampiruhanLow->num_rows;
                $resultMedium = $resultSampiruhanMedium->num_rows;
                $resultHigh = $resultSampiruhanHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorSampiruhan = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorSampiruhan = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorSampiruhan = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorSampiruhan = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorSampiruhan = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorSampiruhan = $highColor;
                } else {
                    $colorSampiruhan = "#";
                }}

                $resultLow = $resultPalingonLow->num_rows;
                $resultMedium = $resultPalingonMedium->num_rows;
                $resultHigh = $resultPalingonHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPalingon = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPalingon = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorPalingon = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPalingon = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPalingon = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPalingon = $highColor;
                } else {
                    $colorPalingon = "#";
                }}

                $resultLow = $resultLinggaLow->num_rows;
                $resultMedium = $resultLinggaMedium->num_rows;
                $resultHigh = $resultLinggaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorLingga = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorLingga = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorLingga = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorLingga = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorLingga = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorLingga = $highColor;
                } else {
                    $colorLingga = "#";
                }}

                $resultLow = $resultSanJuanLow->num_rows;
                $resultMedium = $resultSanJuanMedium->num_rows;
                $resultHigh = $resultSanJuanHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorSanJuan = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorSanJuan = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorSanJuan = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorSanJuan = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorSanJuan = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorSanJuan = $highColor;
                } else {
                    $colorSanJuan = "#";
                }}

                $resultLow = $resultBanaderoLow->num_rows;
                $resultMedium = $resultBanaderoMedium->num_rows;
                $resultHigh = $resultBanaderoHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBanadero = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBanadero = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBanadero = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBanadero = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBanadero = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBanadero = $highColor;
                } else {
                    $colorBanadero = "#";
                }}

                $resultLow = $resultSanJoseLow->num_rows;
                $resultMedium = $resultSanJoseMedium->num_rows;
                $resultHigh = $resultSanJoseHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorSanJose = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorSanJose = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorSanJose = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorSanJose = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorSanJose = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorSanJose = $highColor;
                } else {
                    $colorSanJose = "#";
                }}

                $resultLow = $resultPoblacionLow->num_rows;
                $resultMedium = $resultPoblacionMedium->num_rows;
                $resultHigh = $resultPoblacionHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPoblacion = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPoblacion = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorPoblacion = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPoblacion = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPoblacion = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPoblacion = $highColor;
                } else {
                    $colorPoblacion = "#";
                }}

                $resultLow = $resultParianLow->num_rows;
                $resultMedium = $resultParianMedium->num_rows;
                $resultHigh = $resultParianHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorParian = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorParian = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorParian = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorParian = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorParian = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorParian = $highColor;
                } else {
                    $colorParian = "#";
                }}

                $resultLow = $resultPacianoLow->num_rows;
                $resultMedium = $resultPacianoMedium->num_rows;
                $resultHigh = $resultPacianoHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPaciano = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPaciano = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorPaciano = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPaciano = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPaciano = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPaciano = $highColor;
                } else {
                    $colorPaciano = "#";
                }}

                $resultLow = $resultMayapaLow->num_rows;
                $resultMedium = $resultMayapaMedium->num_rows;
                $resultHigh = $resultMayapaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorMayapa = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorMayapa = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorMayapa = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorMayapa = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorMayapa = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorMayapa = $highColor;
                } else {
                    $colorMayapa = "#";
                }}

                $resultLow = $resultSirangLupaLow->num_rows;
                $resultMedium = $resultSirangLupaMedium->num_rows;
                $resultHigh = $resultSirangLupaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorSirangLupa = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorSirangLupa = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorSirangLupa = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorSirangLupa = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorSirangLupa = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorSirangLupa = $highColor;
                } else {
                    $colorSirangLupa = "#";
                }}

                $resultLow = $resultMajadaLow->num_rows;
                $resultMedium = $resultMajadaMedium->num_rows;
                $resultHigh = $resultMajadaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorMajada = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorMajada = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorMajada = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorMajada = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorMajada = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorMajada = $highColor;
                } else {
                    $colorMajada = "#";
                }}

                $resultLow = $resultPaloAltoLow->num_rows;
                $resultMedium = $resultPaloAltoMedium->num_rows;
                $resultHigh = $resultPaloAltoHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPaloAlto = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPaloAlto = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorPaloAlto = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPaloAlto = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPaloAlto = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPaloAlto = $highColor;
                } else {
                    $colorPaloAlto = "#";
                }}

                $resultLow = $resultBarndalLow->num_rows;
                $resultMedium = $resultBarndalMedium->num_rows;
                $resultHigh = $resultBarndalHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBarndal = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBarndal = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBarndal = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBarndal = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBarndal = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBarndal = $highColor;
                } else {
                    $colorBarndal = "#";
                }}

                $resultLow = $resultBatinoLow->num_rows;
                $resultMedium = $resultBatinoMedium->num_rows;
                $resultHigh = $resultBatinoHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBatino = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBatino = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBatino = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBatino = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBatino = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBatino = $highColor;
                } else {
                    $colorBatino = "#";
                }}

                $resultLow = $resultLawaLow->num_rows;
                $resultMedium = $resultLawaMedium->num_rows;
                $resultHigh = $resultLawaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorLawa = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorLawa = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorLawa = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorLawa = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorLawa = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorLawa = $highColor;
                } else {
                    $colorLawa = "#";
                }}

                $resultLow = $resultRealLow->num_rows;
                $resultMedium = $resultRealMedium->num_rows;
                $resultHigh = $resultRealHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorReal = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorReal = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorReal = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorReal = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorReal = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorReal = $highColor;
                } else {
                    $colorReal = "#";
                }}

                $resultLow = $resultPainzaLow->num_rows;
                $resultMedium = $resultPainzaMedium->num_rows;
                $resultHigh = $resultPainzaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPainza = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPainza = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorPainza = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPainza = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPainza = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPainza = $highColor;
                } else {
                    $colorPainza = "#";
                }}

                $resultLow = $resultLecheriaLow->num_rows;
                $resultMedium = $resultLecheriaMedium->num_rows;
                $resultHigh = $resultLecheriaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorLecheria = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorLecheria = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorLecheria = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorLecheria = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorLecheria = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorLecher = $highColor;
                } else {
                    $colorLecheria = "#";
                }}

                $resultLow = $resultHalangLow->num_rows;
                $resultMedium = $resultHalangMedium->num_rows;
                $resultHigh = $resultHalangHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorHalang = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorHalang = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorHalang = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorHalang = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorHalang = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorHalang = $highColor;
                } else {
                    $colorHalang = "#";
                }}

                $resultLow = $resultTurbinaLow->num_rows;
                $resultMedium = $resultTurbinaMedium->num_rows;
                $resultHigh = $resultTurbinaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorTurbina = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorTurbina = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorTurbina = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorTurbina = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorTurbina = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorTurbina = $highColor;
                } else {
                    $colorTurbina = "#";
                }}

                $resultLow = $resultBabuyanLow->num_rows;
                $resultMedium = $resultBabuyanMedium->num_rows;
                $resultHigh = $resultBabuyanHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBabuyan = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBabuyan = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBabuyan = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBabuyan = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBabuyan = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBabuyan = $highColor;
                } else {
                    $colorBabuyan = "#";
                }}

                $resultLow = $resultLaguertaLow->num_rows;
                $resultMedium = $resultLaguertaMedium->num_rows;
                $resultHigh = $resultLaguertaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorLaguerta = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorLaguerta = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorLaguerta = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorLaguerta = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorLaguerta = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorLaguerta = $highColor;
                } else {
                    $colorLaguerta = "#";
                }}

                $resultLow = $resultHornalanLow->num_rows;
                $resultMedium = $resultHornalanMedium->num_rows;
                $resultHigh = $resultHornalanHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorHornalan = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorHornalan = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorHornalan = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorHornalan = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorHornalan = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorHornalan = $highColor;
                } else {
                    $colorHornalan = "#";
                }}

                $resultLow = $resultBunggoLow->num_rows;
                $resultMedium = $resultBunggoMedium->num_rows;
                $resultHigh = $resultBunggoHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBunggo = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBunggo = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBunggo = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBunggo = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBunggo = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBunggo = $highColor;
                } else {
                    $colorBunggo = "#";
                }}

                $resultLow = $resultMabatoLow->num_rows;
                $resultMedium = $resultMabatoMedium->num_rows;
                $resultHigh = $resultMabatoHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorMabato = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorMabato = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorMabato = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorMabato = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorMabato = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorMabato = $highColor;
                } else {
                    $colorMabato = "#";
                }}

                $resultLow = $resultBurolLow->num_rows;
                $resultMedium = $resultBurolMedium->num_rows;
                $resultHigh = $resultBurolHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBurol = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBurol = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBurol = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBurol = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBurol = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBurol = $highColor;
                } else {
                    $colorBurol = "#";
                }}

                $resultLow = $resultKayanlogLow->num_rows;
                $resultMedium = $resultKayanlogMedium->num_rows;
                $resultHigh = $resultKayanlogHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorKayanlog = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorKayanlog = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorKayanlog = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorKayanlog = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorKayanlog = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorKayanlog = $highColor;
                } else {
                    $colorKayanlog = "#";
                }}

                $resultLow = $resultUlangoLow->num_rows;
                $resultMedium = $resultUlangoMedium->num_rows;
                $resultHigh = $resultUlangoHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorUlango = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorUlango = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorUlango = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorUlango = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorUlango = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorUlango = $highColor;
                } else {
                    $colorUlango = "#";
                }}

                $resultLow = $resultTuloLow->num_rows;
                $resultMedium = $resultTuloMedium->num_rows;
                $resultHigh = $resultTuloHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorTulo = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorTulo = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorTulo = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorTulo = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorTulo = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorTulo = $highColor;
                } else {
                    $colorTulo = "#";
                }}

                $resultLow = $resultLamesaLow->num_rows;
                $resultMedium = $resultLamesaMedium->num_rows;
                $resultHigh = $resultLamesaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorLamesa = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorLamesa = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorLamesa = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorLamesa = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorLamesa = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorLamesa = $highColor;
                } else {
                    $colorLamesa = "#";
                }}

                $resultLow = $resultBucalLow->num_rows;
                $resultMedium = $resultBucalMedium->num_rows;
                $resultHigh = $resultBucalHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBucal = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBucal = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBucal = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBucal = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBucal = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBucal = $highColor;
                } else {
                    $colorBucal = "#";
                }}

                $resultLow = $resultPansolLow->num_rows;
                $resultMedium = $resultPansolMedium->num_rows;
                $resultHigh = $resultPansolHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPansol = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPansol = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorPansol = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPansol = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPansol = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPansol = $highColor;
                } else {
                    $colorPansol = "#";
                }}

                $resultLow = $resultMaunongLow->num_rows;
                $resultMedium = $resultMaunongMedium->num_rows;
                $resultHigh = $resultMaunongHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorMaunong = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorMaunong = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorMaunong = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorMaunong = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorMaunong = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorMaunong = $highColor;
                } else {
                    $colorMaunong = "#";
                }}

                $resultLow = $resultSaimsimLow->num_rows;
                $resultMedium = $resultSaimsimMedium->num_rows;
                $resultHigh = $resultSaimsimHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorSaimsim = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorSaimsim = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorSaimsim = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorSaimsim = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorSaimsim = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorSaimsim = $highColor;
                } else {
                    $colorSaimsim = "#";
                }}

                $resultLow = $resultCamaliganLow->num_rows;
                $resultMedium = $resultCamaliganMedium->num_rows;
                $resultHigh = $resultCamaliganHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorCamaligan = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorCamaligan = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorCamaligan = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorCamaligan = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorCamaligan = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorCamaligan = $highColor;
                } else {
                    $colorCamaligan = "#";
                }}

                $resultLow = $resultPutingLupaLow->num_rows;
                $resultMedium = $resultPutingLupaMedium->num_rows;
                $resultHigh = $resultPutingLupaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorPutingLupa = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorPutingLupa = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorPutingLupa = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorPutingLupa = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorPuting = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorPutingLupa = $highColor;
                } else {
                    $colorPutingLupa = "#";
                }}

                $resultLow = $resultBagongKalsadaLow->num_rows;
                $resultMedium = $resultBagongKalsadaMedium->num_rows;
                $resultHigh = $resultBagongKalsadaHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorBagongKalsada = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorBagongKalsada = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorBagongKalsada = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorBagongKalsada = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorBagongKalsada = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorBagongKalsada = $highColor;
                } else {
                    $colorBagongKalsada = "#";
                }}

                $resultLow = $resultSucolLow->num_rows;
                $resultMedium = $resultSucolMedium->num_rows;
                $resultHigh = $resultSucolHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorSucol = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorSucol = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorSucol = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorSucol = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorSucol = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorSucol = $highColor;
                } else {
                    $colorSucol = "#";
                }}

                $resultLow = $resultMasiliLow->num_rows;
                $resultMedium = $resultMasiliMedium->num_rows;
                $resultHigh = $resultMasiliHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorMasili = $lowColor;
                } else if ($resultHigh != ($resultLow == $resultMedium)) {
                    $colorMasili = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorMasili = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorMasili = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorMasili = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorMasili = $highColor;
                } else {
                    $colorMasili = "#";
                }}

                $resultLow = $resultMakilingLow->num_rows;
                $resultMedium = $resultMakilingMedium->num_rows;
                $resultHigh = $resultMakilingHigh->num_rows;

                if ($resultLow != 0 || $resultMedium != 0 || $resultHigh != 0){
                if (($resultLow > $resultMedium) && ($resultLow > $resultHigh)) {
                    $colorMakiling = $lowColor;
                } else if (($resultLow == $resultMedium)) {
                    $colorMakiling = $lowmediumColor;
                } else if (($resultLow == $resultMedium) && ($resultLow == $resultHigh)) {
                    $colorMakiling = $mediumColor;
                } else if (($resultMedium > $resultLow) && ($resultMedium > $resultHigh)) {
                    $colorMakiling = $mediumColor;
                } else if ($resultLow != ($resultMedium == $resultHigh)) {
                    $colorMakiling = $mediumhighColor;
                } else if (($resultHigh > $resultLow) && ($resultHigh > $resultMedium)) {
                    $colorMakiling = $highColor;
                } else {
                    $colorMakiling = "#";
                } }
              } else if ($choice == "potassium") {
                         //Which field will be used
                         echo '<center><img src="assets/images/potassium.png"></center>';
                         $res = "res_k";

                         //Open for optimization
                         $sqlCanlubangSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'sufficient'";
                         $sqlCanlubangDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'canlubang' AND " . $res . " LIKE 'deficient'";

                         $sqlPuntaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'sufficient'";
                         $sqlPuntaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'deficient'";

                         $sqlMapagongSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'punta' AND " . $res . " LIKE 'sufficient'";
                         $sqlMapagongDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'mapagong' AND " . $res . " LIKE 'deficientium'";

                         $sqlSanCristobalSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'sufficient'";
                         $sqlSanCristobalDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sancristobal' AND " . $res . " LIKE 'deficient'";

                         $sqlUwisanSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'sufficient'";
                         $sqlUwisanDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'uwisan' AND " . $res . " LIKE 'deficient'";

                         $sqLoocSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'sufficient'";
                         $sqLoocDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'looc' AND " . $res . " LIKE 'deficient'";

                         $sqlSampiruhanSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'sufficient'";
                         $sqlSampiruhanDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sampiruhan' AND " . $res . " LIKE 'deficient'";

                         $sqlPalingonSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'sufficient'";
                         $sqlPalingonDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'palingon' AND " . $res . " LIKE 'deficient'";

                         $sqlLinggaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'sufficient'";
                         $sqlLinggaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lingga' AND " . $res . " LIKE 'deficient'";

                         $sqlSanJuanSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'sufficient'";
                         $sqlSanJuanDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sanjuan' AND " . $res . " LIKE 'deficient'";

                         $sqlBanaderoSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'sufficient'";
                         $sqlBanaderoDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'banadero' AND " . $res . " LIKE 'deficient'";

                         $sqlSanJoseSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'sufficient'";
                         $sqlSanJoseDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sanjose' AND " . $res . " LIKE 'deficient'";

                         $sqlPoblacionSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'sufficient'";
                         $sqlPoblacionDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'poblacion' AND " . $res . " LIKE 'deficient'";

                         $sqlParianSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'sufficient'";
                         $sqlParianDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'parian' AND " . $res . " LIKE 'deficient'";

                         $sqlpacianoSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'sufficient'";
                         $sqlpacianoDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'paciano' AND " . $res . " LIKE 'deficient'";

                         $sqlMayapaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'sufficient'";
                         $sqlMayapaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'mayapa' AND " . $res . " LIKE 'deficient'";

                         $sqlSirangLupaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'sufficient'";
                         $sqlSirangLupaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'siranglupa' AND " . $res . " LIKE 'deficient'";

                         $sqlMajadaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'sufficient'";
                         $sqlMajadaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'majada' AND " . $res . " LIKE 'deficient'";

                         $sqlPaloAltoSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'sufficient'";
                         $sqlPaloAltoDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'paloalto' AND " . $res . " LIKE 'deficient'";

                         $sqlBarndalSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'sufficient'";
                         $sqlBarndalDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'barndal' AND " . $res . " LIKE 'deficient'";

                         $sqlBatinoSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'sufficient'";
                         $sqlBatinoDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'batino' AND " . $res . " LIKE 'deficient'";

                         $sqlLawaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'sufficient'";
                         $sqlLawaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lawa' AND " . $res . " LIKE 'deficient'";

                         $sqlRealSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'sufficient'";
                         $sqlRealDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'real' AND " . $res . " LIKE 'deficient'";

                         $sqlPainzaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'sufficient'";
                         $sqlPainzaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'painza' AND " . $res . " LIKE 'deficient'";

                         $sqlLecheriaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'sufficient'";
                         $sqlLecheriaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lecheria' AND " . $res . " LIKE 'deficient'";

                         $sqlHalangSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'sufficient'";
                         $sqlHalangDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'halang' AND " . $res . " LIKE 'deficient'";

                         $sqlTurbinaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'sufficient'";
                         $sqlTurbinaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'turbina' AND " . $res . " LIKE 'deficient'";

                         $sqlBabuyanSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'sufficient'";
                         $sqlBabuyanDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'babuyan' AND " . $res . " LIKE 'deficient'";

                         $sqlLaguertaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'sufficient'";
                         $sqlLaguertaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'laguerta' AND " . $res . " LIKE 'deficient'";

                         $sqlHornalanSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'sufficient'";
                         $sqlHornalanDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'hornalan' AND " . $res . " LIKE 'deficient'";

                         $sqlBunggoSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'sufficient'";
                         $sqlBunggoDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'bunggo' AND " . $res . " LIKE 'deficient'";

                         $sqlBurolSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'sufficient'";
                         $sqlBurolDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'burol' AND " . $res . " LIKE 'deficient'";

                         $sqlKayanlogSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'sufficient'";
                         $sqlKayanlogDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'kayanlog' AND " . $res . " LIKE 'deficient'";

                         $sqlUlangoSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'sufficient'";
                         $sqlUlangoDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'ulango' AND " . $res . " LIKE 'deficient'";

                         $sqlTuloSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'sufficient'";
                         $sqlTuloDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'tulo' AND " . $res . " LIKE 'deficient'";

                         $sqlLamesaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'sufficient'";
                         $sqlLamesaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'lamesa' AND " . $res . " LIKE 'deficient'";

                         $sqlBucalSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'sufficient'";
                         $sqlBucalDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'bucal' AND " . $res . " LIKE 'deficient'";

                         $sqlPansolSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'sufficient'";
                         $sqlPansolDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'pansol' AND " . $res . " LIKE 'deficient'";

                         $sqlMaunongSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'sufficient'";
                         $sqlMaunongDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'maunong' AND " . $res . " LIKE 'deficient'";

                         $sqlSaimsimSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'sufficient'";
                         $sqlSaimsimDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'saimsim' AND " . $res . " LIKE 'deficient'";

                         $sqlCamaliganSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'sufficient'";
                         $sqlCamaliganDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'camaligan' AND " . $res . " LIKE 'deficient'";

                         $sqlPutingLupaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'sufficient'";
                         $sqlPutingLupaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'putinglupa' AND " . $res . " LIKE 'deficient'";

                         $sqlBagongKalsadaSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'sufficient'";
                         $sqlBagongKalsadaDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'bagongkalsada' AND " . $res . " LIKE 'deficient'";

                         $sqlSucolSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'sufficient'";
                         $sqlSucolDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'sucol' AND " . $res . " LIKE 'deficient'";

                         $sqlMasiliSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'sufficient'";
                         $sqlMasiliDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'masili' AND " . $res . " LIKE 'deficient'";

                         $sqlMakilingSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'sufficient'";
                         $sqlMakilingDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'makiling' AND " . $res . " LIKE 'deficient'";

                         $sqlMabatoSufficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'sufficient'";
                         $sqlMabatoDeficient = "SELECT res_k FROM tblresults WHERE brgy LIKE 'mabato' AND " . $res . " LIKE 'deficient'";

                         //holy fucking ineffiecient lmao

                         $resultCanlubangSufficient = $con->query($sqlCanlubangSufficient);
                         $resultCanlubangDeficient = $con->query($sqlCanlubangDeficient);

                         $resultPuntaSufficient = $con->query($sqlPuntaSufficient);
                         $resultPuntaDeficient = $con->query($sqlPuntaDeficient);

                         $resultMabatoSufficient = $con->query($sqlMabatoSufficient);
                         $resultMabatoDeficient = $con->query($sqlMabatoDeficient);

                         $resultMapagongSufficient = $con->query($sqlMapagongSufficient);
                         $resultMapagongDeficient = $con->query($sqlMapagongDeficient);

                         $resultSanCristobalSufficient = $con->query($sqlSanCristobalSufficient);
                         $resultSanCristobalDeficient = $con->query($sqlSanCristobalDeficient);

                         $resultUwisanSufficient = $con->query($sqlUwisanSufficient);
                         $resultUwisanDeficient = $con->query($sqlUwisanDeficient);

                         $resultLoocSufficient = $con->query($sqLoocSufficient);
                         $resultLoocDeficient = $con->query($sqLoocDeficient);

                         $resultSampiruhanSufficient = $con->query($sqlSampiruhanSufficient);
                         $resultSampiruhanDeficient = $con->query($sqlSampiruhanDeficient);

                         $resultPalingonSufficient = $con->query($sqlPalingonSufficient);
                         $resultPalingonDeficient = $con->query($sqlPalingonDeficient);

                         $resultLinggaSufficient = $con->query($sqlLinggaSufficient);
                         $resultLinggaDeficient = $con->query($sqlLinggaDeficient);

                         $resultSanJuanSufficient = $con->query($sqlSanJuanSufficient);
                         $resultSanJuanDeficient = $con->query($sqlSanJuanDeficient);

                         $resultBanaderoSufficient = $con->query($sqlBanaderoSufficient);
                         $resultBanaderoDeficient = $con->query($sqlBanaderoDeficient);

                         $resultSanJoseSufficient = $con->query($sqlSanJoseSufficient);
                         $resultSanJoseDeficient = $con->query($sqlSanJoseDeficient);

                         $resultPoblacionSufficient = $con->query($sqlPoblacionSufficient);
                         $resultPoblacionDeficient = $con->query($sqlPoblacionDeficient);

                         $resultParianSufficient = $con->query($sqlParianSufficient);
                         $resultParianDeficient = $con->query($sqlParianDeficient);

                         $resultPacianoSufficient = $con->query($sqlpacianoSufficient);
                         $resultPacianoDeficient = $con->query($sqlpacianoDeficient);

                         $resultMayapaSufficient = $con->query($sqlMayapaSufficient);
                         $resultMayapaDeficient = $con->query($sqlMayapaDeficient);

                         $resultSirangLupaSufficient = $con->query($sqlSirangLupaSufficient);
                         $resultSirangLupaDeficient = $con->query($sqlSirangLupaDeficient);

                         $resultMajadaSufficient = $con->query($sqlMajadaSufficient);
                         $resultMajadaDeficient = $con->query($sqlMajadaDeficient);

                         $resultPaloAltoSufficient = $con->query($sqlPaloAltoSufficient);
                         $resultPaloAltoDeficient = $con->query($sqlPaloAltoDeficient);

                         $resultBarndalSufficient = $con->query($sqlBarndalSufficient);
                         $resultBarndalDeficient = $con->query($sqlBarndalDeficient);

                         $resultBatinoSufficient = $con->query($sqlBatinoSufficient);
                         $resultBatinoDeficient = $con->query($sqlBatinoDeficient);

                         $resultLawaSufficient = $con->query($sqlLawaSufficient);
                         $resultLawaDeficient = $con->query($sqlLawaDeficient);

                         $resultRealSufficient = $con->query($sqlRealSufficient);
                         $resultRealDeficient = $con->query($sqlRealDeficient);

                         $resultPainzaSufficient = $con->query($sqlPainzaSufficient);
                         $resultPainzaDeficient = $con->query($sqlPainzaDeficient);

                         $resultLecheriaSufficient = $con->query($sqlLecheriaSufficient);
                         $resultLecheriaDeficient = $con->query($sqlLecheriaDeficient);

                         $resultHalangSufficient = $con->query($sqlHalangSufficient);
                         $resultHalangDeficient = $con->query($sqlHalangDeficient);

                         $resultTurbinaSufficient = $con->query($sqlTurbinaSufficient);
                         $resultTurbinaDeficient = $con->query($sqlTurbinaDeficient);

                         $resultBabuyanSufficient = $con->query($sqlBabuyanSufficient);
                         $resultBabuyanDeficient = $con->query($sqlBabuyanDeficient);

                         $resultLaguertaSufficient = $con->query($sqlLaguertaSufficient);
                         $resultLaguertaDeficient = $con->query($sqlLaguertaDeficient);

                         $resultHornalanSufficient = $con->query($sqlHornalanSufficient);
                         $resultHornalanDeficient = $con->query($sqlHornalanDeficient);

                         $resultBunggoSufficient = $con->query($sqlBunggoSufficient);
                         $resultBunggoDeficient = $con->query($sqlBunggoDeficient);

                         $resultBurolSufficient = $con->query($sqlBurolSufficient);
                         $resultBurolDeficient = $con->query($sqlBurolDeficient);

                         $resultKayanlogSufficient = $con->query($sqlKayanlogSufficient);
                         $resultKayanlogDeficient = $con->query($sqlKayanlogDeficient);

                         $resultUlangoSufficient = $con->query($sqlUlangoSufficient);
                         $resultUlangoDeficient = $con->query($sqlUlangoDeficient);

                         $resultTuloSufficient = $con->query($sqlTuloSufficient);
                         $resultTuloDeficient = $con->query($sqlTuloDeficient);

                         $resultLamesaSufficient = $con->query($sqlLamesaSufficient);
                         $resultLamesaDeficient = $con->query($sqlLamesaDeficient);

                         $resultBucalSufficient = $con->query($sqlBucalSufficient);
                         $resultBucalDeficient = $con->query($sqlBucalDeficient);

                         $resultPansolSufficient = $con->query($sqlPansolSufficient);
                         $resultPansolDeficient = $con->query($sqlPansolDeficient);

                         $resultMaunongSufficient = $con->query($sqlMaunongSufficient);
                         $resultMaunongDeficient = $con->query($sqlMaunongDeficient);

                         $resultSaimsimSufficient = $con->query($sqlSaimsimSufficient);
                         $resultSaimsimDeficient = $con->query($sqlSaimsimDeficient);

                         $resultCamaliganSufficient = $con->query($sqlCamaliganSufficient);
                         $resultCamaliganDeficient = $con->query($sqlCamaliganDeficient);

                         $resultPutingLupaSufficient = $con->query($sqlPutingLupaSufficient);
                         $resultPutingLupaDeficient = $con->query($sqlPutingLupaDeficient);

                         $resultBagongKalsadaSufficient = $con->query($sqlBagongKalsadaSufficient);
                         $resultBagongKalsadaDeficient = $con->query($sqlBagongKalsadaDeficient);

                         $resultSucolSufficient = $con->query($sqlSucolSufficient);
                         $resultSucolDeficient = $con->query($sqlSucolDeficient);

                         $resultMasiliSufficient = $con->query($sqlMasiliSufficient);
                         $resultMasiliDeficient = $con->query($sqlMasiliDeficient);

                         $resultMakilingSufficient = $con->query($sqlMakilingSufficient);
                         $resultMakilingDeficient = $con->query($sqlMakilingDeficient);


                         //Crucial to lessen work

                         $deficient = "#FDB813";
                         $sufidefi = "#E4D270";
                         $sufficient = "#CCCCCC";

                         $resultSufficient = $resultCanlubangSufficient->num_rows;
                         $resultDeficientf = $resultCanlubangDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if (($resultSufficient > $resultDeficientf)) {
                             $colorCanlubang = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorCanlubang = $suffidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorCanlubang = $deficient;
                         } else {
                             $colorCanlubang = "#";
                         }}

                         $resultSufficient = $resultPuntaSufficient->num_rows;
                         $resultDeficientf = $resultPuntaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPunta = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPunta = $sufidefi;
                         } else {
                             $colorPunta = "#";
                         }}

                         $resultSufficient = $resultMapagongSufficient->num_rows;
                         $resultDeficientf = $resultMapagongDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorMapagong = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorMapagong = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorMapagong = $deficient;
                         } else {
                             $colorMapagong = "#";
                         }}

                         $resultSufficient = $resultSanCristobalSufficient->num_rows;
                         $resultDeficientf = $resultSanCristobalDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorSanCristobal = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorSanCristobal = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorSanCristobal = $deficient;
                         } else {
                             $colorSanCristobal = "#";
                         }}

                         $resultSufficient = $resultUwisanSufficient->num_rows;
                         $resultDeficientf = $resultUwisanDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorUwisan = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorUwisan = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorUwisan = $deficient;
                         } else {
                             $colorUwisan = "#";
                         }}

                         $resultSufficient = $resultLoocSufficient->num_rows;
                         $resultDeficientf = $resultLoocDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorLooc = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorLooc = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorLooc = $deficient;
                         } else {
                             $colorLooc = "#";
                         }}

                         $resultSufficient = $resultSampiruhanSufficient->num_rows;
                         $resultDeficientf = $resultSampiruhanDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorSampiruhan = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorSampiruhan = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorSampiruhan = $deficient;
                         } else {
                             $colorSampiruhan = "#";
                         }}

                         $resultSufficient = $resultPalingonSufficient->num_rows;
                         $resultDeficientf = $resultPalingonDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPalingon = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPalingon = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorPalingon = $deficient;
                         } else {
                             $colorPalingon = "#";
                         }}

                         $resultSufficient = $resultLinggaSufficient->num_rows;
                         $resultDeficientf = $resultLinggaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorLingga = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorLingga = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorLingga = $deficient;
                         } else {
                             $colorLingga = "#";
                         }}

                         $resultSufficient = $resultSanJuanSufficient->num_rows;
                         $resultDeficientf = $resultSanJuanDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorSanJuan = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorSanJuan = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorSanJuan = $deficient;
                         } else {
                             $colorSanJuan = "#";
                         }}

                         $resultSufficient = $resultBanaderoSufficient->num_rows;
                         $resultDeficientf = $resultBanaderoDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBanadero = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBanadero = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBanadero = $deficient;
                         } else {
                             $colorBanadero = "#";
                         }}

                         $resultSufficient = $resultSanJoseSufficient->num_rows;
                         $resultDeficientf = $resultSanJoseDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorSanJose = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorSanJose = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorSanJose = $deficient;
                         } else {
                             $colorSanJose = "#";
                         }}

                         $resultSufficient = $resultPoblacionSufficient->num_rows;
                         $resultDeficientf = $resultPoblacionDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPoblacion = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPoblacion = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorPoblacion = $deficient;
                         } else {
                             $colorPoblacion = "#";
                         }}

                         $resultSufficient = $resultParianSufficient->num_rows;
                         $resultDeficientf = $resultParianDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorParian = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorParian = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorParian = $deficient;
                         } else {
                             $colorParian = "#";
                         }}

                         $resultSufficient = $resultPacianoSufficient->num_rows;
                         $resultDeficientf = $resultPacianoDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPaciano = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPaciano = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorPaciano = $deficient;
                         } else {
                             $colorPaciano = "#";
                         }}

                         $resultSufficient = $resultMayapaSufficient->num_rows;
                         $resultDeficientf = $resultMayapaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorMayapa = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorMayapa = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorMayapa = $deficient;
                         } else {
                             $colorMayapa = "#";
                         }}

                         $resultSufficient = $resultSirangLupaSufficient->num_rows;
                         $resultDeficientf = $resultSirangLupaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorSirangLupa = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorSirangLupa = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorSirangLupa = $deficient;
                         } else {
                             $colorSirangLupa = "#";
                         }}

                         $resultSufficient = $resultMajadaSufficient->num_rows;
                         $resultDeficientf = $resultMajadaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorMajada = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorMajada = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorMajada = $deficient;
                         } else {
                             $colorMajada = "#";
                         }}

                         $resultSufficient = $resultPaloAltoSufficient->num_rows;
                         $resultDeficientf = $resultPaloAltoDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPaloAlto = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPaloAlto = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorPaloAlto = $deficient;
                         } else {
                             $colorPaloAlto = "#";
                         }}

                         $resultSufficient = $resultBarndalSufficient->num_rows;
                         $resultDeficientf = $resultBarndalDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBarndal = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBarndal = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBarndal = $deficient;
                         } else {
                             $colorBarndal = "#";
                         }}

                         $resultSufficient = $resultBatinoSufficient->num_rows;
                         $resultDeficientf = $resultBatinoDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBatino = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBatino = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBatino = $deficient;
                         } else {
                             $colorBatino = "#";
                         }}

                         $resultSufficient = $resultLawaSufficient->num_rows;
                         $resultDeficientf = $resultLawaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorLawa = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorLawa = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorLawa = $deficient;
                         } else {
                             $colorLawa = "#";
                         }}

                         $resultSufficient = $resultRealSufficient->num_rows;
                         $resultDeficientf = $resultRealDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorReal = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorReal = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorReal = $deficient;
                         } else {
                             $colorReal = "#";
                         }}

                         $resultSufficient = $resultPainzaSufficient->num_rows;
                         $resultDeficientf = $resultPainzaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPainza = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPainza = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorPainza = $deficient;
                         } else {
                             $colorPainza = "#";
                         }}

                         $resultSufficient = $resultLecheriaSufficient->num_rows;
                         $resultDeficientf = $resultLecheriaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorLecheria = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorLecheria = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorLecheria = $deficient;
                         } else {
                             $colorLecheria = "#";
                         }}

                         $resultSufficient = $resultHalangSufficient->num_rows;
                         $resultDeficientf = $resultHalangDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorHalang = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorHalang = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorHalang = $deficient;
                         } else {
                             $colorHalang = "#";
                         }}

                         $resultSufficient = $resultTurbinaSufficient->num_rows;
                         $resultDeficientf = $resultTurbinaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorTurbina = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorTurbina = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorTurbina = $deficient;
                         } else {
                             $colorTurbina = "#";
                         }}

                         $resultSufficient = $resultBabuyanSufficient->num_rows;
                         $resultDeficientf = $resultBabuyanDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBabuyan = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBabuyan = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBabuyan = $deficient;
                         } else {
                             $colorBabuyan = "#";
                         }}

                         $resultSufficient = $resultLaguertaSufficient->num_rows;
                         $resultDeficientf = $resultLaguertaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorLaguerta = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorLaguerta = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorLaguerta = $deficient;
                         } else {
                             $colorLaguerta = "#";
                         }}

                         $resultSufficient = $resultHornalanSufficient->num_rows;
                         $resultDeficientf = $resultHornalanDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorHornalan = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorHornalan = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorHornalan = $deficient;
                         } else {
                             $colorHornalan = "#";
                         }}

                         $resultSufficient = $resultBunggoSufficient->num_rows;
                         $resultDeficientf = $resultBunggoDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBunggo = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBunggo = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBunggo = $deficient;
                         } else {
                             $colorBunggo = "#";
                         }}

                         $resultSufficient = $resultMabatoSufficient->num_rows;
                         $resultDeficientf = $resultMabatoDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorMabato = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorMabato = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorMabato = $deficient;
                         } else {
                             $colorMabato = "#";
                         }}

                         $resultSufficient = $resultBurolSufficient->num_rows;
                         $resultDeficientf = $resultBurolDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBurol = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBurol = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBurol = $deficient;
                         } else {
                             $colorBurol = "#";
                         }}

                         $resultSufficient = $resultKayanlogSufficient->num_rows;
                         $resultDeficientf = $resultKayanlogDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorKayanlog = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorKayanlog = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorKayanlog = $deficient;
                         } else {
                             $colorKayanlog = "#";
                         }}

                         $resultSufficient = $resultUlangoSufficient->num_rows;
                         $resultDeficientf = $resultUlangoDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorUlango = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorUlango = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorUlango = $deficient;
                         } else {
                             $colorUlango = "#";
                         }}

                         $resultSufficient = $resultTuloSufficient->num_rows;
                         $resultDeficientf = $resultTuloDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorTulo = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorTulo = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorTulo = $deficient;
                         } else {
                             $colorTulo = "#";
                         }}

                         $resultSufficient = $resultLamesaSufficient->num_rows;
                         $resultDeficientf = $resultLamesaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorLamesa = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorLamesa = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorLamesa = $deficient;
                         } else {
                             $colorLamesa = "#";
                         }}

                         $resultSufficient = $resultBucalSufficient->num_rows;
                         $resultDeficientf = $resultBucalDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBucal = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBucal = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBucal = $deficient;
                         } else {
                             $colorBucal = "#";
                         }}

                         $resultSufficient = $resultPansolSufficient->num_rows;
                         $resultDeficientf = $resultPansolDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPansol = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPansol = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorPansol = $deficient;
                         } else {
                             $colorPansol = "#";
                         }}

                         $resultSufficient = $resultMaunongSufficient->num_rows;
                         $resultDeficientf = $resultMaunongDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorMaunong = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorMaunong = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorMaunong = $deficient;
                         } else {
                             $colorMaunong = "#";
                         }}

                         $resultSufficient = $resultSaimsimSufficient->num_rows;
                         $resultDeficientf = $resultSaimsimDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorSaimsim = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorSaimsim = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorSaimsim = $deficient;
                         } else {
                             $colorSaimsim = "#";
                         }}

                         $resultSufficient = $resultCamaliganSufficient->num_rows;
                         $resultDeficientf = $resultCamaliganDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorCamaligan = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorCamaligan = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorCamaligan = $deficient;
                         } else {
                             $colorCamaligan = "#";
                         }}

                         $resultSufficient = $resultPutingLupaSufficient->num_rows;
                         $resultDeficientf = $resultPutingLupaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorPutingLupa = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorPutingLupa = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorPutingLupa = $deficient;
                         } else {
                             $colorPutingLupa = "#";
                         }}

                         $resultSufficient = $resultBagongKalsadaSufficient->num_rows;
                         $resultDeficientf = $resultBagongKalsadaDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorBagongKalsada = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorBagongKalsada = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorBagongKalsada = $deficient;
                         } else {
                             $colorBagongKalsada = "#";
                         }}

                         $resultSufficient = $resultSucolSufficient->num_rows;
                         $resultDeficientf = $resultSucolDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorSucol = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorSucol = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorSucol = $deficient;
                         } else {
                             $colorSucol = "#";
                         }}

                         $resultSufficient = $resultMasiliSufficient->num_rows;
                         $resultDeficientf = $resultMasiliDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorMasili = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorMasili = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorMasili = $deficient;
                         } else {
                             $colorMasili = "#";
                         }}

                         $resultSufficient = $resultMakilingSufficient->num_rows;
                         $resultDeficientf = $resultMakilingDeficient->num_rows;

                         if ($resultSufficient != 0 || $resultDeficientf != 0){
                         if ($resultSufficient > $resultDeficientf) {
                             $colorMakiling = $sufficient;
                         } else if ($resultSufficient == $resultDeficientf) {
                             $colorMakiling = $sufidefi;
                         } else if ($resultDeficientf > $resultSufficient) {
                             $colorMakiling = $deficient;
                         } else {
                             $colorMakiling = "#";
                         } }
                         } else if ($choice == "pH") {
                         //Which field will be used
                         echo '<center><img src="assets/images/ph-color.png"></center>';
                         $res = "res_ph";

                         //Open for optimization
                         $sqlCanlubangPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'canlubang'";
                         $sqlPuntaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'punta'";
                         $sqlMapagongPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'mapagong'";
                         $sqlSanCristobalPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'sancristobal'";
                         $sqlUwisanPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'uwisan'";
                         $sqLoocPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'looc'";
                         $sqlSampiruhanPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'sampiruhan'";
                         $sqlPalingonPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'palingon'";
                         $sqlLinggaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'lingga'";
                         $sqlSanJuanPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'sanjuan'";
                         $sqlBanaderoPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'banadero'";
                         $sqlSanJosePH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'sanjose'";
                         $sqlPoblacionPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'poblacion'";
                         $sqlParianPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'parian'";
                         $sqlpacianoPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'paciano'";
                         $sqlMayapaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'mayapa'";
                         $sqlSirangLupaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'siranglupa'";
                         $sqlMajadaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'majada'";
                         $sqlPaloAltoPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'paloalto'";
                         $sqlBarndalPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'barndal'";
                         $sqlBatinoPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'batino'";
                         $sqlLawaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'lawa'";
                         $sqlRealPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'real'";
                         $sqlPainzaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'painza'";
                         $sqlLecheriaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'lecheria'";
                         $sqlHalangPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'halang'";
                         $sqlTurbinaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'turbina'";
                         $sqlBabuyanPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'babuyan'";
                         $sqlLaguertaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'laguerta'";
                         $sqlHornalanPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'hornalan'";
                         $sqlBunggoPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'bunggo'";
                         $sqlBurolPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'burol'";
                         $sqlKayanlogPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'kayanlog'";
                         $sqlUlangoPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'ulango'";
                         $sqlTuloPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'tulo'";
                         $sqlLamesaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'lamesa'";
                         $sqlBucalPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'bucal'";
                         $sqlPansolPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'pansol'";
                         $sqlMaunongPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'maunong'";
                         $sqlSaimsimPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'saimsim'";
                         $sqlCamaliganPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'camaligan'";
                         $sqlPutingLupaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'putinglupa'";
                         $sqlBagongKalsadaPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'bagongkalsada'";
                         $sqlSucolPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'sucol'";
                         $sqlMasiliPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'masili'";
                         $sqlMakilingPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'makiling'";
                         $sqlMabatoPH = "SELECT res_ph FROM tblresults WHERE brgy LIKE 'mabato'";
                         //holy fucking ineffiecient lmao

                         $resultCanlubangPH = $con->query($sqlCanlubangPH);
                         $resultPuntaPH = $con->query($sqlPuntaPH);
                         $resultMabatoPH = $con->query($sqlMabatoPH);
                         $resultMapagongPH = $con->query($sqlMapagongPH);
                         $resultSanCristobalPH = $con->query($sqlSanCristobalPH);
                         $resultUwisanPH = $con->query($sqlUwisanPH);
                         $resultLoocPH = $con->query($sqLoocPH);
                         $resultSampiruhanPH = $con->query($sqlSampiruhanPH);
                         $resultPalingonPH = $con->query($sqlPalingonPH);
                         $resultLinggaPH = $con->query($sqlLinggaPH);
                         $resultSanJuanPH = $con->query($sqlSanJuanPH);
                         $resultBanaderoPH = $con->query($sqlBanaderoPH);
                         $resultSanJosePH = $con->query($sqlSanJosePH);
                         $resultPoblacionPH = $con->query($sqlPoblacionPH);
                         $resultParianPH = $con->query($sqlParianPH);
                         $resultPacianoPH = $con->query($sqlpacianoPH);
                         $resultMayapaPH = $con->query($sqlMayapaPH);
                         $resultSirangLupaPH = $con->query($sqlSirangLupaPH);
                         $resultMajadaPH = $con->query($sqlMajadaPH);
                         $resultPaloAltoPH = $con->query($sqlPaloAltoPH);
                         $resultBarndalPH = $con->query($sqlBarndalPH);
                         $resultBatinoPH = $con->query($sqlBatinoPH);
                         $resultLawaPH = $con->query($sqlLawaPH);
                         $resultRealPH = $con->query($sqlRealPH);
                         $resultPainzaPH = $con->query($sqlPainzaPH);
                         $resultLecheriaPH = $con->query($sqlLecheriaPH);
                         $resultHalangPH = $con->query($sqlHalangPH);
                         $resultTurbinaPH = $con->query($sqlTurbinaPH);
                         $resultBabuyanPH = $con->query($sqlBabuyanPH);
                         $resultLaguertaPH = $con->query($sqlLaguertaPH);
                         $resultHornalanPH = $con->query($sqlHornalanPH);
                         $resultBunggoPH = $con->query($sqlBunggoPH);
                         $resultBurolPH = $con->query($sqlBurolPH);
                         $resultKayanlogPH = $con->query($sqlKayanlogPH);
                         $resultUlangoPH = $con->query($sqlUlangoPH);
                         $resultTuloPH = $con->query($sqlTuloPH);
                         $resultLamesaPH = $con->query($sqlLamesaPH);
                         $resultBucalPH = $con->query($sqlBucalPH);
                         $resultPansolPH = $con->query($sqlPansolPH);
                         $resultMaunongPH = $con->query($sqlMaunongPH);
                         $resultSaimsimPH = $con->query($sqlSaimsimPH);
                         $resultCamaliganPH = $con->query($sqlCamaliganPH);
                         $resultPutingLupaPH = $con->query($sqlPutingLupaPH);
                         $resultBagongKalsadaPH = $con->query($sqlBagongKalsadaPH);
                         $resultSucolPH = $con->query($sqlSucolPH);
                         $resultMasiliPH = $con->query($sqlMasiliPH);
                         $resultMakilingPH = $con->query($sqlMakilingPH);

                         function pHColor($resultBrgy, &$color) {
                             $ctr4p0 = $ctr4p4 = $ctr4p8 = $ctr5p2 = $ctr5p0 = $ctr5p4 = $ctr5p8 = $ctr6p0 = $ctr6p4 = $ctr6p8 = $ctr7p2 = $ctr7p6 = 0;

                             while ($row = mysqli_fetch_array($resultBrgy)) {
                                 if ($row['res_ph'] == "4.0") {//1
                                     $ctr4p0 += 1;
                                 } else if ($row['res_ph'] == "4.4") {//2
                                     $ctr4p4 += 1;
                                 } else if ($row['res_ph'] == "4.8") {//3
                                     $ctr4p8 += 1;
                                 } else if ($row['res_ph'] == "5.2") {//4
                                     $ctr5p2 += 1;
                                 } else if ($row['res_ph'] == "5.0") {//5
                                     $ctr5p0 += 1;
                                 } else if ($row['res_ph'] == "5.4") {//6
                                     $ctr5p4 += 1;
                                 } else if ($row['res_ph'] == "5.8") {//7
                                     $ctr5p8 += 1;
                                 } else if ($row['res_ph'] == "6.0") {//8
                                     $ctr6p0 += 1;
                                 } else if ($row['res_ph'] == "6.4") {//9
                                     $ctr6p4 += 1;
                                 } else if ($row['res_ph'] == "6.8") {//10
                                     $ctr6p8 += 1;
                                 } else if ($row['res_ph'] == "7.2") {//11
                                     $ctr7p2 += 1;
                                 } else if ($row['res_ph'] == "7.6") {//12
                                     $ctr7p6 += 1;
                                 }
                             }

                             $highest = max($ctr4p0, $ctr4p4, $ctr4p8, $ctr5p2, $ctr5p0, $ctr5p4, $ctr5p8, $ctr6p0, $ctr6p8, $ctr7p2, $ctr7p6);

                             if ($highest != 0) {
                                 if ($ctr4p0 == $highest) {
                                     $color = "#868e38";//1
                                 } else if ($ctr4p4 == $highest){
                                     $color = "#018049";//2
                                 } else if ($ctr4p8 == $highest){
                                     $color = "#314238";//3
                                 } else if ($ctr5p0 == $highest){
                                     $color = "#c8812f";//4
                                 } else if ($ctr5p2 == $highest){
                                     $color = "#c8812f";//5
                                 } else if ($ctr5p4 == $highest){
                                     $color = "#aa4229";//6
                                 } else if ($ctr5p8 == $highest){
                                     $color = "#a21d38";//7
                                 } else if ($ctr6p0 == $highest){
                                     $color = "#7a1f3e";//8
                                 } else if ($ctr6p4 == $highest){
                                     $color =  "#868d40";//9
                                 } else if ($ctr6p8 == $highest){
                                     $color = "#489350";//10
                                 } else if ($ctr7p2 == $highest){
                                     $color = "#4f8488";//11
                                 } else if ($ctr7p6 == $highest){
                                     $color = "#25899e";//12
                                 } else {
                                     $color = "#";
                                 }
                             }
                         }

                         pHColor($resultCanlubangPH, $colorCanlubang);
                         pHColor($resultPuntaPH, $colorPunta);
                         pHColor($resultMabatoPH, $colorMabato);
                         pHColor($resultMapagongPH, $colorMapagong);
                         pHColor($resultSanCristobalPH, $colorSanCristobal);
                         pHColor($resultUwisanPH, $colorUwisan);
                         pHColor($resultLoocPH, $colorLooc);
                         pHColor($resultSampiruhanPH, $colorSampiruhan);
                         pHColor($resultPalingonPH, $colorPalingon);
                         pHColor($resultLinggaPH, $colorLingga);
                         pHColor($resultSanJuanPH, $colorSanJuan);
                         pHColor($resultBanaderoPH, $colorBanadero);
                         pHColor($resultSanJosePH, $colorSanJose);
                         pHColor($resultPoblacionPH, $colorPoblacion);
                         pHColor($resultParianPH, $colorParian);
                         pHColor($resultPacianoPH, $colorPaciano);
                         pHColor($resultMayapaPH, $colorMayapa);
                         pHColor($resultSirangLupaPH, $colorSirangLupa);
                         pHColor($resultMajadaPH, $colorMajada);
                         pHColor($resultPaloAltoPH, $colorPaloAlto);
                         pHColor($resultBarndalPH, $colorBarndal);
                         pHColor($resultBatinoPH, $colorBatino);
                         pHColor($resultLawaPH, $colorLawa);
                         pHColor($resultRealPH, $colorReal);
                         pHColor($resultPainzaPH, $colorPainza);
                         pHColor($resultLecheriaPH, $colorLecheria);
                         pHColor($resultHalangPH, $colorHalang);
                         pHColor($resultTurbinaPH, $colorTurbina);
                         pHColor($resultBabuyanPH, $colorBabuyan);
                         pHColor($resultLaguertaPH, $colorLaguerta);
                         pHColor($resultHornalanPH, $colorHornalan);
                         pHColor($resultBunggoPH, $colorBunggo);
                         pHColor($resultBurolPH, $colorBurol);
                         pHColor($resultKayanlogPH, $colorKayanlog);
                         pHColor($resultUlangoPH, $colorUlango);
                         pHColor($resultTuloPH, $colorTulo);
                         pHColor($resultLamesaPH, $colorLamesa);
                         pHColor($resultBucalPH, $colorBucal);
                         pHColor($resultPansolPH, $colorPansol);
                         pHColor($resultMaunongPH, $colorMaunong);
                         pHColor($resultSaimsimPH, $colorSaimsim);
                         pHColor($resultCamaliganPH, $colorCamaligan);
                         pHColor($resultPutingLupaPH, $colorPutingLupa);
                         pHColor($resultBagongKalsadaPH, $colorBagongKalsada);
                         pHColor($resultSucolPH, $colorSucol);
                         pHColor($resultMasiliPH, $colorMasili);
                         pHColor($resultMakilingPH, $colorMakiling);


                         }
                     }
                     $result->close();
                     $con->close();
                 }


    ?>

    <!-- Draw map -->
    <div class="map">
    <svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 -21.6 761 919" style="enable-background:new 0 -21.6 761 919;" xml:space="preserve">
        <!-- Canlubang -->
        <a href="brgy_profile.php?brgy=Canlubang">

            <g id="can">
                <polygon class="st0" fill="<?php echo $colorCanlubang; ?>" points="356.500 136.800, 359.000 138.600, 361.400 141.200, 368.200 139.300, 372.800 138.400, 375.400 142.800, 371.800 145.200, 367.700 145.200, 364.100 146.800, 366.900 160.300, 380.800 157.300, 383.400 146.800, 395.000 143.000, 411.500 138.400, 419.300 137.500, 426.100 136.800, 422.200 130.400, 421.100 122.600, 441.100 122.600, 451.900 127.600, 458.400 131.600, 461.200 140.200, 469.100 143.600, 470.000 152.100, 466.600 154.400, 458.200 153.000, 450.400 149.700, 436.100 148.800, 435.500 155.800, 439.300 161.200, 436.900 169.000, 448.200 171.100, 455.200 167.000, 460.500 169.500, 459.400 172.600, 454.000 179.000, 449.400 180.800, 446.500 182.900, 442.000 184.200, 438.400 182.800, 433.600 186.300, 429.800 198.200, 432.300 212.500, 435.600 215.300, 424.700 220.300, 380.700 242.300, 320.900 272.100, 326.400 285.500, 335.300 311.500, 347.100 325.300, 344.700 329.400, 342.900 338.300, 332.000 343.100, 331.200 349.600, 322.700 354.500, 317.800 359.300, 312.000 362.200, 307.400 360.200, 303.900 359.400, 299.100 363.000, 292.600 366.000, 281.500 371.000, 275.500 375.000, 268.100 384.100, 259.600 389.000, 250.100 389.000, 246.300 385.000, 234.200 378.100, 201.400 377.700, 198.800 381.100, 199.300 390.100, 194.500 394.200, 189.000 394.400, 184.200 396.400, 172.900 413.400, 167.300 416.200, 159.000 415.900, 150.400 421.900, 147.500 425.200, 144.900 427.000, 143.500 430.000, 140.600 431.100, 139.200 434.500, 134.100 438.300, 129.700 444.600, 126.400 447.700, 119.400 451.500, 104.600 438.600, 83.300 418.600, 81.000 420.100, 76.000 423.500, 69.700 430.600, 60.300 436.400, 60.300 441.700, 54.000 443.500, 44.100 444.300, 50.400 431.800, 56.000 418.700, 48.100 417.300, 24.600 418.400, 14.600 408.800, 13.100 399.500, 24.100 385.200, 38.000 383.200, 38.900 363.600, 46.900 349.000, 59.800 345.400, 68.600 335.800, 77.500 329.000, 81.600 316.400, 86.200 311.100, 94.000 304.100, 104.900 294.600, 113.500 292.600, 119.100 290.300, 126.000 288.500, 136.400 287.400, 143.400 273.700, 148.800 250.600, 150.200 245.500, 159.800 241.700, 161.900 231.200, 166.900 220.700, 175.400 217.900, 189.500 207.800, 193.100 197.200, 197.900 197.200, 200.700 192.900, 211.600 190.500, 225.900 183.100, 237.500 180.800, 256.300 180.300, 259.600 176.000, 267.400 172.200, 273.900 169.800, 281.700 164.700, 284.200 159.400, 296.800 155.300, 307.200 153.800, 310.000 143.400, 317.600 140.500, 319.200 144.500, 328.500 143.900, 330.500 140.000, 337.500 136.500, 347.100 136.200, 356.500 136.800"/>
                <title>Canlubang</title>
                <polygon class="st0" fill="<?php echo $colorCanlubang; ?>" points="26.800 417.500, 32.900 417.200, 44.600 416.600, 51.500 416.500, 55.100 417.000, 55.900 419.500, 50.800 431.400, 47.800 437.700, 45.300 442.000, 45.500 443.400, 55.700 442.500, 59.900 441.800, 60.700 438.200, 62.800 433.100, 71.800 429.200, 75.800 424.300, 78.300 419.700, 81.000 419.600, 84.400 418.600, 96.500 429.700, 112.100 445.400, 115.600 448.900, 117.200 450.300, 118.400 451.800, 112.200 459.700, 108.900 464.400, 109.600 468.100, 115.800 474.000, 118.800 478.700"/>
                <title>Canlubang</title>
            </g>
        </a>

        <!-- Mapagong -->
        <a href="brgy_profile.php?brgy=Mapagong">
            <g id="map">
                <polygon class="st0" fill="<?php echo $colorMapagong; ?>" points="359.400 134.400, 367.000 133.200, 372.700 128.500, 376.500 129.900, 380.400 124.200, 392.400 119.400, 409.600 109.500, 416.400 95.700, 426.700 96.900, 431.800 98.200, 435.100 106.500, 455.500 111.700, 470.300 108.600, 480.300 112.700, 492.500 123.800, 502.100 127.900, 502.100 135.000, 501.100 140.900, 498.800 147.300, 497.000 151.100, 503.900 153.900, 510.000 160.600, 508.600 165.900, 504.100 167.600, 503.300 175.200, 498.600 174.800, 493.800 178.100, 482.000 188.400, 474.400 193.200, 466.400 179.200, 459.700 168.300, 453.200 167.600, 445.000 171.400, 437.700 169.500, 437.100 165.000, 438.500 159.600, 436.000 156.700, 435.500 154.900, 436.100 148.900, 446.300 149.400, 455.100 150.700, 462.000 154.500, 465.800 154.600, 468.400 153.100, 471.000 149.600, 468.400 142.400, 463.900 140.100, 459.000 139.600, 458.200 134.600, 457.600 128.500, 453.400 127.500, 448.000 125.700, 439.300 122.600, 428.600 122.600, 421.300 122.600, 420.200 125.800, 422.200 130.400, 426.100 135.600, 423.400 138.300, 419.600 137.600, 413.400 137.200, 407.500 140.400, 396.400 142.900, 386.800 144.500, 383.500 147.100, 382.700 153.300, 380.500 157.300, 373.700 158.800, 368.000 160.000, 367.500 160.100, 366.700 158.600, 364.900 150.200, 364.900 145.700, 369.800 144.900, 373.600 144.600, 375.700 142.700, 374.300 140.100, 370.700 138.400, 364.400 140.200, 361.100 141.500, 360.500 141.700, 359.800 140.600, 358.600 137.700, 358.600 136.100, 359.400 134.400"/>
                <title>Mapagong</title>
            </g>
        </a>

        <!-- San Cristobal -->
        <a href="brgy_profile.php?brgy=Sancristobal ">
            <g id="San_Cristobal">
                <polygon class="st0" fill="<?php echo $colorSanCristobal; ?>" points="509.800 143.600, 513.500 142.800, 518.000 140.500, 530.600 136.500, 543.100 131.700, 549.400 127.900, 553.300 130.800, 560.200 145.600, 565.200 158.300, 568.800 166.600, 572.000 173.100, 571.800 175.200, 567.800 175.800, 564.000 177.700, 564.300 183.100, 562.700 186.200, 558.600 186.000, 554.900 183.300, 551.700 181.800, 549.600 178.400, 549.500 175.600, 552.400 171.500, 551.500 167.200, 546.400 167.300, 539.200 171.400, 533.000 173.900, 514.900 174.400, 513.500 169.900, 510.900 162.900, 507.800 158.500, 503.800 154.500, 500.700 151.500, 495.700 150.900, 496.800 148.400, 503.600 145.600, 509.800 143.600"/>
                <title>San Cristobal</title>
            </g>
        </a>

        <!-- Uwisan -->
        <a href="brgy_profile.php?brgy=Uwisan ">
            <g id="Uwisan">
                <polygon class="st0" fill="<?php echo $colorUwisan; ?>" points="625.800 108.400, 636.800 107.000, 647.600 103.300, 658.100 97.500, 669.900 88.500, 675.300 95.400, 687.000 102.500, 695.200 103.700, 697.100 107.800, 685.300 116.900, 676.400 120.500, 668.800 125.800, 661.100 125.300, 655.700 132.000, 651.000 135.900, 645.200 136.900, 642.900 142.000, 639.600 143.800, 633.800 143.500, 632.500 140.400, 629.200 138.400, 625.000 134.900, 622.900 125.100, 619.800 115.900, 621.000 110.800, 625.800 108.400"/>
                <title>Uwisan</title>
            </g>
        </a>

        <!-- Looc -->
        <a href="brgy_profile.php?brgy=Looc ">
            <g id="Looc">
                <polygon class="st0" fill="<?php echo $colorLooc; ?>" points="703.700 109.100, 708.300 111.200, 714.900 112.300, 721.900 117.800, 727.200 122.700, 731.700 124.500, 731.400 136.000, 733.600 143.200, 734.700 150.000, 731.800 155.100, 727.600 159.600, 717.800 159.600, 714.500 156.300, 707.500 156.700, 700.000 159.100, 693.700 165.600, 687.300 172.400, 683.200 177.100, 677.400 179.400, 674.800 180.900, 672.400 183.700, 655.700 184.400, 655.400 178.800, 654.800 168.600, 652.500 161.400, 644.700 160.500, 641.800 156.600, 644.400 152.100, 641.600 150.500, 640.200 147.000, 639.800 144.100, 641.600 142.400, 644.100 139.800, 645.800 135.800, 651.200 135.600, 655.100 133.500, 659.500 126.200, 664.500 123.800, 669.800 125.500, 672.700 123.600, 678.300 118.400, 685.000 116.500, 691.600 112.400, 696.700 107.500, 699.200 106.100, 703.700 109.100"/>
                <title>Looc</title>
            </g>
        </a>

        <!-- Sampiruhan -->
        <a href="brgy_profile.php?brgy=Sampiruhan ">
            <g id="Sampiruhan">
                <polygon class="st0" fill="<?php echo $colorSampiruhan; ?>" points="734.400 154.800, 732.100 158.600, 728.800 162.400, 729.000 167.900, 729.000 171.500, 731.100 176.000, 732.700 184.500, 730.000 189.200, 724.300 191.600, 716.900 190.600, 714.100 187.700, 702.100 185.500, 692.600 184.000, 687.600 184.600, 683.800 186.100, 676.000 185.100, 676.000 181.100, 678.400 179.300, 683.900 176.300, 687.500 172.100, 690.900 168.500, 693.800 165.500, 697.100 161.500, 699.400 159.500, 704.400 158.200, 709.400 156.100, 714.200 156.500, 716.300 157.900, 717.500 159.800, 722.800 160.000, 726.700 159.900, 729.900 158.200, 732.600 154.300, 734.000 153.100, 734.600 153.900, 734.400 154.800"/>
                <title>Sampiruhan</title>
            </g>
        </a>

        <!-- Palingon -->
        <a href="brgy_profile.php?brgy=Palingon ">
            <g id="Palingon">
                <polygon class="st0" fill="<?php echo $colorpalingon; ?>" points="732.900 189.500, 735.800 190.600, 737.500 192.400, 735.500 195.800, 732.900 196.800, 732.000 200.400, 728.000 202.300, 723.600 205.100, 717.600 206.200, 714.800 209.100, 713.500 211.600, 710.300 209.800, 709.600 204.000, 711.700 202.400, 713.700 200.500, 709.300 199.500, 710.200 195.500, 712.900 191.100, 717.400 190.800, 724.200 191.700, 728.900 189.900, 732.000 189.000, 732.900 189.500"/>
                <title>Palingon</title>
            </g>
        </a>

        <!-- Lingga -->
        <a href="brgy_profile.php?brgy=Lingga ">
            <g id="Lingga">
                <polygon class="st0" fill="<?php echo $colorLingga; ?>" points="688.500 188.400, 688.800 196.900, 690.500 205.500, 693.700 209.300, 697.400 212.000, 696.100 214.300, 692.100 213.300, 690.300 215.500, 690.100 220.600, 690.000 222.100, 688.200 224.900, 690.500 231.600, 692.600 235.700, 700.000 236.800, 705.000 238.500, 708.900 238.900, 708.900 228.100, 710.100 221.800, 711.400 217.600, 712.100 212.300, 710.000 209.400, 709.500 204.100, 711.900 202.400, 713.600 200.700, 709.700 199.600, 709.000 197.500, 711.100 194.000, 712.500 191.400, 714.000 190.300, 715.500 190.500, 714.600 189.200, 713.000 186.700, 706.800 185.400, 698.800 185.800, 694.000 185.200, 689.400 183.100, 687.400 184.500, 687.100 185.900, 687.600 186.700, 688.500 188.400"/>
                <title>Lingga</title>
            </g>
        </a>

        <!-- San Juan -->
        <a href="brgy_profile.php?brgy=SanJuan ">
            <g id="San_Juan">
                <polygon class="st0" fill="<?php echo $colorSanJuan; ?>"points="649.100 187.400, 655.400 185.400, 660.900 184.400, 672.200 183.700, 674.600 180.900, 676.100 180.800, 676.100 184.900, 681.700 185.900, 687.300 185.800, 688.500 188.200, 688.200 192.000, 685.900 193.000, 676.900 192.700, 670.600 194.900, 662.500 197.400, 657.300 199.900, 651.500 201.400, 647.500 195.200, 645.400 191.700, 647.300 188.600, 649.100 187.400"/>
                <title>San Juan</title>
            </g>
        </a>

        <!-- Banadero -->
        <a href="brgy_profile.php?brgy=Banadero ">
            <g id="Banadero">
                <polygon class="st0" fill="<?php echo $colorBanadero; ?>" points="632.200 154.500, 636.900 151.300, 640.300 149.200, 642.300 151.200, 644.800 153.700, 640.600 158.200, 643.000 160.300, 649.600 160.800, 653.000 164.100, 655.200 171.200, 655.200 181.600, 655.400 184.100, 656.900 184.400, 657.300 184.600, 655.200 185.300, 649.400 187.100, 646.700 189.300, 641.300 189.700, 633.100 190.500, 627.500 192.200, 620.200 194.000, 610.500 194.500, 604.300 193.800, 600.600 198.300, 594.500 201.500, 591.900 201.300, 591.400 197.300, 588.500 199.000, 582.200 196.200, 574.400 180.200, 572.400 176.600, 573.400 174.400, 576.800 175.800, 580.600 178.800, 583.900 179.500, 591.300 178.700, 596.600 175.000, 596.300 171.600, 595.500 167.200, 601.300 167.400, 605.000 170.800, 608.600 169.100, 610.100 163.100, 614.300 160.100, 620.400 163.500, 623.400 160.500, 623.100 156.900, 628.300 156.700, 632.200 154.500"/>
                <title>Banadero</title>
            </g>
        </a>

        <!-- San Jose -->
        <a href="brgy_profile.php?brgy=SanJose ">
            <g id="San_Jose">
                <polygon class="st0" fill="<?php echo $colorSanJose; ?>" points="669.500 195.500, 675.900 192.900, 684.900 192.700, 688.000 192.800, 688.600 196.000, 690.200 203.700, 691.900 208.900, 696.900 210.400, 697.300 214.200, 692.800 213.300, 690.400 215.500, 690.200 220.300, 690.800 221.400, 689.100 222.400, 689.000 226.100, 691.100 233.800, 690.600 236.900, 677.100 239.200, 669.500 233.300, 673.100 231.900, 672.000 224.500, 664.900 223.200, 659.100 215.900, 652.900 213.600, 652.900 210.800, 651.900 207.800, 653.800 205.500, 655.000 201.700, 665.400 196.600, 669.500 195.500"/>
                <title>San Jose</title>
            </g>
        </a>

        <!-- Poblacion -->
        <a href="brgy_profile.php?brgy=Poblacion ">
            <g id="Poblacion">
	            <polygon class="st0" fill="<?php echo $colorPoblacion; ?>" points="624.300 192.300, 629.000 192.500, 635.000 189.700, 642.500 190.100, 645.700 191.300, 646.900 194.400, 651.700 201.500, 653.600 203.400, 653.600 206.200, 651.600 209.300, 653.300 211.700, 653.600 213.900, 661.200 217.000, 664.800 222.900, 668.000 225.100, 672.100 224.400, 673.900 228.200, 672.600 232.200, 669.000 232.500, 663.200 235.400, 656.500 238.100, 652.100 238.100, 648.200 234.800, 644.300 237.400, 639.900 237.000, 635.300 239.600, 631.400 234.500, 626.800 232.500, 621.900 231.600, 617.800 233.900, 612.500 238.800, 613.400 242.800, 607.900 244.200, 607.900 251.400, 602.000 258.900, 596.900 257.500, 592.400 246.500, 588.400 241.900, 587.100 232.000, 587.800 224.100, 597.200 221.800, 603.500 213.700, 602.900 203.300, 603.900 194.400, 606.700 192.700, 616.000 195.700, 624.300 192.300"/>
                <title>Poblacion</title>
            </g>
        </a>

        <!-- Parian -->
        <a href="brgy_profile.php?brgy=Parian ">
            <g id="Parian">
                <polygon class="st0" fill="<?php echo $colorParian; ?>" points="566.300 176.000, 570.300 175.500, 572.500 176.800, 576.900 185.400, 582.700 196.900, 586.900 200.200, 591.500 197.400, 592.400 200.100, 594.500 202.200, 600.200 198.600, 602.200 199.300, 603.500 205.400, 603.500 213.300, 601.300 218.100, 589.600 224.000, 582.200 224.700, 577.400 223.900, 573.700 226.200, 571.000 224.200, 566.100 222.900, 567.400 218.600, 565.900 213.900, 561.800 217.000, 556.800 215.300, 546.900 222.400, 541.400 217.500, 532.300 218.400, 528.100 216.600, 519.100 213.600, 521.700 208.500, 521.500 204.900, 523.800 203.900, 524.700 200.700, 521.600 198.600, 528.500 197.300, 530.600 188.900, 541.000 179.400, 546.300 176.300, 550.000 178.400, 552.800 182.600, 558.200 184.900, 563.000 186.200, 564.300 178.500, 565.700 176.200, 566.300 176.000"/>
                <title>Parian</title>
            </g>
        </a>

        <!-- Paciano -->
        <a href="brgy_profile.php?brgy=Paciano ">
            <g id="Paciano">
                <polygon class="st0" fill="<?php echo $colorPaciano; ?>" points="506.900 166.500, 509.500 164.500, 511.000 162.800, 513.100 168.500, 516.700 174.500, 532.300 174.100, 542.500 170.000, 550.800 166.000, 552.300 172.600, 548.500 176.600, 546.700 177.100, 541.600 178.600, 530.500 188.900, 528.600 193.200, 526.900 198.600, 522.200 198.900, 518.400 198.200, 515.100 202.300, 514.900 217.200, 513.100 229.500, 509.200 233.500, 493.400 229.600, 480.600 227.300, 482.200 221.600, 487.100 216.900, 479.900 203.700, 473.500 194.100, 478.800 189.900, 487.500 184.600, 493.600 177.900, 498.400 174.600, 503.500 174.600, 503.800 169.000, 504.500 166.500, 506.900 166.500"/>
                <title>Paciano</title>
            </g>
        </a>

        <!-- Mayapa -->
        <a href="brgy_profile.php?brgy=Mayapa ">
            <g id="Mayapa">
                <polygon class="st0" fill="<?php echo $colorMayapa; ?>" points="456.900 174.300, 459.000 172.500, 460.500 170.800, 461.300 170.800, 468.600 183.200, 473.500 191.700, 474.000 193.600, 474.700 196.000, 482.800 207.600, 486.900 215.600, 485.400 219.700, 480.100 224.700, 479.000 228.300, 467.500 231.300, 463.100 235.900, 458.300 237.700, 454.600 241.800, 450.800 242.600, 443.100 249.100, 438.700 252.900, 433.400 241.600, 423.200 222.500, 424.200 220.200, 432.900 216.300, 434.800 213.200, 429.600 206.900, 429.800 193.900, 433.400 186.200, 439.500 183.400, 446.700 182.600, 451.600 180.000, 454.600 177.600, 456.900 174.300"/>
                <title>Mayapa</title>
            </g>
        </a>

        <!-- Sirang Lupa -->
        <a href="brgy_profile.php?brgy=Siranglupa ">
            <g id="Sirang_Lupa">
                <polygon class="st0" fill="<?php echo $colorSirangLupa; ?>" points="405.400 229.400, 413.300 225.500, 419.700 222.300, 423.800 223.800, 427.500 230.500, 422.700 233.400, 418.800 235.600, 413.200 239.900, 406.900 247.000, 401.000 255.600, 388.700 256.800, 382.100 260.700, 369.300 264.200, 364.500 269.300, 358.800 272.500, 356.700 275.100, 352.700 276.700, 349.900 277.900, 345.100 280.100, 337.800 282.800, 334.200 283.200, 331.500 289.200, 334.600 295.300, 331.900 303.800, 327.400 290.200, 324.100 280.300, 321.300 274.000, 322.700 270.800, 345.300 259.600, 376.500 244.100, 397.900 233.300, 405.400 229.400"/>
                <title>Sirang Lupa</title>
            </g>
        </a>

        <!-- Majada -->
        <a href="brgy_profile.php?brgy=Majada ">
            <g id="Majada">
                <polygon class="st0" fill="<?php echo $colorMajada; ?>" points="431.300 237.700, 435.100 246.100, 436.900 250.000, 436.900 252.000, 428.400 255.300, 421.900 263.400, 405.800 270.200, 403.000 275.900, 395.800 282.900, 394.900 286.800, 382.800 292.300, 373.000 301.100, 367.200 307.200, 368.900 312.500, 365.000 320.800, 361.500 321.600, 356.800 319.800, 353.000 323.600, 347.700 325.400, 345.800 324.200, 335.700 312.300, 333.000 306.700, 332.600 302.100, 334.200 292.600, 331.500 286.700, 334.800 282.700, 339.100 281.800, 345.100 279.900, 348.700 278.800, 353.700 276.500, 357.600 273.700, 361.400 270.100, 367.400 268.200, 371.000 262.600, 380.000 260.900, 387.300 258.500, 393.400 256.000, 402.300 255.100, 405.400 250.300, 408.800 244.300, 412.800 240.500, 415.500 236.300, 420.300 235.700, 422.500 233.400, 425.000 231.300, 428.200 232.100, 431.300 237.700"/>
                <title>Majada</title>
            </g>
        </a>

        <!-- Palo Alto -->
        <a href="brgy_profile.php?brgy=Palo-Alto ">
            <g id="Palo-alto">
	            <polygon class="st0" fill="<?php echo $colorPaloAlto; ?>" points="446.000 246.100, 451.000 242.400, 454.800 242.700, 455.900 249.500, 454.800 253.900, 449.100 254.900, 447.800 259.800, 448.000 262.600, 447.600 272.700, 447.300 278.800, 450.100 284.200, 450.100 288.700, 447.500 293.200, 447.400 304.900, 444.700 307.200, 440.600 307.200, 439.300 309.500, 435.000 311.600, 435.000 315.400, 432.300 318.900, 429.800 321.800, 430.300 325.500, 424.000 327.300, 421.000 331.100, 413.200 331.100, 410.400 334.400, 406.100 340.000, 397.000 344.300, 393.200 342.200, 389.700 341.400, 384.300 344.300, 382.500 349.700, 378.000 354.600, 375.700 350.500, 374.900 336.200, 367.400 323.100, 365.500 320.600, 367.800 315.300, 369.400 309.400, 368.400 303.700, 377.700 299.100, 386.000 289.400, 395.200 286.900, 396.100 284.100, 397.500 282.300, 403.400 275.500, 405.800 270.400, 417.100 266.100, 425.400 259.900, 434.900 252.700, 438.400 252.600, 442.700 249.900, 446.000 246.100"/>
                <title>Palto Alto</title>
            </g>
        </a>

        <!-- Barndal -->
        <a href="brgy_profile.php?brgy=Barndal ">
            <g id="Barandal">
	            <polygon class="st0" fill="<?php echo $colorBarandal; ?>" points="460.800 237.200, 463.400 235.100, 467.500 231.200, 473.000 229.800, 475.400 234.500, 475.500 244.900, 475.100 252.800, 474.300 261.000, 472.700 267.600, 472.600 271.500, 475.500 271.100, 480.200 270.300, 482.200 281.200, 486.100 290.800, 489.400 296.900, 492.000 295.900, 494.200 297.500, 494.200 306.300, 489.100 311.900, 483.300 318.400, 478.900 323.800, 470.900 319.000, 458.600 311.600, 449.500 306.500, 447.100 300.600, 448.400 291.300, 449.900 284.400, 446.400 277.900, 446.900 273.400, 448.400 265.700, 447.300 261.800, 447.400 260.200, 448.200 257.700, 450.600 253.800, 455.500 253.500, 455.300 247.000, 454.400 242.500, 454.500 241.400, 456.200 239.000, 459.100 237.300, 460.800 237.200"/>
                <title>Barndal</title>
            </g>
        </a>

        <!-- Batino -->
        <a href="brgy_profile.php?brgy=Batino ">
            <g id="Batino">
	            <polygon class="st0" fill="<?php echo $colorBatino; ?>"points="484.200 228.100, 493.000 229.500, 505.700 232.200, 510.100 233.700, 511.200 236.000, 510.800 244.800, 508.600 249.300, 510.200 253.400, 513.500 259.500, 508.500 261.800, 502.100 265.400, 497.700 265.400, 492.800 264.600, 487.000 268.100, 481.900 267.200, 479.100 269.100, 477.100 269.700, 473.600 272.300, 473.000 266.200, 475.200 252.200, 475.500 240.800, 475.600 233.800, 475.200 230.800, 475.100 229.200, 479.900 227.300, 482.000 227.500, 484.200 228.100"/>
                <title>Batino</title>
            </g>
        </a>

        <!-- Lawa -->
        <a href="brgy_profile.php?brgy=Lawa ">
            <g id="Lawa">
                <polygon class="st0" fill="<?php echo $colorLawa; ?>" points="518.900 198.200, 521.700 198.800, 524.400 200.600, 524.400 203.100, 521.300 205.100, 521.900 207.200, 518.900 213.400, 521.900 214.900, 527.900 216.700, 531.300 218.300, 532.100 218.400, 537.900 216.900, 541.700 218.200, 545.000 222.000, 549.900 220.300, 557.400 215.300, 561.500 217.100, 564.300 215.400, 567.700 214.700, 566.900 219.000, 564.900 223.000, 569.400 223.200, 572.200 226.100, 571.500 234.700, 572.600 241.400, 573.400 250.500, 568.400 254.500, 562.000 259.300, 556.500 262.500, 553.000 261.200, 545.600 264.100, 543.300 261.400, 540.000 253.400, 538.400 249.500, 533.800 252.100, 526.000 247.700, 523.700 241.300, 524.900 235.500, 516.600 233.600, 513.000 229.800, 514.700 220.200, 515.200 211.900, 515.100 202.000, 516.100 198.600, 518.900 198.200"/>
                <title>Lawa</title>
            </g>
        </a>

        <!-- Real -->
        <a href="brgy_profile.php?brgy=Real ">
            <g id="Real">
                <polygon class="st0" fill="<?php echo $colorReal; ?>" points="580.200 224.800, 584.400 224.200, 587.400 226.400, 586.800 239.300, 593.000 247.300, 596.700 256.400, 600.700 259.500, 606.100 253.800, 607.700 253.400, 606.700 264.100, 609.600 274.700, 613.100 281.800, 613.100 286.800, 609.700 293.300, 603.800 293.900, 601.800 291.000, 592.000 291.900, 586.700 291.900, 582.900 280.900, 573.700 279.800, 564.900 285.600, 556.100 286.700, 551.100 286.200, 549.300 292.000, 549.700 298.800, 551.000 303.500, 545.300 306.800, 542.000 314.300, 538.300 312.800, 532.700 308.600, 531.400 302.600, 526.600 301.300, 523.200 298.100, 523.200 293.100, 526.900 286.700, 528.700 280.800, 531.800 276.400, 534.400 270.400, 543.200 265.700, 546.000 264.200, 551.300 262.100, 553.500 261.100, 556.500 262.600, 560.400 260.800, 565.800 256.100, 571.700 252.300, 573.600 248.700, 572.200 239.900, 571.200 232.800, 571.800 227.900, 573.600 226.300, 575.500 224.900, 577.000 224.100, 580.200 224.800"/>
                <title>Real</title>
            </g>
        </a>

        <!-- Painza -->
        <a href="brgy_profile.php?brgy=Painza ">
            <g id="Painza">
                <polygon class="st0" fill="<?php echo $colorPainza; ?>" points="516.100 233.400, 520.900 234.500, 524.600 235.400, 525.700 238.100, 522.900 243.200, 526.500 248.100, 532.200 252.200, 536.900 250.500, 539.400 250.100, 540.600 255.500, 543.000 260.700, 544.300 263.500, 544.900 264.600, 539.300 267.400, 534.400 270.100, 532.100 275.600, 529.100 279.200, 526.400 281.800, 519.700 285.500, 510.400 295.700, 506.400 298.900, 503.900 294.100, 499.700 292.000, 494.900 298.200, 493.600 295.800, 491.900 295.800, 488.600 295.800, 484.000 287.000, 482.100 281.400, 480.900 274.300, 479.700 269.800, 479.700 267.700, 483.800 267.600, 487.600 267.600, 492.400 264.600, 496.200 264.900, 502.800 264.900, 510.200 261.200, 512.600 257.500, 508.100 249.800, 510.500 244.200, 510.900 236.000, 511.300 234.100, 512.800 233.400, 514.000 233.000, 516.100 233.400"/>
                <title>Painza</title>
            </g>
        </a>

        <!-- Lecheria -->
        <a href="brgy_profile.php?brgy=Lecheria ">
            <g id="Lecheria">
	            <polygon class="st0" fill="<?php echo $colorLecheria; ?>" points="617.400 234.200, 619.900 232.000, 621.900 231.600, 626.800 232.500, 630.400 232.700, 634.700 239.600, 639.900 237.000, 643.800 237.800, 648.600 235.100, 653.300 238.700, 658.500 237.600, 663.900 235.500, 667.400 233.100, 669.000 232.700, 670.400 234.900, 679.000 239.300, 689.200 237.300, 691.300 236.000, 693.200 235.600, 700.100 236.600, 703.600 237.800, 708.700 238.700, 709.900 241.800, 708.700 250.900, 710.300 256.300, 708.800 260.200, 695.700 264.800, 677.500 266.600, 664.000 267.700, 650.500 268.400, 637.800 272.600, 629.000 274.700, 618.700 280.300, 613.900 283.100, 610.800 278.200, 607.200 267.000, 606.400 260.300, 607.600 253.700, 607.800 251.600, 607.800 246.500, 608.700 243.500, 614.500 242.400, 612.700 239.400, 613.000 236.600, 617.400 234.200"/>
                <title>Lecheria</title>
            </g>
        </a>

        <!-- Halang -->
        <a href="brgy_profile.php?brgy=Halang ">
            <g id="Halang">
                <polygon class="st0" fill="<?php echo $colorHalang; ?>" points="611.000 290.700, 613.400 286.500, 614.100 283.700, 615.900 281.700, 624.900 277.000, 632.000 273.000, 640.700 271.500, 651.700 267.900, 671.400 266.700, 686.500 265.700, 698.500 263.800, 708.100 260.200, 712.100 261.100, 714.600 270.000, 714.200 277.400, 710.000 279.000, 706.100 282.100, 703.000 284.700, 701.700 289.300, 698.200 290.000, 695.100 286.500, 689.500 290.300, 682.900 293.900, 679.600 290.600, 676.300 289.500, 673.000 289.800, 670.600 289.200, 668.300 285.900, 665.700 285.200, 661.500 286.200, 659.100 285.500, 654.300 284.200, 646.600 288.300, 632.500 294.100, 626.600 296.900, 620.700 299.800, 617.700 300.800, 615.800 298.100, 611.600 294.200, 609.900 292.700, 611.000 290.700"/>
                <title>Halang</title>
            </g>
        </a>

        <!-- Turbina -->
        <a href="brgy_profile.php?brgy=Turbina ">
            <g id="Turbina">
                <polygon class="st0" fill="<?php echo $colorTurbina; ?>" points="512.400 294.100, 515.900 290.200, 521.000 284.900, 526.700 282.100, 528.800 281.500, 524.300 291.600, 523.600 298.400, 527.700 301.700, 532.500 304.300, 533.400 310.200, 539.400 313.600, 541.000 316.400, 534.900 326.300, 530.500 329.000, 529.500 327.000, 530.500 323.900, 526.700 322.100, 528.600 316.900, 526.300 312.600, 522.800 315.300, 518.400 322.600, 505.800 333.000, 498.000 340.600, 494.600 342.500, 489.600 339.800, 484.600 332.400, 478.900 325.100, 480.400 322.100, 488.100 313.200, 493.900 307.100, 495.000 301.100, 495.100 298.400, 498.700 294.400, 501.400 291.000, 504.500 295.400, 506.100 299.000, 509.600 297.000, 512.100 294.300, 512.100 294.100"/>
                <title>Turbina</title>
            </g>
        </a>

        <!-- Punta -->
        <a href="brgy_profile.php?brgy=Punta ">
            <g id="Punta">
                <polygon class="st0" fill="<?php echo $colorPunta; ?>" points="449.800 306.400, 459.600 311.900, 468.400 317.000, 475.100 321.600, 478.400 323.400, 479.200 323.800, 479.100 324.800, 483.600 330.500, 487.400 336.200, 490.200 340.200, 492.200 341.400, 491.300 342.000, 487.800 345.100, 482.100 354.300, 476.200 358.100, 473.900 367.000, 468.000 376.000, 462.900 377.700, 454.400 382.500, 442.100 389.400, 438.200 390.000, 431.200 383.700, 422.000 374.400, 420.100 367.600, 418.500 358.800, 414.400 354.400, 412.500 347.400, 414.300 343.300, 414.400 339.200, 410.800 337.300, 410.500 334.100, 412.600 331.600, 414.800 331.200, 419.900 331.200, 422.800 329.300, 427.800 325.700, 430.000 323.600, 431.500 319.300, 435.100 314.200, 435.700 311.700, 439.100 310.300, 439.800 307.700, 443.200 307.800, 446.300 306.300, 447.900 305.700, 449.800 306.400"/>
                <title>Punta</title>
            </g>
        </a>

        <!-- Babuyan -->
        <a href="brgy_profile.php?brgy=Babuyan ">
            <g id="Babuyan">
	            <polygon class="st0" fill="<?php echo $colorBabuyan; ?>" points="382.200 349.900, 383.500 347.000, 384.900 343.400, 389.600 341.400, 392.400 341.700, 396.900 344.200, 402.500 341.700, 407.100 338.800, 409.700 335.000, 410.300 334.800, 411.700 337.600, 414.900 339.100, 415.400 341.600, 413.100 349.000, 416.500 357.000, 419.600 360.800, 420.700 370.600, 424.700 377.400, 433.400 385.200, 437.300 389.200, 437.500 392.100, 436.800 398.500, 430.100 401.800, 424.000 402.100, 420.700 405.600, 413.900 403.900, 407.400 398.100, 404.500 403.400, 405.700 411.900, 402.200 417.700, 397.900 423.300, 392.900 425.400, 389.300 420.300, 386.300 412.100, 378.400 410.500, 371.600 408.000, 364.600 397.200, 361.100 390.400, 361.100 377.300, 360.200 370.000, 358.200 363.000, 359.200 360.200, 365.500 361.300, 371.800 359.000, 376.600 355.500, 379.400 353.200, 380.500 352.000, 382.200 349.900"/>
                <title>Babuyan</title>
            </g>
        </a>

        <!-- Laguerta -->
        <a href="brgy_profile.php?brgy=Laguerta ">
            <g id="Laguerta">
                <polygon class="st0" fill="<?php echo $colorLaguerta; ?>" points="351.800 324.000, 354.200 322.500, 356.900 319.800, 360.100 320.300, 363.700 321.400, 365.800 321.400, 369.500 326.300, 373.900 333.800, 374.600 336.000, 374.700 344.500, 375.300 349.700, 376.500 353.400, 377.000 354.900, 372.900 358.000, 366.300 361.000, 359.500 360.100, 354.100 359.400, 346.600 362.200, 339.900 369.700, 336.800 372.400, 335.200 376.900, 329.800 377.300, 326.300 377.100, 322.300 380.000, 316.400 380.300, 313.000 384.100, 310.200 387.400, 306.200 390.600, 300.800 392.500, 297.500 395.000, 292.500 397.700, 289.600 399.200, 284.300 401.100, 279.500 403.400, 275.900 406.800, 272.600 406.000, 271.900 408.000, 275.000 412.500, 271.200 416.800, 264.900 417.800, 258.000 419.700, 254.000 422.500, 249.200 423.600, 247.100 425.400, 247.400 408.400, 246.500 393.400, 246.700 389.800, 252.200 388.000, 256.900 387.700, 263.700 389.100, 266.900 386.400, 269.200 379.900, 274.700 374.800, 279.600 371.900, 281.300 370.600, 283.700 369.600, 290.200 366.000, 296.400 365.100, 298.500 363.200, 301.700 359.200, 306.700 359.600, 312.200 361.700, 317.800 358.500, 324.700 352.600, 330.400 349.600, 331.200 345.500, 333.400 342.100, 340.100 339.400, 342.600 337.500, 343.800 331.600, 344.600 328.300, 346.700 325.800, 347.200 325.600, 347.800 325.600, 350.000 324.600, 351.800 324.000"/>
                <title>Laguerta</title>
            </g>
        </a>

        <!-- Hornalan -->
        <a href="brgy_profile.php?brgy=Hornalan ">
            <g id="Hornalan">
	            <polygon class="st0" fill="<?php echo $colorHornalan; ?>" points="203.900 377.300, 215.200 377.300, 228.000 377.600, 239.600 377.800, 246.100 380.600, 246.600 389.500, 246.600 394.100, 247.200 404.800, 247.200 415.000, 247.100 422.000, 246.500 425.900, 241.800 429.800, 237.500 431.500, 233.900 431.800, 229.000 435.700, 215.600 434.400, 210.600 427.600, 207.200 423.000, 201.300 425.300, 194.600 429.600, 186.000 422.700, 174.400 416.900, 173.400 412.000, 181.800 398.200, 186.500 395.100, 193.000 393.500, 197.500 392.900, 198.900 386.900, 199.300 379.500, 202.200 377.400, 203.900 377.300"/>
                <title>Hornalan</title>
            </g>
        </a>

        <!-- Bunggo -->
        <a href="brgy_profile.php?brgy=Bunggo ">
            <g id="Bunggo">
	            <polygon class="st0" fill="<?php echo $colorBunggo; ?>" points="281.200 402.100, 286.300 399.800, 289.700 399.000, 292.100 400.600, 295.100 403.000, 296.500 409.800, 291.400 412.600, 291.200 420.900, 294.900 437.200, 297.000 440.500, 300.800 442.400, 300.200 445.900, 300.900 448.800, 293.400 452.600, 275.100 456.500, 262.800 460.100, 246.000 463.500, 219.300 465.200, 192.200 468.300, 163.400 470.900, 140.100 475.800, 120.200 480.800, 115.100 473.500, 108.800 464.500, 115.200 455.800, 119.500 450.900, 125.800 447.800, 130.200 443.700, 133.500 439.800, 135.300 434.600, 139.300 433.900, 140.600 432.900, 140.800 430.100, 142.500 429.100, 144.600 427.800, 146.000 424.600, 148.500 424.700, 150.100 422.300, 152.800 418.600, 159.500 415.100, 164.300 413.600, 169.000 416.400, 171.000 416.700, 172.600 416.800, 179.100 417.800, 186.700 423.000, 192.300 428.100, 198.900 426.700, 207.700 422.700, 210.700 426.500, 214.100 432.500, 220.000 435.800, 229.900 435.500, 233.900 434.400, 235.300 430.400, 238.400 431.500, 242.000 429.600, 245.600 426.500, 247.800 425.700, 248.600 424.100, 251.400 422.400, 256.000 421.300, 259.900 418.400, 266.900 417.400, 273.500 415.200, 275.200 411.000, 272.600 408.100, 272.200 405.900, 275.300 406.500, 278.600 404.400, 281.200 402.100"/>
                <title>Bunggo</title>
            </g>
        </a>

        <!-- Mabato -->
        <a href="brgy_profile.php?brgy=Mabato ">
            <g id="Mabato">
 	            <polygon class="st0" fill="<?php echo $colorMabato; ?>" points="27.400 417.400, 37.400 416.900, 47.700 416.500, 53.600 416.600, 55.000 417.000, 55.900 418.900, 51.600 429.300, 47.200 438.600, 44.900 442.400, 45.700 443.500, 57.200 442.400, 60.600 441.300, 60.600 436.600, 65.200 431.800, 74.600 426.500, 77.500 420.300, 79.500 419.600, 83.300 418.500, 84.900 419.100, 92.700 426.200, 103.400 436.600, 112.100 445.300, 116.000 449.100, 117.600 450.400, 118.500 451.700, 117.200 453.400, 114.100 457.300, 110.200 462.700, 108.600 465.600, 111.600 470.100, 117.100 475.600, 119.300 479.400, 119.300 480.800, 110.600 482.500, 100.300 484.800, 90.400 487.000, 77.000 490.000, 63.100 493.200, 51.500 495.800, 42.900 497.900, 36.100 499.500, 30.500 500.500, 29.400 496.900, 32.500 481.700, 33.600 466.300, 31.100 455.000, 28.100 448.100, 26.400 442.800, 29.400 433.900, 29.300 425.700, 24.700 419.400, 24.400 417.800, 25.700 417.500, 27.400 417.400"/>
                <title>Mabato</title>
            </g>
        </a>

        <!-- Burol -->
        <a href="brgy_profile.php?brgy=Burol">
            <g id="Burol">
                <polygon class="st0" fill="<?php echo $colorBurol; ?>" points="327.300 376.500, 329.000 376.800, 332.400 377.600, 335.500 376.900, 337.100 374.900, 337.700 370.800, 342.000 368.100, 346.400 362.600, 350.400 360.000, 355.200 359.500, 357.400 359.800, 358.200 360.700, 359.000 365.900, 361.000 372.700, 361.400 380.500, 361.500 386.500, 361.400 390.900, 363.000 394.200, 366.900 400.500, 371.700 407.600, 375.100 410.800, 381.900 410.500, 385.900 411.300, 388.400 415.000, 389.100 417.400, 384.300 418.100, 380.700 418.300, 375.400 420.300, 370.000 423.900, 369.900 429.900, 365.400 432.600, 366.400 437.100, 369.000 441.900, 365.700 445.700, 367.700 450.700, 367.700 452.600, 365.300 456.700, 356.400 452.200, 344.600 449.500, 333.600 448.200, 324.100 446.200, 314.100 446.700, 307.100 449.200, 301.400 449.300, 300.500 447.200, 301.000 445.400, 301.000 441.800, 298.600 440.700, 295.900 439.200, 293.400 428.400, 290.800 418.000, 290.800 413.500, 293.900 411.500, 297.000 409.600, 296.200 405.500, 294.600 401.500, 291.300 399.800, 291.200 398.900, 293.800 397.000, 297.300 395.300, 300.700 393.700, 303.100 391.000, 307.900 390.800, 310.300 389.000, 312.400 384.900, 315.000 382.100, 318.400 380.200, 323.000 380.300, 324.800 379.200, 327.300 376.500"/>
                <title>Burol</title>
            </g>
        </a>

        <!-- Kay Anlog -->
        <a href="brgy_profile.php?brgy=kay-anlog ">
            <g id="Kay-anlog">
	            <polygon class="st0" fill="<?php echo $colorKayanlog; ?>" points="393.000 425.300, 396.000 425.000, 400.100 420.200, 405.200 414.100, 405.200 407.000, 405.700 399.500, 410.100 398.700, 416.400 406.000, 421.400 405.400, 425.700 401.700, 432.700 401.200, 437.300 397.800, 437.600 392.400, 438.300 389.900, 443.700 389.000, 452.600 383.800, 458.400 379.200, 464.000 377.600, 466.300 378.500, 467.000 386.500, 471.700 391.700, 479.900 393.200, 478.500 397.500, 480.600 404.500, 480.600 409.700, 477.300 412.600, 477.800 416.300, 469.700 419.800, 460.900 424.300, 456.100 429.400, 446.800 431.600, 437.800 434.800, 434.600 442.500, 426.900 449.600, 420.100 451.100, 419.300 454.500, 410.300 456.100, 405.600 461.100, 401.400 464.100, 399.500 467.200, 398.400 469.500, 394.300 471.000, 381.100 465.200, 368.800 459.600, 364.900 456.700, 366.000 455.100, 367.300 452.600, 366.900 450.000, 366.200 443.900, 368.100 439.400, 364.700 433.300, 368.600 430.600, 369.900 427.400, 370.800 422.600, 376.300 419.600, 380.700 418.200, 386.900 417.700, 389.000 417.900, 390.700 424.100, 393.000 425.300"/>
                <title>Kay Anlog</title>
            </g>
        </a>

        <!-- Ulango -->
        <a href="brgy_profile.php?brgy=Ulango ">
            <g id="Ulango">
	            <polygon class="st0" fill="<?php echo $colorUlango; ?>" points="479.700 416.800, 482.500 418.300, 482.500 422.600, 483.800 426.500, 485.600 434.200, 487.100 444.200, 487.100 454.600, 487.800 464.700, 482.500 471.400, 481.200 482.500, 479.400 488.000, 475.400 496.400, 475.000 503.300, 469.800 502.100, 452.900 494.900, 440.700 489.700, 430.300 484.900, 422.500 482.600, 408.500 476.600, 401.700 474.100, 396.200 472.000, 396.900 470.300, 400.000 465.500, 403.400 462.900, 405.900 460.200, 409.200 456.700, 411.700 455.400, 418.000 454.600, 420.400 452.700, 421.000 450.300, 426.000 449.600, 430.900 446.800, 434.700 442.200, 437.000 436.200, 439.800 433.400, 448.100 430.900, 453.900 429.400, 458.500 427.900, 462.100 422.900, 470.800 419.300, 475.400 417.600, 478.000 415.900, 479.700 416.800"/>
                <title>Ulango</title>
            </g>
        </a>

        <!-- Tulo -->
        <a href="brgy_profile.php?brgy=Tulo ">
            <g id="Tulo">
                <polygon class="st0" fill="<?php echo $colorTulo; ?>"points="511.700 329.000, 515.300 326.100, 519.700 322.400, 521.700 319.700, 522.500 318.100, 523.500 314.500, 525.900 313.500, 528.500 315.800, 528.600 319.300, 527.000 323.400, 529.600 324.800, 531.600 325.400, 530.100 327.700, 529.200 329.400, 531.700 329.900, 535.900 326.400, 538.600 322.200, 539.400 323.400, 539.400 332.400, 540.800 339.200, 543.900 344.800, 544.900 347.500, 542.600 350.400, 545.100 354.700, 544.700 357.800, 542.400 362.600, 545.000 366.700, 546.400 370.800, 551.600 373.200, 548.300 376.600, 542.100 377.400, 539.000 374.400, 533.600 373.600, 531.800 377.400, 533.200 384.300, 531.800 388.400, 526.700 389.200, 528.500 393.800, 524.700 396.900, 524.500 400.900, 525.300 404.300, 531.700 409.600, 533.600 413.500, 533.900 417.500, 523.500 419.800, 512.400 420.900, 509.600 420.300, 507.300 416.800, 504.700 419.700, 495.400 419.400, 495.400 415.700, 491.400 416.000, 483.500 418.200, 479.600 418.400, 478.400 417.700, 478.100 417.100, 477.900 415.900, 477.000 413.800, 478.500 412.000, 481.500 409.900, 480.400 405.800, 478.700 400.200, 478.600 397.200, 479.800 394.900, 477.400 393.100, 470.700 393.200, 468.200 391.600, 466.500 385.600, 466.300 380.600, 466.200 378.900, 466.900 378.100, 470.200 374.600, 473.600 369.000, 475.600 362.200, 476.800 359.000, 481.900 355.900, 485.400 351.300, 487.300 347.900, 488.700 344.500, 491.000 343.500, 493.100 343.300, 495.700 344.100, 498.000 342.600, 502.400 337.900, 508.000 332.700, 511.700 329.000"/>
                <title>Tulo</title>
            </g>
        </a>

        <!-- Lamesa -->
        <a href="brgy_profile.php?brgy=Lamesa ">
            <g id="La_mesa">
                <polygon class="st0" fill="<?php echo $colorLamesa; ?>" points="557.400 286.800, 560.900 286.400, 563.500 286.000, 567.300 284.400, 573.000 280.500, 577.200 279.200, 582.400 280.300, 585.600 287.600, 587.000 292.600, 590.800 292.600, 599.000 291.100, 603.300 292.000, 605.700 294.300, 608.500 293.800, 610.200 293.900, 614.300 296.200, 617.300 300.400, 615.800 302.900, 609.500 311.500, 611.700 318.700, 621.100 324.600, 625.600 326.200, 630.400 323.000, 632.800 328.500, 631.600 337.300, 626.000 336.900, 621.600 338.300, 618.600 347.700, 616.500 352.700, 607.900 354.500, 588.400 359.000, 575.300 360.800, 575.600 357.900, 577.200 353.000, 570.600 348.200, 567.500 340.700, 568.100 334.400, 571.400 330.600, 557.800 331.000, 544.000 331.400, 540.400 331.800, 539.000 330.500, 539.000 324.300, 538.900 320.700, 539.200 319.300, 540.800 316.600, 541.200 315.000, 541.700 314.400, 543.300 311.700, 546.000 305.800, 550.700 303.700, 551.000 300.300, 549.500 293.900, 550.000 289.000, 551.300 286.100, 553.800 285.600, 555.900 286.500, 557.400 286.800"/>
                <title>Lamesa</title>
            </g>
        </a>

        <!-- Bucal -->
        <a href="brgy_profile.php?brgy=Bucal ">
            <g id="Bucal">
                <polygon class="st0" fill="<?php echo $colorBucal; ?>" points="626.600 297.000, 630.400 295.200, 637.800 292.100, 647.300 288.100, 654.000 284.500, 657.500 284.200, 659.800 286.600, 661.500 286.400, 666.900 285.500, 669.500 286.500, 671.000 290.500, 674.100 289.800, 677.700 289.100, 679.600 291.100, 681.600 294.000, 687.100 291.800, 693.200 287.400, 695.900 287.300, 698.600 290.800, 700.900 290.500, 701.400 293.200, 697.900 297.100, 696.300 304.000, 700.800 314.800, 705.400 320.100, 709.700 321.500, 714.100 321.500, 713.700 328.100, 709.900 327.000, 705.300 322.800, 701.200 324.800, 696.600 337.000, 693.000 344.000, 691.000 342.400, 683.500 337.200, 681.700 338.000, 681.700 343.300, 677.600 345.800, 671.100 354.200, 667.700 348.000, 664.600 343.400, 662.400 344.300, 662.500 350.900, 658.800 354.200, 651.400 356.900, 647.600 356.900, 635.700 354.900, 624.300 354.000, 616.900 353.500, 616.700 352.000, 619.600 345.100, 621.100 340.300, 621.500 337.700, 624.300 336.700, 630.300 337.700, 632.200 335.600, 632.500 329.200, 632.200 325.500, 629.600 323.200, 626.500 325.700, 624.400 326.600, 619.300 324.000, 614.600 320.900, 609.700 317.300, 609.300 312.000, 612.800 306.200, 616.800 302.000, 618.200 301.000, 623.500 298.700, 626.600 297.000"/>
                <title>Bucal</title>
            </g>
        </a>

        <!-- Pansol -->
        <a href="brgy_profile.php?brgy=Pansol ">
            <g id="Pansol">
                <polygon class="st0" fill="<?php echo $colorPansol ?>" points="648.900 358.100, 647.300 363.900, 644.100 369.600, 640.400 376.200, 636.900 381.300, 636.400 385.700, 641.100 394.000, 644.100 399.800, 647.300 401.800, 654.000 399.800, 663.200 397.300, 673.700 396.700, 688.000 396.400, 696.500 396.800, 705.900 397.700, 712.900 402.300, 720.500 413.200, 720.500 427.900, 720.300 435.100, 720.800 439.500, 727.400 437.700, 734.000 442.300, 737.500 445.200, 737.900 439.800, 743.200 432.200, 749.700 427.900, 750.600 423.500, 749.000 415.800, 748.700 409.100, 751.700 404.500, 751.300 401.800, 749.400 395.700, 750.500 390.600, 746.600 388.700, 745.300 379.200, 746.300 374.600, 748.200 370.600, 750.700 366.100, 749.800 359.900, 748.500 352.300, 748.200 343.900, 750.400 340.000, 753.400 341.700, 755.200 338.900, 750.500 335.700, 748.400 331.100, 743.300 329.500, 739.500 327.600, 736.900 321.400, 736.100 316.600, 733.100 314.900, 731.100 319.700, 725.600 319.000, 721.600 317.400, 715.600 319.900, 714.400 321.100, 714.400 324.300, 714.400 326.300, 713.700 328.300, 711.600 328.000, 707.700 324.900, 705.000 322.800, 702.000 323.300, 700.500 329.300, 698.000 335.100, 695.100 340.600, 693.500 343.500, 692.500 343.900, 687.000 339.700, 683.800 337.700, 681.800 338.300, 681.200 344.100, 677.300 346.800, 673.800 351.400, 672.000 353.600, 671.700 354.000, 669.700 351.800, 666.200 345.000, 664.500 343.600, 662.800 344.100, 662.800 350.300, 661.600 352.900, 656.900 355.300, 651.200 357.400, 649.500 357.600, 648.900 358.100"/>
                <title>Pansol</title>
            </g>
        </a>

        <!-- Maunong -->
        <a href="brgy_profile.php?brgy=Maunong ">
            <g id="Maunong">
	            <polygon class="st0" fill="<?php echo $colorMaunong; ?>" points="546.700 331.400, 553.200 331.200, 561.200 330.900, 567.300 330.600, 570.100 330.600, 571.700 331.400, 567.500 335.200, 567.000 337.800, 567.700 341.300, 570.500 347.600, 574.500 350.900, 577.700 353.600, 577.300 356.000, 575.100 359.800, 577.900 360.700, 586.900 359.300, 594.300 357.800, 598.400 356.700, 606.100 354.900, 612.500 353.800, 616.300 352.900, 617.200 353.000, 625.900 353.800, 637.700 354.800, 645.100 355.900, 648.300 356.800, 649.300 357.700, 647.200 364.600, 644.200 370.000, 641.800 374.700, 638.200 379.700, 637.200 386.100, 641.700 394.200, 644.100 398.800, 645.400 401.300, 645.000 402.300, 642.400 403.700, 644.900 411.600, 647.600 419.500, 647.600 429.900, 647.900 441.600, 639.400 445.300, 628.200 448.400, 622.600 443.400, 616.300 437.100, 601.100 437.900, 596.500 437.500, 596.000 433.300, 591.900 428.900, 591.000 425.100, 589.100 422.500, 584.500 419.400, 574.600 412.600, 573.800 410.600, 564.100 407.300, 560.700 402.000, 555.300 399.600, 556.600 394.700, 557.500 384.700, 552.400 377.700, 551.200 373.500, 551.200 370.800, 547.000 369.500, 545.500 367.300, 544.900 364.900, 542.800 361.600, 542.800 359.500, 544.200 357.100, 545.700 354.200, 543.700 350.400, 542.900 349.300, 542.700 348.200, 544.900 346.300, 544.800 344.500, 542.600 341.300, 541.100 338.400, 540.400 335.800, 539.600 332.100, 540.000 331.800, 541.800 331.600, 545.300 331.300, 546.700 331.400"/>
                <title>Maunong</title>
            </g>
        </a>

        <!-- Saimsim -->
        <a href="brgy_profile.php?brgy=Saimsim ">
            <g id="Saimsim">
	            <polygon class="st0" fill="<?php echo $colorSaimsim; ?>" points="533.100 372.600, 533.700 371.900, 536.500 371.900, 539.000 373.300, 541.200 375.800, 544.900 375.700, 547.600 375.200, 549.500 374.800, 550.700 374.000, 551.700 377.100, 554.100 380.500, 556.600 383.700, 557.400 386.800, 557.500 391.000, 555.800 395.000, 554.600 398.300, 555.900 400.200, 559.700 401.700, 562.400 404.300, 564.100 407.500, 569.900 409.300, 573.200 410.600, 574.000 412.200, 571.500 414.100, 568.200 415.500, 563.900 417.800, 561.100 424.500, 562.900 431.200, 567.200 435.900, 567.300 438.600, 561.900 444.000, 555.900 450.300, 554.000 451.400, 551.200 446.300, 544.500 442.700, 542.400 436.100, 535.900 429.700, 534.700 425.200, 534.100 418.600, 533.500 415.800, 534.100 415.100, 533.100 411.200, 531.700 408.300, 526.400 403.900, 524.000 401.600, 523.800 399.400, 524.400 396.800, 524.400 395.000, 527.200 392.900, 528.100 391.200, 526.700 388.900, 526.300 387.400, 528.400 387.000, 532.000 386.600, 533.100 384.100, 531.800 377.800, 531.300 375.500, 531.900 373.600, 533.100 372.600"/>
                <title>Saimsim</title>
            </g>
        </a>

        <!-- Camaligan -->
        <a href="brgy_profile.php?brgy=Camaligan ">
            <g id="Camaligan">
	            <polygon class="st0" fill="<?php echo $colorCamaligan; ?>"points="578.000 414.400, 581.300 416.500, 583.500 418.600, 586.500 422.300, 587.800 422.500, 590.100 422.600, 590.600 424.700, 591.200 428.600, 595.000 431.600, 595.700 434.300, 595.900 437.100, 597.800 438.200, 595.000 441.800, 589.200 446.300, 589.400 450.200, 587.600 453.000, 582.500 454.200, 583.500 458.500, 584.500 463.600, 583.300 468.000, 577.300 473.500, 572.800 474.800, 570.100 474.800, 567.100 472.600, 563.100 470.700, 562.600 467.700, 561.500 464.200, 555.000 463.200, 555.000 459.400, 556.800 454.800, 555.000 452.300, 555.900 450.500, 561.000 444.800, 564.600 441.400, 567.600 438.200, 567.500 435.800, 563.000 430.700, 561.300 424.700, 563.400 418.100, 569.600 414.700, 573.200 413.000, 574.700 412.500, 576.200 413.100, 578.000 414.400"/>
                <title>Camaligans</title>
            </g>
        </a>

        <!-- Puting Lupa -->
        <a href="brgy_profile.php?brgy=Putinglupa ">
            <g id="Puting_Lupa">
                <polygon class="st0" fill="<?php echo $colorPutingLupa; ?>" points="658.400 398.600, 668.400 397.000, 684.800 396.400, 697.100 397.000, 706.500 397.800, 715.400 404.700, 720.900 414.500, 720.800 427.800, 720.200 438.300, 721.800 439.400, 727.600 437.600, 733.400 441.700, 736.800 445.400, 741.600 449.700, 746.500 449.300, 746.500 435.400, 752.300 430.100, 752.300 427.100, 756.900 423.700, 761.400 424.200, 764.000 420.500, 766.400 415.100, 769.700 420.100, 767.000 436.700, 764.900 454.800, 762.200 472.300, 759.600 490.100, 758.000 503.100, 756.600 513.600, 755.900 523.400, 755.200 527.600, 742.000 527.000, 725.400 526.000, 712.100 525.700, 695.500 525.400, 676.900 524.200, 673.500 525.500, 654.300 526.000, 636.700 526.000, 616.800 525.500, 599.800 524.700, 601.700 522.000, 609.200 514.200, 614.800 512.800, 611.400 508.200, 606.700 501.900, 603.200 491.600, 592.000 484.600, 580.700 484.400, 575.400 479.100, 572.600 474.800, 579.500 472.000, 583.900 466.400, 583.700 459.300, 582.400 454.200, 587.000 453.000, 589.500 451.100, 589.100 447.700, 592.800 442.900, 597.800 439.300, 599.900 437.700, 610.900 436.900, 617.700 438.100, 624.800 446.400, 632.500 447.400, 644.700 443.200, 647.700 435.400, 647.200 422.000, 645.400 413.900, 642.300 404.600, 643.500 402.400, 648.700 401.200, 654.400 399.400, 658.400 398.600"/>
                <title>Puting Lupa</title>
            </g>
        </a>

        <!-- Bagong Kalsada -->
        <a href="brgy_profile.php?brgy=BagongKalsada ">
            <g id="Bagong_Kalsada">
                <polygon class="st0" fill="<?php echo $colorBagongKalsada; ?>" points="751.300 372.800, 758.100 372.800, 768.200 372.800, 774.000 373.300, 774.000 382.700, 773.700 392.000, 771.900 404.400, 770.200 412.100, 769.100 416.400, 766.400 415.300, 764.300 418.100, 763.500 423.700, 759.200 423.900, 753.500 425.200, 752.400 427.200, 752.400 430.200, 747.900 434.300, 745.900 437.800, 746.500 446.700, 746.100 450.900, 741.000 449.200, 737.400 445.900, 737.800 445.200, 738.300 441.900, 740.200 434.600, 746.700 430.900, 750.000 428.000, 751.100 424.900, 749.800 418.300, 748.600 412.300, 750.000 408.100, 752.100 404.200, 751.700 401.900, 749.700 396.400, 751.200 391.600, 749.900 390.000, 745.900 385.100, 746.300 376.300, 746.800 373.800, 748.500 372.800, 751.300 372.800"/>
                <title>Bagong Kalsada</title>
            </g>
        </a>

        <!-- Sucol -->
        <a href="brgy_profile.php?brgy=Sucol ">
            <g id="Sucol">
                <polygon class="st0"fill="<?php echo $colorSucol; ?>" points="757.000 338.400, 759.600 339.300, 763.100 340.600, 767.400 341.000, 770.600 343.800, 771.800 349.200, 769.200 358.800, 769.600 366.200, 773.000 368.300, 775.300 370.200, 774.700 373.200, 770.400 372.600, 760.500 372.800, 754.000 372.800, 749.000 372.600, 747.200 372.700, 747.000 372.000, 749.400 369.700, 750.800 363.200, 748.800 354.300, 748.400 347.700, 748.500 342.800, 749.800 340.100, 751.000 340.200, 753.500 341.600, 755.200 340.200, 755.500 339.100, 755.700 338.300, 757.000 338.400"/>
                <title>Sucol</title>
            </g>
        </a>

        <!-- Masili -->
        <a href="brgy_profile.php?brgy=Masili ">
            <g id="Masili">
                <polygon class="st0" fill="<?php echo $colorMasili; ?>" points="770.600 337.300, 772.400 337.300, 775.000 339.500, 778.500 340.800, 779.600 343.600, 778.800 349.900, 777.500 357.800, 776.700 364.400, 776.300 368.100, 775.200 369.100, 773.200 368.200, 770.500 367.100, 768.900 363.100, 769.300 357.000, 770.800 351.800, 771.200 344.900, 768.000 341.400, 766.800 340.200, 766.800 338.800, 769.200 337.900, 770.600 337.300"/>
                <title>Masili</title>
            </g>
        </a>

        <!-- Makiling -->
        <a href="brgy_profile.php?brgy=Makiling ">
            <g id="Makiling">
                <polygon class="st0" fill="<?php echo $colorMakiling; ?>" points="487.900 415.500, 491.500 414.500, 493.500 414.100, 495.400 414.800, 495.500 417.900, 501.700 418.400, 506.200 417.100, 508.700 416.300, 510.900 420.100, 516.800 419.000, 526.000 417.900, 532.100 416.600, 534.100 417.600, 534.900 425.400, 539.300 434.300, 545.100 439.100, 546.300 444.700, 553.400 448.400, 554.400 452.100, 556.100 453.400, 556.500 457.000, 554.400 461.400, 556.800 464.100, 561.500 464.600, 563.100 466.900, 563.200 471.500, 568.200 473.400, 569.800 474.900, 572.300 475.500, 574.200 478.000, 578.200 482.100, 585.100 485.200, 598.700 487.900, 605.300 496.700, 611.900 508.800, 615.000 513.000, 609.100 514.600, 604.600 519.300, 600.200 524.500, 589.500 521.800, 565.400 515.000, 544.500 508.200, 530.800 504.800, 520.700 503.700, 507.300 508.700, 503.700 508.400, 497.900 508.100, 490.600 509.000, 484.000 506.300, 474.700 504.200, 474.800 499.800, 476.900 492.200, 481.000 482.300, 481.800 472.900, 486.500 466.500, 487.800 460.600, 486.700 446.400, 486.300 439.600, 484.200 428.300, 482.300 423.300, 482.700 419.100, 481.400 417.900, 481.400 416.900, 487.900 415.500"/>
                <title>Makiling</title>
            </g>
        </a>
        </svg>
    </div>
</div>


<br><br><br><br><br><br>
<script src="assets\web\assets\jquery\jquery.min.js"></script>

<script  src="assets/js/index.js"></script>

<?php
    include('footer.php');
?>
