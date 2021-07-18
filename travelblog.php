<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/travel.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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
    <div class="cardCase">
    <h1>Travel Blogs</h1>
        <div class="row row-cols- row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lets's get prepared for a Trek</h5>
                        <p class="card-text">Pack all the essential things you need for a trek.</p>
                        <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://www.euttaranchal.com/tourism/trekking-things-to-carry.php','popup','width=900,height=600'); return false;">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.fabhotels.com/blog/wp-content/uploads/2016/07/25-beautiful-places-you-must-visit-before-25-1280x720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">25  Beautiful Places You Must Visit before you turn 25</h5>
                        <p class="card-text">Travel! Travel!</p>
                        <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://www.fabhotels.com/blog/25-beautiful-places-you-must-visit-before-25/','popup','width=900,height=600'); return false;">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://storage.googleapis.com/mcp_236blog/uploads/2016/06/budget-travel_web.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Travel more with less budget!</h5>
                        <p class="card-text">How To Create A Realistic Travel Budget That Actually Works</p>
                        <a href="#" target="popup" type="button" class="btn btn-primary" onclick="window.open('https://budgetbakers.com/blog/create-realistic-travel-budget','popup','width=900,height=600'); return false;">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>