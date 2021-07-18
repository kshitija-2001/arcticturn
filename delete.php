<?php 
include('Connect.php');
$noteid=$_GET['noteid'];

$result = mysqli_query($Connect,"DELETE FROM `notes` WHERE `noteid`='$noteid'");
echo("<script>window.location = 'organise.php'</script>");

?>