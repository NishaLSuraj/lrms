<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style/user_registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="img1">
			<img src="images/register.png">
			
		</div>
		<div class="regform">
			<div class="mainhead"> REGISTER</div>
			<form action="user_registration_action.php" method="POST" onsubmit="return validate()">

				<div class="inp1">
					<input type="text" id="fname" name="fname" placeholder="FirstName" required>
				</div>

				<div class="inp2">
				   <input type="text" id="lname" name="lname"  placeholder="LastName" required>
			    </div>

				<div class="inp3">
				    <input type="email" id="email" name="email" placeholder="Email" required>
			    </div>

				<div class="inp4">

  					<input id="inputTag" name="inputTag" type="file" accept="images/png,images/jpg,images/jpeg" required >
  					
			    </div> 

				<div class="inp5">
				    <input type="password" id="password" name="password"placeholder="Password" required>
			    </div>

				<div class="inp6">
				 	<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
			    </div>
                <div class="inp7">
					<select id="question" name="question"  onchange="check()">
						<option value disabled selected id="q" name="q">Choose One security Question</option>
						<option value="Your nick name" id="q" name="q">Your nick name</option>
						<option value="Your pet name" id="q" name="q">Your pet name</option>
						<option value="Your Favourite 4 digit number" id="q" name="q">Your Favourite 4 digit number</option>
			    	</select>
			   </div>

			    <div class="inp8">
				 	<input type="text" id="answer" name="answer" placeholder="Your Answer" required >
				</div>

				<div class="inp9">
					<input type="submit" id="submit" name="submit"  value="Submit" >
			    </div>
			</form>
               <div  class="inp10">
               	<a href="login.php">Already have an account?</a>
			   </div>
				
	    </div>
	</div>
<script type="text/javascript" src="script/user_registration.js">
	
</script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</body>
</html>
