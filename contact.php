<?php
$na=$_POST['name'];
$pw=$_POST['email'];
$em=$_POST['phone'];
$da=$_POST['subject'];
$ph=$_POST['message'];

$con=mysqli_connect("localhost","root","","mediplus");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into contact values('$na','$pw','$em','$da','$ph')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
header("location: index.html");
else
echo "Some problem is occured";
}
?>