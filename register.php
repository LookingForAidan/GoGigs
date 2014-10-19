<?php
$con=mysqli_connect("localhost","root","","gogigslogin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO gogigsmember (username, email, password)
VALUES
('$_POST[username]','$_POST[email]','$_POST[password]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "";
header("location:gogigs.php");

mysqli_close($con);
?>