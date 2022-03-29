<?php session_start() ?>
<!DOCTYPE html>
<html lan="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link rel="stylesheet" href="./CSS/story.css">
    <link rel="stylesheet" href="./CSS/style.css">

    <link rel="stylesheet" href="./css/boxicons.min.css">
    <title>See & Tell</title>
  </head>

  <body style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7), url(images/loginbackground.jpeg)">
    <header>
      <div class="logo">
          <h1 class=logo-text ><a href="index.html">Geotag<span>.</span></a>
        </div>

        <i class='bx bx-menu toggle' ></i>

      <ul class="nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">See & Tell</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">About Us</a></li>
        <!--<li><a href="#">Log In</a></li>
        <li><a href="#">Create Account</a></li>-->

        <li>
          <a href="#">
              <i class='bx bxs-user' ></i>
              User
            </a>
          <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="#" class="logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
            <div class="slide">
            <h1 class="slide-title">Tell Your Story</h1>
        </div>

            <div class="row">
                <div class="leftcolumn">
                <?php
  include_once('dbconnection.php');
          
         /* if (isset ($_POST['submit']))
          {
            $entryid=$_POST['entryid'];
            $user=$_POST['user'];
            $title=$_POST['title'];
            $image=$_POST['image'];
            $content=$_POST['content'];
            $datetime=$_POST['datetime'];    }*/

            $sql="SELECT * FROM viewstory";      
        		$result=mysqli_query($db,$sql);
            $stories= mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($stories as $story) { ?>
                  <div class="story">
                    <h2><a href="view.php?id=<?php echo $story ['entryid']; ?>"> <?php echo $story ['title']; ?></a></h2>
                    <img src="<?php echo $story ['image'];  ?>" alt="Union street" class="img">
                      <i class='bx bxs-user-circle'><?php echo $story ['username']; ?></i>
                      <i class='bx bxs-user-circle'><?php echo  date ("m-d-y", strtotime ($story ['datetime'])); ?></i>
                    <p><?php echo $story ['content']; ?></p>
                  </div>
<?php  } ?>
                 <!-- <div class="story">
                    <h2><a href="">A day at Banff Castle</a></h2>
                    <div>
                      <img src="/images/castle.jpeg" alt="Banff castle" class="img">
                      <i class='bx bxs-user-circle'>Oluwaseyi Balogun</i>
                      <i class='bx bxs-user-circle'>26th March 2022</i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam aspernatur molestiae illo inventore quaerat ipsum voluptas architecto. Repellat quibusdam explicabo odit maiores sit modi commodi illo dolore? Voluptatibus, eos itaque.</p>
                  </div>

                  <div class="story">
                    <h2><a href="">Hiking to mount Banagask</a></h2>
                    <img src="/images/rgu.jpeg" alt="RGU" class="img">
                      <i class='bx bxs-user-circle'>Adeseye Fayiga</i>
                      <i class='bx bxs-user-circle'>26th March 2022</i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum id, nesciunt ex nisi adipisci aliquam dicta animi explicabo optio veritatis? Veritatis pariatur at, distinctio consectetur deserunt mollitia corporis accusantium beatae?</p>
                  </div>
                
                </div>-->


                <div class="rightcolumn">
                  <div class="story">
                    <h2>About Us</h2>
                    <div class="img" style="height:100px;">Image</div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                  </div>

                  <div class="story">
                    <h3>Map</h3>
                  </div>
                  
                  <div class="story">
                    <h3>Share your stories</h3>
                    <p>Some text..</p>
                  </div>
                </div>


                
              </div>



<!--https://cdnjs.com/libraries/jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <!--Carousel for wrap   https://kenwheeler.github.io/slick/-->
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <script src="js/script.js"></script>


  </body>
</html>