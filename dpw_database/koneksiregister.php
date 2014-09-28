	<?php
		if (isset($_POST["submit"])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$con=mysql_connect ('localhost','root','') or die (mysql_error());
		mysql_select_db ('dpw_database') or die ("cannot select DB");
		
		$query = mysql_query ("SELECT * FROM data_dpw WHERE username= '".$user."'");
		$numrows = mysql_num_rows($query);
			if ($numrows==0) {
				$sql = "INSERT INTO user(username,password) VALUES ('$user','$pass')";
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