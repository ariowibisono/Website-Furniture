<?php
	session_start();
	if (!isset($_SESSION["sess_user"])){
		header("location:index.php");
	} else {
?>

	<div class="row" style="background-color:transparent;">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:Navajowhite;">
		<ul class="nav nav-tabs">
		  <li><a href="Index.php" style="color:black;">Home</a></li>
		  <li><a href="Index-meja.php" style="color:black;">Meja</a></li>
		  <li><a href="Index-sofa.php" style="color:black;">Sofa</a></li>
		  <li><a href="Index-lemari.php" style="color:black;">Lemari</a></li>
		  <li><a href="Main2-transaksi.php" style="color:black;">Histori Pembelian</a></li>
		  <li><a href="Index-tentang.php" style="color:black;">Tentang Kami</a></li>
			<li>
				<a>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></a>
			</li>
		</ul>
		</div>
		<div class="col-md-2"></div>
	</div>
	
	<?php
	}
	?>