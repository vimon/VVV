<html>
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

$query="delete from stud where roll=$roll";

$result = mysqli_query($conn,$query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
print "Deleted";

mysql_close($conn);
?>
<form action="delete.php">
<input type="submit" value="Delete next"><br>
</form>
<form action="menu.html">
<input type="submit" value="Home"><br>
</form>
<form action="display.php">
<input type="submit" value="Display"><br>
</form>
</html>
