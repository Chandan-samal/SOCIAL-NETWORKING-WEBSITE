<?php
session_start();
?>
<html>
    <title>Minglr - About Us</title>
    <head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/about.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon_minglr.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="https://kit.fontawesome.com/17a4e5185f.js" crossorigin="anonymous"></script>
    </head>

<body>
    <nav>
      <div class="menu-btn">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
      </div>
      <label class="logo"><a href="/"><img class="logo" src="logo\logo.png"></a></label>
      <ul class="menu-items">
        <li class="menu-items-li"><a class="navv-item" href="feed.php">Feed</a></li>
        <li class="menu-items-li">
            <?php
                if(isset($_SESSION['username'])){
                    echo '<a class="navv-item" href="account.php?username='.$_SESSION['username'].'" ">Account</a>';
                }else{
                    echo '<a class="navv-item" href="account.php">Account</a>';
                }
            ?>
        </li>
        <li class="menu-items-li">
            <?php
                    if(!isset($_SESSION['username'])){
                        echo '<a class="navv-item" href="index.php">Login</a>';
                    }
                    else{
                        echo '<a class="navv-item" href="back/logout.php">Logout</a>';
                    }
            ?>
        </li>
        <li class="menu-items-li"><a class="navv-item active" href="about-us.php">About Us</a></li>
      </ul>
    </nav>
  
<!-- <div class="navbar">
    <ul>
        <li>
            <img class="logo" src="logo\logo.png">
        </li>
        <li class="nav-item">
            <a href="feed.php" style="text-decoration: none">Feed</a>
        </li>
        <li class="nav-item">
            <a href="account.php" style="text-decoration: none">Account</a>
        </li>
        <li class="nav-item">
            <a href="/" style="text-decoration: none;">Login</a>
        </li>
    </ul>
</div> -->
<div class="seperate_header"></div>
    <center><img class="about-us-logo" src="logo/cover.png" alt="logo"></center>
    <h2>About Us</h2>
<div class="about-us" style="display:flex;flex-direction:row">
<div>
<dotlottie-player src="https://lottie.host/42940e87-5aae-45a7-a4f2-68d69b686432/IqkUFQ4wNR.json"
                                background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </dotlottie-player>
                </div>


    <div>
    <p>Minglr is a social networking site where users can share their posts, images, and chat with each other. It was created to provide a seamless experience to people who want to connect with others and share their experiences.</p>
    <p>We believe that social media can be used to bring people together and create positive changes in the world. Minglr is a platform that empowers people to express themselves and share their ideas with a wider audience.</p>
    <p>Our team is committed to creating a safe and inclusive environment for all users. We take privacy and security seriously and have implemented measures to protect user data. Minglr is a place where everyone is welcome and encouraged to be themselves.</p>
    <p>Thank you for being a part of our community. We look forward to seeing what you create and share on Minglr.</p>
    </div>
    
</div>
<div class="footer">
    <ul>
        <li class="foot-item">
            <a href="" class="foot-link" style="text-decoration: none">Home</a>
        </li>
        <li class="foot-item">
            <a href="feed.php" class="foot-link" style="text-decoration: none">Feed</a>
        </li>
        <li class="foot-item">
            <a href="account.php" class="foot-link" style="text-decoration: none">Account</a>
        </li>
        <li class="foot-item">
            <a href="about-us.php" class="foot-link" style="text-decoration: none">About us</a>
        </li>
        <p>This website is only for educational purpose and does not try to replicate any institution/enity/company - by Mayuresh Choudhary</p>
    </ul>
</div>
    
<script src="js/script.js"></script>
</body>
</html>
