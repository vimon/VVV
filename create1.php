<?php
$roll=$_POST["roll"];
$name=$_POST["name"];


   $servername = "localhost";
   $username = "root";
   $password = "pass";
   $dbname = "vast";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

$query="insert into stud values('$roll','$name')";
$result = mysqli_query($conn,$query);

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
echo "Data Saved";
mysql_close($conn);
?>

<form action="display.php">
<input type="submit" name="save" value="Display"><br>
</form>
<form action="menu.html">
<input type="submit" name="save" value="Home"><br>
</form>

