<?php
$con=mysqli_connect("localhost","root","");
$q1="use dbs";
mysqli_query($con,$q1);
$q2="insert into billingdetails values('$_POST[firstname2]','$_POST[firstname]','$_POST[email]','$_POST[address]','$_POST[state]','$_POST[zip]','$_POST[cardname]','$_POST[cardnumber]','$_POST[expmonth]','$_POST[expyear]','$_POST[cvv]')";
if(isset($_POST['added']))
{
mysqli_query($con,$q2);
header('location:userpage.html');
}
?>