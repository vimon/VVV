<?php
$roll=$_POST["firstname"];
$name=$_POST["rollno"];

$dbhost='localhost';
$dbuser = 'root';
$dbpass = 'mysql';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'cse';
mysql_select_db($dbname);

$query="insert into stud values('$roll','$name')";

$result=mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
print "Data Saved";
mysql_close($conn);
?> 
