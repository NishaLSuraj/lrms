<?php  
session_start();
    include('connection.php');
    $emailid=$_POST['mail'];
    $selectQuery="SELECT `txtquestion`,`txtanswer` FROM `tbl_user` WHERE `txtemail`='$emailid';
    $result=mysqli_query($conn,$selectQuery);
    $row = mysqli_fetch_array($result);
    

    $ans=$_POST['answer'];
    if(($row['txtanswer']==$ans))
    {
		$pass=$_POST['new_pass'];
        $confirmpass=$_POST['confirm_pass'];

		if($pass==$confirmpass)
		{
			$updateQuery="UPDATE `tbl_user` SET `txtpassword`='$pass'  WHERE `txtemail`='$emailid'"; 
        }
    }
?>
