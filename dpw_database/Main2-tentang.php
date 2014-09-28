<?php
	session_start();
	if (!isset($_SESSION["sess_user"])){
		header("location:Main.php");
	} else {
?>

<!DOCTYPE html>
<html lang="en">
	<!-- judul web -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Solution Furniture</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  
	<!-- header -->
  <header>
  	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:black;">
			<div class="media">
			  <div class="media-body pull-left">
			  <h1 style="color:white;">Smart Solution Furniture<br><small style="color:lightgrey">Pilihan pintar dalam kenyamanan</small></h1>
			  </div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
  </header>
	
  <body background = "image/background.jpg">
  
	<div class="row" style="background-color:transparent;">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:Navajowhite;">
		<ul class="nav nav-tabs">
		  <li><a href="Main2.php" style="color:black;">Home</a></li>
		  <li><a href="Main2-meja.php" style="color:black;">Meja</a></li>
		  <li><a href="Main2-sofa.php" style="color:black;">Sofa</a></li>
		  <li><a href="Main2-lemari.php" style="color:black;">Lemari</a></li>
		  <li><a href="Main2-transaksi.php" style="color:black;">Histori Pembelian</a></li>
		  <li class="active"><a href="Main2-tentang.php" style="color:black;">Tentang Kami</a></li>
			<li style="padding-top: 11px;">&nbsp Welcome, <?=$_SESSION['sess_user'];?>! &nbsp</li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</div>
		<div class="col-md-2"></div>
	</div>
	
	<?php include "include/contain/tentang.php"; ?>
	
		<!-- footer -->
  	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:black;">
			<div class="media">
			  <center>&copy Muhammad Ario Wibisono - 13410100070 for Smart Solution Furniture Site</center>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

	<?php
	}
	?>