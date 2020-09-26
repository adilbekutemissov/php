function Validate(){
    var login= document.getElementById("log");
    var password= document.getElementById("password");
    removeMessage();
 
    var valid=true;
    if(login.value.length==0){
     login.className="wrong-input";
     login.nextElementSibling.innerHTML="login can't be blank";
     valid=false;
    }
    if(password.value.length<6){
     password.className="wrong-input";
     password.nextElementSibling.innerHTML="Password cannot be less than 6";
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