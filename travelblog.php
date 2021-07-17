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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Stars Components
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Forms
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Quotes
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
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