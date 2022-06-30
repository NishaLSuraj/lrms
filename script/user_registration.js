function validate()
 {

    // let fname,lname,email,image,password,confirmpwd,qstn,ans;
    let fname=document.getElementById('fname').value;
    let lname=document.getElementById('lname').value;
    let email=document.getElementById('email').value;
    let image=document.getElementById('inputTag').value;
    let password=document.getElementById('password').value;
    let confirmpwd=document.getElementById('confirmpassword').value;
    let qstn=document.getElementById('question').value;
    let ans=document.getElementById('answer').value;


    // Regular expressions
    let namepattern=/^[a-zA-Z]$/;
    let mail=/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
    let pass=/^[a-z A-Z 0-9 !@#$%^&*]{6,8}$/;

    if(!isNaN(fname) && !namepattern.test(fname)){
        document.getElementById('fname').style.borderColor="red";
        return false;
    }
    else if(!isNaN(lname) && !namepattern.test(lname)){
        document.getElementById('lname').style.borderColor="red";
        return false;
    }
    else if(!mail.test(email)){
        document.getElementById('email').style.borderColor="red";
        // alert("error");
        return false;
    }
    else if(!pass.test(password)){
        document.getElementById('password').style.borderColor="red";
        return false;
    }
    
    else if(password!=confirmpwd){
        document.getElementById('password').style.borderColor="red";
        //swal("incorrect password!!!","Re enter ur password","error");
        sweetAlert("Oops...","Something went wrong","error");
        return false;
    }
    else
    {
        // swal("Congratulations You clicked the button!");
        // swal("Congratulations!", "You clicked the button!", "success");
        return true;
    }
}
document.getElementById('answer').disabled=false;
function check() {
    
  if(document.getElementById('q').checked==true)
  {
    document.getElementById('answer').disabled=true;
  }
}