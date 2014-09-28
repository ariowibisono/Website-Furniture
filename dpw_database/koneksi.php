	<?php
		if (isset($_POST["submit"])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$con=mysql_connect ('localhost','root','') or die (mysql_error());
		mysql_select_db ('dpw_database') or die ("cannot select DB");
		
		$query=mysql_query("SELECT * FROM data_dpw WHERE username='".$user."' AND password='".$pass."'");
		$numrows=mysql_num_rows($query);
				
			if ($numrows!=0) {
					while ($row=mysql_fetch_assoc($query)) {
					$dbusername=$row['username'];
					$dbpassword=$row['password'];
				}
				//memindahkan ke halaman member
				if ($user == $dbusername && $pass == $dbpassword){
					session_start();
					$_SESSION['sess_user']=$user;
					header("Location:Main2.php");
				}
			} else {
					echo "Invalid username or password";
			}
		}
	?>