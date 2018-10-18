<?php
 

$dbhost='localhost';
$dbuser = 'root';
$dbpass = 'pass';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

 


$query="select * from stud";

mysql_select_db('vast');
$result=mysql_query($query,$conn);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
?>

<table border="2">
  <thead>
    <tr>
      <th>Roll no</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while( $row = mysql_fetch_assoc($result) ){
          echo "<tr><td>{$row['roll']}</td><td>{$row['name']}</td> </tr>\n";
        }
      
    ?>
  </tbody>
</table>

<?php
   echo "Fetched data successfully\n";
   
  
mysql_close($conn);
?>
<form action="menu.html">
<input type="submit" name="save" value="Home"><br>
</form>
<form action="delete.php">
<input type="submit" name="save" value="Delete"><br>
</form>


