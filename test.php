<?php
echo"<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="style.css">

  <!-- ===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!--<title>Responsive Navigation Menu Bar</title>-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body>
  <nav id="navbar">
    <div class="nav-bar">
      <i class='bx bx-menu sidebarOpen'></i>
      <span class="logo navLogo"><a href="#">Udemy</a></span>

      <div class="menu">
        <div class="logo-toggle">
          <span class="logo"><a href="#">Udemy</a></span>
          <i class='bx bx-x siderbarClose'></i>
        </div>

        <ul class="nav-links">
          <li><a href="index.html">Home</a></li>
          <li> <div class="dropdown">
            <button class="dropbtn">Dropdown 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="ds.html">Data Structures</a>
              <a href="db.html">Database</a>
              <a href="maths.html">Maths</a>
            </div>
          </div>
         </li>
          <li><a href="contact.html" >Contact Us</a></li>
          <li><a href="login.html" >Login/Sign up</a></li>
          <ul class="nav-links"> <li><div class="dropdown">
            <button class="dropbtn">Cart 
            </button>
            <div class="dropdown-content">
              <a href="ds.html">Data Structures</a>
              <a href="db.html">Database</a>
              <a href="maths.html">Maths</a>
              <button type="reset" class="button" onclick="location.href='test.html'">checkout</button>
            </div></li><img src="icon.png"></ul>
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
      </div>
    </div>
  </nav>
    <div class="content-wrapper">
    <div class="portfolio-items-wrapper">

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio1.jpg)"></div>

        <div class="img-text-wrapper">


          <div class="subtitle">Learn Python: The Complete Python Programming Course</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio2.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Coding bootcamp and learning management system.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio3.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Eventbrite is the leading event management platform on the web with millions of
            individuals utilizing their applications
            to find, register or, and management events in numerous industries.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio4.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Shop Hacker allows you to easily import digital products such as elearning courses,
            software, and games directly
            into your ecommerce store.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio5.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Online tutorials and productivity tips.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio6.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Keep track of what you learn every day.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio7.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">What you track improves. DashTrack is a journal that makes it easy to track your daily
            tasks and make the most
            of your time each day.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio8.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Online shop for developer happiness.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio9.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Online technology tutorials.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio10.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">A complete child safety system for organizations.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio11.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Publish and share daily devotionals.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

      <div class="portfolio-item-wrapper">
        <div class="portfolio-img-background" style="background-image:url(portfolio12.jpg)"></div>
        <div class="img-text-wrapper">


          <div class="subtitle">Easy way to manage the digital life of your bar or restaurant.</div>
          <div class="subtitle">Price: Rs3000/-</div>
          <button type="reset" class="button" onclick="location.href='test.html'">Purchase</button>
        </div>
      </div>

    </div>
  </div>
  </div>
  <footer class="site-footer">
    <ul>  <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
         <li><h6>About</h6>
          <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
        </div>
      </li>
       <li> <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
          </ul>
        </div>
      </li>
      <li>
        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div></li></ul>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
       <a href="#">Scanfcode</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>

</footer>

  <script>

    const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

    let getMode = localStorage.getItem("mode");
    if (getMode && getMode === "dark-mode") {
      body.classList.add("dark");
    }

    // js code to toggle dark and light mode
    modeToggle.addEventListener("click", () => {
      modeToggle.classList.toggle("active");
      body.classList.toggle("dark");

      // js code to keep user selected mode even page refresh or file reopen
      if (!body.classList.contains("dark")) {
        localStorage.setItem("mode", "light-mode");
      } else {
        localStorage.setItem("mode", "dark-mode");
      }
    });

    // js code to toggle search box
    searchToggle.addEventListener("click", () => {
      searchToggle.classList.toggle("active");
    });


    //   js code to toggle sidebar
    sidebarOpen.addEventListener("click", () => {
      nav.classList.add("active");
    });

    body.addEventListener("click", e => {
      let clickedElm = e.target;

      if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
        nav.classList.remove("active");
      }
    });

    const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

    portfolioItems.forEach(portfolioItem => {
      portfolioItem.addEventListener('mouseover', () => {
        console.log(portfolioItem.childNodes[1].classList)
        portfolioItem.childNodes[1].classList.add('image-blur');
      });

      portfolioItem.addEventListener('mouseout', () => {
        console.log(portfolioItem.childNodes[1].classList)
        portfolioItem.childNodes[1].classList.remove('image-blur');
      });
    });
    window.onscroll = function() {scrollFunction()};
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}



  </script>


</body>

</html>"
?>