<?php 
include('Connect.php');
session_start();
// ----------- SIGN UP -----------------
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $query1 = " SELECT * FROM `user` WHERE `email`='$email'";
    $res1 = mysqli_query($Connect,$query1);
    $data = mysqli_fetch_assoc($res1);
    if(strcmp($data['email'],$email)==0  )
     {
       echo("<script>alert('Email is Already Registred!')</script>");
       echo("<script>window.location = 'index.php'</script>");
     }
     else{
        $query="INSERT INTO `user`(`name`, `email`, `password`, `age`) VALUES ('$name','$email','$password','$age')";
        $res=mysqli_query($Connect,$query);
        $query1 = " SELECT * FROM `user` WHERE `email`='$email'";
        $res1 = mysqli_query($Connect,$query1);
        $data = mysqli_fetch_assoc($res1);
       
        $_SESSION['id']=$data['id'];
        $_SESSION['name']  =  $data['name'];
        $_SESSION['email']=$data['email'];
        $_SESSION['age']=$data['age'];
        $id=$_SESSION['id'];
        echo("<script>alert('You have succesfully registered !!')</script>");
        echo("<script>window.location = 'home.php?id=$id'</script>");

     }
}

// ------------ LOG IN ----------
if(isset($_POST['login'])){

  $loginemail=$_POST['loginemail'];
  $loginPassword=$_POST['loginPassword'];
  $query1 = " SELECT * FROM `user` WHERE `email` = '$loginemail' ";
  $res1 = mysqli_query($Connect,$query1);
  $data = mysqli_fetch_assoc($res1);
  if(strcmp($data['password'],$loginPassword)==0)
		{   
            $_SESSION['email']=$data['email'];
            $_SESSION['name']  =  $data['name'];
            $_SESSION['id']=$data['id'];
            $_SESSION['age']=$data['age'];
            $id=$_SESSION['id'];
            echo("<script>alert('You have succesfully logged In !!')</script>");
            echo("<script>window.location = 'home.php?id=$id'</script>");
		}
  else{
    echo("<script>alert('Wrong Email or Password!!')</script>");
    echo("<script>window.location = 'index.php?id=$id'</script>");
  }

}

?>
