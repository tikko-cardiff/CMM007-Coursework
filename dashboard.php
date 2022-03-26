<!--<?php

session_start();

include_once('dbconnection.php');

if (!isset($_SESSION['ID'])) {
  header("location:admin-login-signup.php");
  exit();
}
?>-->

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--to close/open tab on mobileview-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  </head>


  <body>
    <!--NAV BAR--->
  <section class ="header" style= "background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
    url(./images/background.jpeg)" >

    <div class="user">
      <a href="admin-login-signup.php"><i class='bx bxs-user'></i></a>
  </div>
    <!--<div class="logout">
        <a href="logout.php"><i class='bx bx-log-out'></i></a>
    </div>-->
</section>

  <div class="container-fluid">
    <div class="row">
      <nav class="sidebar" style ="height: 569px">
      <div class="sidebar-sticky">    
        <ul class="column" style="color: #5b5757; display: flex;">

        </div>

      </nav>
    </div>
  </div>
    
      








    <footer class="page-footer bg-dark " id="footer">
      
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="about">
          <h4>About Us</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Explicabo, eos. Voluptatibus molestias nam quasi similique <br>odio! Fugit quaerat itaque quam. Dignissimos recusandae <br>velit a qui doloremque ullam ex praesentium ducimus.</p>
    
           <div class="social-links">
          <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
          <a href="#"><i class='bx bxl-twitter' ></i></a>
          <a href="#"><i class='bx bxl-twitter' ></i></a>
          <a href="#"><i class='bx bxl-youtube' ></i></a>
          <a href="#"><i class='bx bxl-linkedin-square' ></i></a>
        </div>
      </div>

      <div class="copyright">
      <p>Copyright <br>Geotag<i class='bx bx-copyright'></i>All rights reserved</p>
      </div>
    </section>
          </div>
      </div>
    </div>
    <!--Javascript for toggling -->
    <script>
      var navlinks = document.getElementById("navlinks");
      function showMenu(){
        navlinks.style.right ="0";
      }
      function hideMenu(){
        navlinks.style.right ="-200px";
      }
    </script>
  </body>
</html>
