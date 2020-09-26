function ValidateForm(){
    var toward=document.getElementById("toward");
    removeMessage();
    var valid=true;
    if(toward.value.length==0){
     toward.className="wrong-input";
     toward.nextElementSibling.innerHTML="toward can't be blank";
     valid=false;
    }
    return valid;
 }
 function removeMessage(){
    var errorinput=document.querySelectorAll(".wrong-input"); 
    [].forEach.call(errorinput, function(el){
        el.classList.remove("wrong-input"); 
    });
    
    var errorpara=document.querySelectorAll(".er"); 
    [].forEach.call(errorpara, function(el){
        el.innerHTML="";
     });
 }