<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="with=device-width, intial-scale=1.0">
 <title>Discoveries of rurals in Calamba</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="/main.js"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="Home.html"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Gallery.html">Gallery</a></li>
                    <li><a href="Maps.html">Maps</a></li>
                    <li><a href="login.php">Log-out</a></li>
                    
                    
                </ul>
            </div>
            <div>
                <i class="fa fa-bars" onclick="showMenu()" ></i>
            </div>
            
        </nav>
        <div class="text-box">
            <h1>Explore The Amazing City of Calamba</h1>
            <p>Find the Greate Places to stay, eat, shop, or visit Ritual Escapse</p>
            

        </div>
        
    </section>
    
<!-------services-------->
    <section class="Gallery">
        <h1> Gallery</h1>
        <div class="row">
            <div class="Gallery-col">
                <img src="image/st joht the baptist.jpg">
                <div class="layer">
                    <h3>St. John the baptist Church</h3>
                </div>
               
            </div>
            <div class="Gallery-col">
                <img src="image/golf.jpg">
                <div class="layer">
                    <h3>Canlubang Golf Course</h3>
                </div>
               
            </div>
            <div class="Gallery-col">
                <img src="image/matang tubig.jpg">
                <div class="layer">
                    <h3>Matang tubig</h3>
                </div>
               
            </div>
        </div>

 
    </section>
   
<!-------About us-------->
<section class="ctn" id="cons">
    <h1> About us </h1>
    <div class="contact-theme">
       
        <p>Eco Discoveries in Calamba: Unvailing Sustainable Rural Escapses <br> Imagine a place where nature is untouched, where rivers flow freely, and where the air is clean and fresh. That's Calamba, a special spot in the Philippines waiting for you to explore.</p>
    </p>
    </div>
   
</section>

    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
       }
       function hideMenu(){
        navLinks.style.right = "-200px";
       }
    </script>
</body>
</html>