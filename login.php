<?php 
include('google.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login-page</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="css/login.css">

</head>
<body>
<div class="container">
   <section id="formHolder">

      <div class="row">

         <div class="col-sm-6 brand">
            <a href="#" class="logo"> <img src="images/logo/logo.png" alt="logo"width="75px" height="75px"></a>

            <div class="heading">
               <h2>Arctic turn</h2>
               <p>Let's Explore with us!</p>
            </div>

            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>


         <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
            
               <form class="login-form" action="login_back.php" method="post">
              
                  <div class="form-group">
                     <label for="loginemail">Email Adderss</label>
                     <input type="email" name="loginemail" id="loginemail" required>
                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>
                  
                  <div class="CTA">
                     <input type="submit" value="Login" name="login">
                     <a href="#" class="switch">I'm New</a>
                  </div>
                  
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            
                  <div class="signup form-peice"> 
                    
               <form class="signup-form" action="login_back.php" method="post">
         
                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="username" id="name" class="name">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Adderss</label>
                     <input type="email" name="email" id="email" class="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass">
                     <span class="error"></span>
                  </div>
                  
                  <div class="form-group" >
                  <label for="age">Age:
                  <select name="age" id="age">
                  <option value="0to16">0-17</option>
                  <option value="17to30">17-30</option>
                  <option value="30to45">30-45</option>
                  <option value="abobe45">Above 45</option>
                  </select>
                  </label>
                  </div>
                  <br>
                  <br>
                  <?php echo '<div align="center">'.$login_button . '</div>'; ?>
                  <div class="form-group">
                  <div class="CTA">
                     <input type="submit" value="Signup Now" id="submit" name="signup">
                     <a href="#" class="switch">I have an account</a> 
                  
                  </div>
                
               
            
               </form>
              
               
                  
              
            </div><!-- End Signup Form -->
            
         </div>
      </div>
    
   </section>

</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="js/login.js"></script>

</body>
</html>
