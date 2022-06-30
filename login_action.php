<?php
    session_start();
    include('connection.php');
    $emailid=$_POST['mail'];
    $pwd=$_POST['password'];
    $selectQuery="SELECT `txtemail`, `txtpassword` FROM `tbl_user` WHERE `txtemail`='$emailid' and `txtpassword`='$pwd'";
    
    // echo $selectQuery;
    $result=mysqli_query($conn,$selectQuery);
    $row = mysqli_fetch_array($result);
    
   if(($row['txtemail']==$emailid) AND ($row['txtpassword']==$pwd))
    {
      $_SESSION['txtemail']=$emailid;
      header('location:profile.php');
    }
    else
    {
        echo "<script>
        alert('Invalid');
        window.location='index.php';</script>";
       echo "Invalid Login";
     }
?>









