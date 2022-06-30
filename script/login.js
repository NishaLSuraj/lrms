function validate()
{
    let email= document.getElementById("mail").value;
    let password= document.getElementById("password").value;
    let mail=/^\w+([/.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let pass=/^[a-zA-Z0-9!@#$%^&*]{6,8}$/;


    if(mail.match(email)){
        document.getElementById('mail').style.borderColor="red";
        return false;
    }
    else if(pass.match(password)){
        document.getElementById('password').style.borderColor="red";
        return false;
    }
    else
    {
        return true;
    }
}
const modal = document.querySelector(".modal");
const trigger = document.querySelector(".trigger");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
   modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
   if (event.target === modal) {
       toggleModal();
   }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
