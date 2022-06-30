<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="https://kit.fontawesome.com/35ee8846b0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="outer">
        <div class="flex-container">
            <div class="box1">

            </div>
            <div class="icon">
                <i class="fa-solid fa-user-lock" id="con"></i>
            </div>
            <div class="box2">
                <h1>Login</h1>
                    <form action="login_action.php"  method="POST" onsubmit="return validate()">
                        <error id="err"></error><br>
                        <input type="email" id="mail"  name="mail" placeholder="Email" required>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <input type="submit" value="Login" id="log">
                    </form>
        <a href="user_registration.php"><input type="button" id="create" value="Create New Account?"></a>
            <!-- <input type="button" id="frgt" onclick="pmt()" value="Forgotten Password"> -->
             <button class="trigger" id="frgt">forgot password</button>
            </div>

        </div>

    </div>

   <div class="modal">
       <div class="modal-content">
           <div class="reset_style">
               <h3>Reset Password</h3>
               <span class="close-button">&times;</span>
           </div>
           <hr>
           <form action="reset.php" id="rtform">
            <div id="inputbox">
                 <input type="email" name="email" id="email1" placeholder="Email please" onkeydown="emailcheck()">
            </div>
          <span id="txt"></span>
           <p id="security_text">Your security question:</p>
           <input type="text" name="answer"id="answer" placeholder="Enter your answer">
           <input type="password" name="answer"id="new_pass" placeholder="New Password">
           <input type="password" name="answer" id="confirm_pass"placeholder="Retype Password"><hr>
           <input type="submit" onsubmit="resetfn()" value="Submit">
           </form>
       </div>
   </div>
 <script type="text/javascript" src="script/login.js"></script>
 <script type="text/javascript" src="script/reset.js"></script>
 
<!--  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</body>

</html>
