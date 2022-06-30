function emailcheck()
{
    let email=document.getElementById('email1').value;
    let form=document.getElementById('rtform').value;
    let text=document.getElementById('txt').value;
    let pattern=/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
    if(email.match(pattern))
    {
        form.classList.add(valid);
        form.classList.remove(invalid);
        text.innerHTML="Your email address is valid";
        text.style.color="#00ff00";
    }
    else{
        form.classList.remove(valid);
        form.classList.add(invalid);
        text.innerHTML="Please enter valid email address";
        text.style.color="ff0000";
    }
    if(email=="")
    {
        form.classList.remove(valid);
        form.classList.remove(invalid);
        text.innerHTML="";
        text.style.color="#00ff00";
    }
    
}