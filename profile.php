<?php 
session_start();
if(!isset($_SERVER['HTTP_REFERER']))
{
	header('location:index.php');
	exit;
}
include('connection.php');
$emailid=$_SESSION['txtemail']; 
$selectQuery="SELECT `txtfname`, `txtlname`, `txtemail`, `txtimage` FROM `tbl_user` WHERE `txtemail`='$emailid'  ";
$result=mysqli_query($conn,$selectQuery);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile View</title>
	<script src="https://kit.fontawesome.com/5d88a96a11.js" crossorigin="anonymous"></script>
</head>
<style>
	body{
		background-color: background-color: rgb(240, 240, 240);
	}
	.profile{
		text-align: center;
      }
      h1{
      	font-size: 30px;
      	top: 20px;
      	color: rgba(226, 31, 109);
      }
      img{
         width: 300px; 
         height: 300px;
         margin: auto;
         padding: 20px;
         border: 2px solid black;
         border-width: 10px;
         border-radius: 8px;
         background-color: ghostwhite;
      }
      #icon{
      	font-size: 50px;

           }
      #iconmain{
                text-align: right;
           }
     @media screen and (max-width: 480px) and (min-width: 0px){
     	 #icon{
     	    font-size: 30px;
     	 }
       img{
         width: 200px; 
         height: 200px;
         border-width: 8px;
     }
      
</style>
<body>
	<div id="iconmain">
		<a href="login.php"><i class="fa-solid fa-right-from-bracket" id="icon"></i></a>
	</div>
	
	<div  class="profile">
	      
		<img src="<?php echo($row['txtimage']);?>">
		<h1><?php echo($row['txtfname']);?> </h1>
		<h1><?php echo($row['txtlname']);?> </h1>
		<h1><?php echo $emailid ;?></h1>
	</div>

</body>
</html>
