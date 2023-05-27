<?php
$con=mysqli_connect("localhost","root","");
$q1="use dbs";
mysqli_query($con,$q1);
$q2="alter table help add foreign key(username) references login(username)";
mysqli_query($con,$q2);
$q3="insert into help values('$_POST[name]','$_POST[emailid]','$_POST[message]')";
if(isset($_POST['send']))
{
 mysqli_query($con,$q3);
}

?>