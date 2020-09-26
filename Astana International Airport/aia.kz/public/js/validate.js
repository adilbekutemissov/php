function ValidateForm(){
   var firstname= document.getElementById("firstname");
   var lastname= document.getElementById("lastname");
   var login= document.getElementById("login");
   var email = document.getElementById("email");
   var password= document.getElementById("password1");
   var confirm_password= document.getElementById("password2");
   removeMessage();

    var valid=true;
    if(firstname.value.length==0){
        firstname.className="wrong-input";
        firstname.nextElementSibling.innerHTML="firstname can't be blank";
        valid=false;
    }
   if(lastname.value.length==0){
    lastname.className="wrong-input";
    lastname.nextElementSibling.innerHTML="lastname can't be blank";
    valid=false;
   }
   if(login.value.length==0){
    login.className="wrong-input";
    login.nextElementSibling.innerHTML="login can't be blank";
    valid=false;
   }
   if(email.value.length==0){
    email.className="wrong-input";
    email.nextElementSibling.innerHTML="email can't be blank";
    valid=false;
   } 
   else {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(!email.value.match(mailformat)) {
                email.className="wrong-input";
            email.nextElementSibling.innerHTML="Email must be to correct format!";
            valid=false;
        }
   }
   if(password.value.length<6){
    password.className="wrong-input";
    password.nextElementSibling.innerHTML="Password cannot be less than 6";
    valid=false;
   }
   if(confirm_password.value.length<6) {
    confirm_password.className="wrong-input";
    confirm_password.nextElementSibling.innerHTML="Confirm password cannot be less than 6";
    valid=false;
   }
   if(password.value.length>=6 && confirm_password.value.length>=6 && password.value!=confirm_password.value){
    confirm_password.className="wrong-input";
    confirm_password.nextElementSibling.innerHTML="Password does not match";
    valid=false;
   }
   return valid;
}
function removeMessage(){
   var errorinput=document.querySelectorAll(".wrong-input"); 
   [].forEach.call(errorinput, function(el){
       el.classList.remove("input"); 
   });
   
   var errorpara=document.querySelectorAll(".er"); 
   [].forEach.call(errorpara, function(el){
       el.innerHTML="";
    });
}