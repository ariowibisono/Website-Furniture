	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:white;"><br>
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
			<h1>LOGIN</h1><hr>
				<form action="" method="POST">
				Username<br><input type="text" name="user" placeholder="Username"><br><br>
				Password<br><input type="password" name="pass" placeholder="Password"><br><br>
				<input type="submit" value="Login" name="submit">
				</form><br>
				
				<?php
					if (isset($_POST["submit"])) {
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					
					$con=mysql_connect ('localhost','root','') or die (mysql_error());
					mysql_select_db ('dpw_database') or die ("cannot select DB");
					
					$query=mysql_query("SELECT * FROM data WHERE username='".$user."' AND password='".$pass."'");
					$numrows=mysql_num_rows($query);
							
						if ($numrows!=0) {
								while ($row=mysql_fetch_assoc($query)) {
								$dbusername=$row['username'];
								$dbpassword=$row['password'];
								$dbstatus=$row['status'];
							}
							//memindahkan ke halaman member
							if ($user == $dbusername && $pass == $dbpassword && $dbstatus == "client"){
								session_start();
								$_SESSION['sess_user']=$user;
								header("Location:Main2.php");
							} else if ($user == $dbusername && $pass == $dbpassword && $dbstatus == "admin") {
								session_start();
								$_SESSION['sess_user2']=$user;
								header("Location:Main3.php");
							}
						} else {
								echo "Invalid username or password";
						}
					}
				?>
				
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="col-md-2"></div>
	</div>