<?php
$con=mysqli_connect("localhost","root","");
$q1="use dbs";
mysqli_query($con,$q1);

if(isset($_POST['add1']))
{
session_start();
$q2="insert into taken values('$_SESSION[un]','py')";
mysqli_query($con,$q2);
header('location:userpage.html');
}
if(isset($_POST['add2']))
{
$q3="insert into taken values('$_POST[userid1]','ml')";
mysqli_query($con,$q3);
header('location:userpage.html');
}
if(isset($_POST['add3']))
{
$q4="insert into taken values('$_POST[userid1]','ai')";
mysqli_query($con,$q4);
header('location:userpage.html');
}
if(isset($_POST['add4']))
{
$q5="insert into taken values('$_POST[userid1]','fla')";
mysqli_query($con,$q5);
header('location:userpage.html');
}
if(isset($_POST['add5']))
{
$q6="insert into taken values('$_POST[userid1]','iot')";
mysqli_query($con,$q6);
header('location:userpage.html');
}
if(isset($_POST['add6']))
{
$q7="insert into taken values('$_POST[userid1]','djan')";
mysqli_query($con,$q7);
header('location:userpage.html');
}
if(isset($_POST['add7']))
{
$q8="insert into taken values('$_POST[userid1]','jav')";
mysqli_query($con,$q8);
header('location:userpage.html');
}
if(isset($_POST['add8']))
{
$q9="insert into taken values('$_POST[userid1]','and')";
mysqli_query($con,$q9);
header('location:userpage.html');
}


?>
