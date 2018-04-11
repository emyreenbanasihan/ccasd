<?php
	session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-1-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  <title>LogIn</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <section class="menu cid-qMU0wUcFRx" once="menu" id="menu1-o">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="home.php">
                         <img src="assets/images/logo-1-122x122.png" alt="Mobirise" title="LogIn" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="home.php">AGRICULTURAL SERVICES DEPARTMENT</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
							<li class="nav-item">
                    <a class="nav-link link text-white display-4" href="home.php">HOME</a>
                </li>
							</ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="index.php">LOG IN<br></a></div>
        </div>
    </nav>
</section>


</style>
<BR>
	<BR>
<div class="container">
	<div class="media-container-row">
			<div class="title col-12 col-md-8">
			<h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Welcome!</h2>
			<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Please Login for Access</h3>
		</div>
	</div>
</div>


<div class="main-content">

	<form class="mbr-form" method="post" action="in.php">
		<table align="center">
			<tr>
				<td>
					<input class="form-control" type="text" name="username" placeholder="Username" required ><br/>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" type="password" name="password" placeholder="Password" required><br/>
				</td>
			</tr>
			<tr>

			</tr>
			<tr>
				<td>
					<center><button type="submit" value="Login" name="loginUser" class="btn btn-primary  display-4">Login</button></center>
				</td>
			</tr>
		</table>
	</form>

	</div>
	<BR>
		<BR>

<?php
    include('footer.php');
?>
