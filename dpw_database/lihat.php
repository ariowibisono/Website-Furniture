<html>
    <body>
        <table border='1' align='center'>
            <tr><th>No</th><th>Username</th><th>Password</th><th>Nama</th><th>Email</th><th>Nomor Telpon</th><th>Alamat</th><th>Status</th></tr>
           
                <?php
        
                    $con=mysql_connect ('localhost','root','') or die (mysql_error());
					mysql_select_db ('dpw_database') or die ("cannot select DB");
                    
                    $query = "SELECT * FROM data ";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        
                        $a = $row['username'];
                        $b = $row['password'];
                        $c = $row['nama'];
                        $d = $row['email'];
                        $e = $row['nomor'];
                        $f = $row['alamat'];
                        $g = $row['status'];
                        
                    echo "<tr><td>$no</td><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td>$g</td></tr>";
                    $no++;
                    }
                
                ?>
			<center><a href="Main3.php">Kembali</a></center>
            
        
        </table>
    
    </body>

</html>