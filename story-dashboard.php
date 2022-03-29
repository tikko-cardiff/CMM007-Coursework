<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Story dashboard dashboard</title>
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
    <div class="logout">
        <a href="logout.php"><i class='bx bx-log-out'></i></a>
    </div>

    <nav>
        <a class="nav-brand" href="index.html">Geotag<span>.</span></a>
        <div class="nav-links" id="navlinks">
          <i class='bx bx-slider' onclick="hideMenu()"></i>
          <ul>
            <li><a href="dashboard.php">Users</a></li>
            <li><a href="story-dashboard.php">User Stories</a></li>
          </ul>
          </div>
        <i class='bx bx-menu' onclick="showMenu()" ></i>
      </nav>

</section>
<main>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Entry Id</th>
          <th>User</th>e
          <th>Title</th>
          <th>Image</th>
          <th>Content</th>
          <th>Date/Time</th>
          <th>Delete</th>
       </tr>
</thead>

<tbody>
  <?php
  include_once('dbconnection.php');
      $query = 'SELECT * FROM stories';
      $result = mysqli_query($db,$query);

      while ($stories = mysqli_fetch_array($result)) { 
          ?>


        <tr>
<td><?php echo $stories['entryid']?></td>
<td><?php echo $stories['user']?></td>
<td><?php echo $stories['title']?></td>
<td><?php echo $stories['image']?></td>
<td><?php echo $stories['content']?></td>
<td><?php echo $stories['datetime']?></td>
<td>
    <a href="delete.php?sid=<?php echo $stories ['entryid'];?>"><i class='bx bxs-folder-minus'></i></a>
      </td>
        </tr>
    <?php  } 
       /*

session_start();

include_once('dbconnection.php');

if (!isset($_SESSION['ID'])) {
  header("location:admin-login-signup.php");
  exit();
}
*/
    ?>
</tbody>
</table>
  </div>
  </main>







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
