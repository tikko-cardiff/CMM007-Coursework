<!DOCTYPE html>
<html lang="en">

    <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Admin login-signup</title>
            <link rel="stylesheet" href="CSS/style.css">
            <link rel="stylesheet" href="CSS/login-signup.css">
            <link rel="stylesheet" href="CSS/boxicons.min.css">

              <!--to close open tab on mobileview-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    </head>

    <body>
        <div class="container" style= "background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
    url(./images/background.jpeg)" >
            <div class="form">
                <div class="input-group" id="form">

                    <div class="form-front">
                    <h2>ADMIN LOGIN</h2>
                    <form action="admin-login-signup.php" method="post">
                        <input type="text" name="username" class="input-box" placeholder="Admin-username" required>
                        <input type="password" name="password" class="input-box" placeholder="Password" required>
                        <input type="checkbox"><span>Remember username</span>
                        <input type="submit" name= "submit" class="submit-btn" value= "Login">
                        <a href="">Forgot password?</a>
                    </form>
                    <button type="button" class="btn" onclick="openCreateAccount()">Create Account</button>
                 </div>

                    <div class="form-back">
                        <h2>CREATE ADMIN ACCOUNT</h2>
                        <form action="admin-login-signup.php" method="post">
                        <input type="text" name="name" class="input-box" placeholder="Name" required>
                        <input type="text" name= "username" class="input-box" placeholder="Admin-username" required>
                        <input type="password" name="password"class="input-box" placeholder="Password" required>
                        <input type="text" name= "role" class="input-box" placeholder="User-role" required>
                        <input type="checkbox"><span>Remember username</span>
                        <input type="submit" name= "create"class="submit-btn" value= "Create Account"> 
                        <a href="">Forgot password?</a>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var form = document.getElementById("form");

            function openCreateAccount() {
                form.style.transform = "rotateY(-180deg)";
            }
            function openLogin() {
                form.style.transform = "rotateY(0deg)";
            }
        </script>


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

    </body>
</html>


<?php
//admin signup & login PHP
include_once("dbconnection.php");

if (isset ($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

	    $sql="SELECT id FROM admins WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$sql);

		if(mysqli_num_rows($result) == 1) { 
         session_start();
        $_SESSION['id'] = $username;
        echo "<script> window.open('dashboard.php', '_self')</script>" ;
		}
        else {
			echo "Incorrect username or password.";
		}       
        exit (); 
	}
 else if (isset($_POST['create']) )
{
    $name = $_POST['name'];
	$username= $_POST['username'];
	$password = $_POST['password'];
    $role = $_POST['role'];
	
  $createsql = "INSERT INTO admins (name, username, password, role) VALUES('$name', $username', '$password', '$role')";
  $createresult=mysqli_query($db,$createsql);

	if($createresult == TRUE)
    {
    echo "registered successfully";
    header("Location: admin-login-signup.php");
	}else
    {
    echo "error with registration ";
     }
}
?>
