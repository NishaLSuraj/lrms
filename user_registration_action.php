<?php
include('connection.php');
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $image=$_POST['inputTag'];
  $password=md5($_POST['password']);
  $question=$_POST['question'];
  $answer=$_POST['answer'];


         
  

  $sql="INSERT INTO `tbl_user`(`txtfname`, `txtlname`, `txtemail`, `txtimage`, `txtpassword`, `txtquestion`, `txtanswer`) VALUES ('$fname','$lname','$email','images/$image','$question','$answer')";
$rs=mysqli_query($conn,$sql);

  if($rs)
  {}

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
</head>
<body onload="swalcheck()">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
  <script>
    function swalcheck() {
      swal("Congratulations!!!","Successfully created your profile","success")
      .then(function(){
        window.location="login.php";
      });
    }
  </script>

</body>
</html>





