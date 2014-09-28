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
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:white;"><br>
			<div class="col-lg-2"></div>
			<div class="col-lg-8">

			<h2>Contoh Upload Gambar</h2>
			<form action="upload.php" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
			  <p>Judul Gambar :     <input name="judul_gambar" type="text" id="judul_gambar" size="30" maxlength="30" /> </p>
			  <p>File Gambar :     <input name="nama_file" type="file" id="nama_file" size="30" /> </p>
			  <p><input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" /></p>
			</form>
			
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="col-md-2"></div>
	</div>
	
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