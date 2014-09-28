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
			<h1>Pesan</h1><hr>
				<!-- INI FORM PEMESANAN-->
				<form action="" method="POST">
				<table>
					<tr>
					<td>Kategori</td>
					<td><input name="kategori" type="radio" value="Meja"> Meja <br>
						<input name="kategori" type="radio" value="Sofa"> Sofa <br>
						<input name="kategori" type="radio" value="Lemari"> Lemari </td>
					</tr>
					<tr>
					<td>Type Barang</td>
					<td><input type="text" name="tipe" placeholder="A / B / C / D"></td>
					</tr>
					<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah" placeholder="nominal"></td>
					</tr>
					<tr>
					<td>Alamat Tujuan &nbsp</td>
					<td><input type="text" name="alamat" placeholder=""></td>
					</tr>
					<tr>
					<td><button><a href="Main2.php" style="hover:none; color:black;">Kembali</a></button></td>
					<td><input type="submit" value="Pesan" name="submit"></td>
					</tr>
				</table>
				</form><br>
				
			<?php
				if (isset($_POST["submit"])) {
				$username = $_SESSION["sess_user"];
				$kategori = $_POST['kategori'];
				$tipe = $_POST['tipe'];
				$jumlah = $_POST['jumlah'];
				$alamat = $_POST['alamat'];
				$tanggal = date('j-F-Y');
				$total = 0;
				
				$con=mysql_connect ('localhost','root','') or die (mysql_error());
				mysql_select_db ('dpw_database') or die ("cannot select DB");
		
					$sql = "INSERT INTO pemesan(username,kategori,tipe,jumlah,alamat,tanggal) VALUES ('$username','$kategori','$tipe','$jumlah','$alamat','$tanggal')";
					$result = mysql_query($sql);
					if ($result){
						echo "Pesanan Segera Diproses dalam 1x1 hari. ";
						echo "";
					} else {}
					
					if ($kategori){
						if ($kategori=="Lemari"){
							if ($tipe=="A"){
								$total = $jumlah * 2000000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="B"){
								$total = $jumlah * 2200000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="C"){
								$total = $jumlah * 1900000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="D"){
								$total = $jumlah * 2000000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							}
						}
						else if ($kategori=="Sofa"){
							if ($tipe=="A"){
								$total = $jumlah * 1000000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="B"){
								$total = $jumlah * 1200000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="C"){
								$total = $jumlah * 900000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="D"){
								$total = $jumlah * 1000000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							}
						}
						else if ($kategori=="Meja"){
							if ($tipe=="A"){
								$total = $jumlah * 400000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="B"){
								$total = $jumlah * 250000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="C"){
								$total = $jumlah * 300000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							} else if ($tipe=="D"){
								$total = $jumlah * 400000;
								echo "Anda harus membayar sejumlah Rp $total , alamat rekening akan dikirim melalui email";
							}
						}
					}
				}
			?>
			
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