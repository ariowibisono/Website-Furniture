	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:white;"><br>
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
			<h1>REGISTER</h1><hr>
				<form action="" method="POST">
				Username<br><input type="text" name="user" placeholder="Username"><br><br>
				Password<br><input type="password" name="pass" placeholder="Password"><br><br>
				Nama Lengkap<br><input type="text" name="nama" placeholder=""><br><br>
				Email<br><input type="text" name="email" placeholder="example@mail.com"><br><br>
				Nomor Telepon<br><input type="text" name="nomor" placeholder="number"><br><br>
				Alamat<br><input type="text" name="alamat"><br><br>
				<input type="submit" value="Daftar" name="submit">
				</form><br>
				
				<?php
					if (isset($_POST["submit"])) {
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					$nama = $_POST['nama'];
					$email = $_POST['email'];
					$nomor = $_POST['nomor'];
					$alamat = $_POST['alamat'];
					$status = 'client';
					
					$con=mysql_connect ('localhost','root','') or die (mysql_error());
					mysql_select_db ('dpw_database') or die ("cannot select DB");
					
					$query = mysql_query ("SELECT * FROM data WHERE username= '".$user."'");
					$numrows = mysql_num_rows($query);
						if ($numrows==0) {
							$sql = "INSERT INTO data(username,password,nama,email,nomor,alamat,status) VALUES ('$user','$pass','$nama','$email','$nomor','$alamat','$status')";
							$result = mysql_query($sql);
							if ($result){
								echo "Account Succesfully Created";
							} else {
								echo "Failure";
							}	
						} else {
							echo "That username already exists! Please try again with another.";
						}
					}
				?>
				
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="col-md-2"></div>
	</div>