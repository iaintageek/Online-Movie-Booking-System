<!DOCTYPE html>
<html  >
<head>
  <?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "multiplex";

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  session_start();
  $disp=$_SESSION["Final"];
  ?>

  <!-- Site made with Mobirise Website Builder v4.11.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Site Maker Description">
  
  <title>Page 7</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="header12 cid-rHrHYQdt3x mbr-fullscreen mbr-parallax-background" id="header12-y">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>
  

    <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">THANKS FOR BOOKING!</h1>
                    <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-2">Your Booking is confirmed</p>
                   
                    <td><input type="text" size="20" value="<?php echo $disp?>"/></td>
                    <div class="mbr-section-btn align-center py-2"><a class="btn btn-md btn-white-outline display-4" href="https://localhost/multiplex/page2.html">New Booking</a></div>

                    <div class="icons-media-container mbr-white">
                        <div class="card col-12 col-md-6">
                            
                            <h5 class="mbr-fonts-style display-5"></h5>
                        </div>

                        <div class="card col-12 col-md-6">
                            
                            <h5 class="mbr-fonts-style display-5"></h5>
                        </div>

                        

                        
                    </div>
                </div>
            </div>
    </div>

    
</section>


  <section class="engine"><a href="https://mobirise.info/k">develop your own website</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>