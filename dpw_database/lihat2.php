<html>
    <body>
        <table border='1' align='center'>
            <tr><th>No</th><th>Username</th><th>Kategori</th><th>Tipe</th><th>Jumlah</th><th>Alamat</th><th>Tanggal Pesna</th></tr>
           
                <?php
        
                    $con=mysql_connect ('localhost','root','') or die (mysql_error());
					mysql_select_db ('dpw_database') or die ("cannot select DB");
                    
                    $query = "SELECT * FROM pemesan ";
                    $exee = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exee)){
                        
                        $aa = $row['username'];
                        $bb = $row['kategori'];
                        $cc = $row['tipe'];
                        $dd = $row['jumlah'];
                        $ee = $row['alamat'];
                        $ff = $row['tanggal'];
                        
                    echo "<tr><td>$no</td><td>$aa</td><td>$bb</td><td>$cc</td><td>$dd</td><td>$ee</td><td>$ff</td>/tr>";
                    $no++;
                    }
                ?>
			<center><a href="Main3.php">Kembali</a></center>
            
        
        </table>
    
    </body>

</html>