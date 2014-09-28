<?php
	session_start();
	if (!isset($_SESSION["sess_user"])){
		header("location:Main.php");
	} else {
?>

<html>
    <body>
        <table border='1' align='center'>
            <tr><th>No</th><th>Item</th><th>Jumlah</th><th>Alamat Tujuan</th><th>Tanggal</th></tr>
           
                <?php
					$usernamee = $_SESSION["sess_user"];
					
                    $con=mysql_connect ('localhost','root','') or die (mysql_error());
					mysql_select_db ('dpw_database') or die (mysql_error());
                    
                    $query = "SELECT * FROM pemesan WHERE username='".$usernamee."'";
                    $exeee = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exeee)){
                        
                        $aaa = $row['tipe'];
                        $bbb = $row['jumlah'];
                        $ccc = $row['alamat'];
                        $ddd = $row['tanggal'];
                        
                    echo "<tr><td>$no</td><td>$aaa</td><td>$bbb</td><td>$ccc</td><td>$ddd</td></tr>";
                    $no++;
                    }
					
                ?>
			<center><a href="Main2.php">Kembali</a></center>
            
        
        </table>
    
    </body>

</html>

	<?php
	}
	?>