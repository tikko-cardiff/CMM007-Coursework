<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>login-signup</title>
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
                    <h2>LOGIN</h2>
                    <form action="login-signup.php" method="post">
                        <input type="text" name="username" class="input-box" placeholder="username" required>
                        <input type="password" name="password" class="input-box" placeholder="Password" required>
                        <input type="checkbox"><span>Remember username</span>
                        <input type="submit" name= "submit" class="submit-btn" value= "Login">
                        <a href="">Forgot password?</a>
                    </form>
                    <button type="button" class="btn" onclick="openCreateAccount()">Create Account</button>
                 </div>

                    <div class="form-back">
                        <h2>CREATE ACCOUNT</h2>
                        <form action="login-signup.php" method="post">
                        <input type="text" name="username" class="input-box" placeholder="username" required>
                        <input type="text" name= "email" class="input-box" placeholder="Email address" required>
                        <input type="password" name="password"class="input-box" placeholder="Password" required>
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


<!--login/signup PHP-->
<?php
include_once("dbconnection.php");

if (isset ($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

	$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
		$result=mysqli_query($db,$sql);

		if(mysqli_num_rows($result) == 1)
		{
            
            $_SESSION['id'] = $username;
			header("location:home.php");
		}else
		{
			echo "Incorrect username or password.";
		}        
	}

 else if (isset($_POST['create']) ) 
{
    $username = $_POST['username'];
	$email= $_POST['email'];
	$password = $_POST['password'];
	
  $createsql = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
  $createresult=mysqli_query($db,$createsql);

	if($createresult == TRUE)
    {
    echo "registered successfully";
    header("Location:login-signup.php");
	}else
    {
    echo "error with registration ";
     }

}
?>
