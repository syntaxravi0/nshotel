<?php
$na=$_POST['na'];
$ph=$_POST['ph1'];
$ad=$_POST['ad1'];
$em=$_POST['e1'];
$fees=$_POST['p1'];


$con=mysqli_connect("localhost","root","","mediplus");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into Book values('$na','$ph','$ad','$em','$fees')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "You are Successfully Appointed";
else
echo "Some problem is occured";
}
?>