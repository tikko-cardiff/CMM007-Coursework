<?php

session_start();

?>

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
      <a href="login-signup.php"><i class='bx bxs-user'></i></a>
  </div>
    <!--<div class="logout">
        <a href="logout.php"><i class='bx bx-log-out'></i></a>
    </div>-->

  <form action='create-see-tell.php' method='post' enctype="multipart/form-data">
  <p><label>Title</label><br />
   <input type='text' name='title' ></p>
   <p><label>Image</label><br />
          <input type="file" name="fileUpload" id="fileUpload">
            <p><label>Content</label><br />
        <textarea name='content' cols='60' rows='10'></textarea></p>
        <p><input type='submit' name='submit' value='Submit'></p>    
    </form>


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
  </section>
  </footer>

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


<?php
  include_once('dbconnection.php');

  $username= $_SESSION['id'];
    $createsql = "SELECT * FROM users WHERE username = '$username' ";
     $createresult=mysqli_query($db,$createsql);
       $user=mysqli_fetch_array($createresult);
       $id=$user['uid'];

         if (isset ($_POST['submit']))
        {
            $title=$_POST['title'];
            $content=$_POST['content']; 
            $target_dir= "Uploads/";
            $target_File = $target_dir . basename($_FILES["fileUpload"]["name"]);
           // $uploadOk = 1;
           //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            $createsql = "INSERT INTO stories (title, image, user, content) VALUES('$title', '$target_File', '$id', '$content')";
            $createresult=mysqli_query($db,$createsql);
             // Validate that it's an actual image
             
                if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_File)) 
                        {
                          echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
                          header("Location: see-tell.php");
                        } 
             else {
                          echo "Sorry, there was an error uploading your file.";
                        }      
         /*   if($createresult == TRUE)
             {
                     echo "post created";

                     header("Location: see-tell.php");
              }*/
        }
    ?>