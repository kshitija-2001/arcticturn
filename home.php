<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
</head>

<body>
    
<div class="wrapper">
            <nav> <input type="checkbox" id="show-search"> <input type="checkbox" id="show-menu"> <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    
                    <div class="logo"><a href="home.php"><img src="images/logo/logo.png"></a></div>
                    <ul class="links">
                    <?php 
                    
                    echo'
                       <li><a href="home.php">Home</a></li>
                        <li><a href="travel.php">Travel</a></li>
                        <li> <a class="desktop-link">Relax</a> <input type="checkbox" id="show-services"> <label for="show-services">Services</label>
                            <ul>
                                <li><a href="task.php"><i class="fa fa-fw fa-helicopter"></i>Relaxing Task</a></li>
                                <li><a href="music.php"><i class="fa fa-fw fa-couch"></i>Relaxing Music</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href="organise.php">Organise</a></li>
                        <li> <a class="desktop-link">Blogs</a> <input type="checkbox" id="show-services"> <label for="show-services">Services</label>
                            <ul>
                                <li><a href="travelblog.php"><i class="fa fa-fw fa-helicopter"></i>Travel Blogs</a></li>
                                <li><a href="relaxblog.php"><i class="fa fa-fw fa-couch"></i>Relax Blogs</a></li>
                                </li>
                            </ul>
                        </li>

                    </ul>';?>
                </div> <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form action="" class="search-box"> <input type="text" placeholder="Type Something to Search..." required> <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button> </form>
                <a href="logout.php" type="button" class="btn btn-warning"><h5>Logout</h5></a>

            </nav>
            </div>
        </div>

        
  <!--  Image start  -->
  <!-- <div class="image-wrapper">
    <img src="https://miro.medium.com/max/2000/1*GeQ37M-CWYSIt-8upZ9jvw.jpeg" alt="" />
  </div> -->
  <!--  Image end  -->
<div class="card">
  <div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">Welcome to Articturn</p>
  <hr class="my-4">
  <p>Explore with us!</p>
  <p>Be free like the Artic Tern</p>
  <p class="lead">
    <a class="btn btn-secondary btn-lg" href="travel.php" role="button">Let's Start!</a>
  </p>
</div>
</div>

        </body>

</html>