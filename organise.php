<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/task.css">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous">

	<script src=
"https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity=
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity=
"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity=
"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous">
	</script>

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
                        <li><a href="music.php">Music</a></li>
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
	<div class="container my-3">
		<h1>Take your Notes here</h1>
		<div class="card1">
			<div class="card-body">
				<h5 class="card-title">
					Add a Note
				
				</h5>
				<form method="post">
				<div class="form-group">
					<textarea class="form-control"
						id="addTxt" rows="3" name="txtnote">
					</textarea>
				</div>
				<button type="submit" name="note" class="btn btn-primary"
					id="addBtn" style=
					"background-color:green">
					Add Note
				</button>
				</form>
					<?php
					include('Connect.php');
					include('login_back.php');
						if(isset($_POST['note'])){
							$userid=$_SESSION['id'];
							$noteid=uniqid();
							$txtnote=$_POST['txtnote'];
							$query1 = " SELECT * FROM `notes` WHERE `userid` = '$userid' ";
							$res1 = mysqli_query($Connect,$query1);
							$data = mysqli_fetch_assoc($res1);
							$res = mysqli_query($Connect,"INSERT INTO `notes`(`userid`, `noteid`, `note`) VALUES ('$userid','$noteid','$txtnote')");
						}





					?>
			</div>
		</div>
		<hr>
		<h1>Your Notes</h1>
		<hr>
		<div class="main-container">
  <div class="card-container">
  <?php
		$userid=$_SESSION['id'];
        $result = mysqli_query($Connect,"SELECT * FROM `notes` WHERE `userid`='$userid'");
					$i=1;
          $x=1;
					while($row = mysqli_fetch_array($result)) {
				?>
    <?php echo'<div class="card card-'.$x.'">';?>
      <h2 class="card__title"><?php echo $row['note']?></h2>
    </div>
    <?php 
    $x++;
    if($x>5){
      $x=1;
    }
     $i++;
				}
				?>
	</div>

	<script src="notes.js"></script>
</body>

</html>
 