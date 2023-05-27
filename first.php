<?php
$con=mysqli_connect("localhost","root","");
$q1="use dbs";
mysqli_query($con,$q1);
$q2="insert into login values('$_POST[userid2]','$_POST[pass2]','$_POST[email2]')";
if(isset($_POST['signup']))
{
mysqli_query($con,$q2);
header('location:login.html');
}
if(isset($_POST['login']))
{
    
    $q3="select password from login where username='$_POST[userid1]'";
    $userpass=mysqli_query($con,$q3);
    $ans="";
    while($row=mysqli_fetch_array($userpass))
    {
      $ans=$row['password'];
    }
    if($ans==$_POST['pass1'])
    {
        header('location:userpage.html');
        
    }
    else
    {
        
        header('location:login.html');
        
        
    }
   /* $qu="select username from login where password='$_POST[pass1]'";
    $userpass2=mysqli_query($con,$qu);
    $ans2="";
    while($row2=mysqli_fetch_array($userpass2))
    {
      $ans2=$row2['username'];
    }
    session_start();
    $_SESSION['un']=$ans2;
*/  
}

?>