<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
<style>

    .a{
        margin-left: 300px;
        margin-top:100px;
        color:black;
    }
    h1{

    }
    </style>

</head>
<body>
<nav id="navbar">
        <div class="nav-bar">
          <i class='bx bx-menu sidebarOpen'></i>
          <span class="logo navLogo"><a href="#">SkillShare</a></span>
    
          <div class="menu">
            <div class="logo-toggle">
              <span class="logo"><a href="#">SkillShare</a></span>
              <i class='bx bx-x siderbarClose'></i>
            </div>
    
            <ul class="nav-links">
              <li><a href="userpage.html">Home</a></li>
              <li> <div class="dropdown">
                <button class="dropbtn">Category
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="ds.html">Data Structures</a>
                  <a href="db.html">Database</a>
                  <a href="maths.html">Maths</a>
                </div>
              
             </li>
              <li><a href="contact.html" >Contact Us</a></li>
              
             
            </ul>
          </div>
    
          <div class="darkLight-searchBox">
            <div class="dark-light">
             
            </div>
    
            <div class="searchBox">
              <div class="searchToggle">
                <i class='bx bx-x cancel'></i>
                <i class='bx bx-search search'></i>
              </div>
     
              <div class="search-field">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
              </div>
            </div>
            <ul class="nav-links">
            <li><div class="dropdown">
                <button class="dropbtn"><img src="userprofile.png">
                </button>
                <div class="dropdown-content">
                  <a href="ds.html">View profile</a>
                  <a href="db.html">Logout</a>
                </div></li>
                <li>
                    <div class="logo-toggle">
                        <span class="logo"><a href="#">
                        <i class='bx bx-x siderbarClose'></i>
                      </div>
                </li>
            </ul>
            </div>
        </div>
      </nav>
      <br>
      <br>
      <br>
       <br>
       <br>
       <br>
<?php
$con=mysqli_connect("localhost","root","");
$q1="use dbs";
mysqli_query($con,$q1);
echo"<h1 class='a'>profile : </h1>";
$q2="select*from billingdetails where userid='piyush_1048'";
  $user=mysqli_query($con,$q2);
    while($row=mysqli_fetch_array($user))
    {
      echo  $row['userid']."<br>".$row['full_name']."<br>".$row['email']."<br>".$row['address']."<br>".$row['state']."<br>";
    }
    session_start();
?>
</body>
</html>