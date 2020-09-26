function ValidateForm(){
    var of= document.getElementById("comment_name");
    var toward= document.getElementById("comment_content");

    removeMessage();
 
     var valid=true;
    if(of.value.length==0) {
        of.className="wrong-error";
        of.nextElementSibling.innerHTML="of cannot be less than 6";
        valid=false;
    }
    if(toward.value.length==0) {
        toward.className="wrong-error";
        toward.nextElementSibling.innerHTML="toward cannot be less than 6";
        valid=false;
    }
    return valid;
 }
 function removeMessage(){
    var errorinput=document.querySelectorAll(".wrong-error"); 
    [].forEach.call(errorinput, function(el){
        el.classList.remove("com_control"); 
    });
    
    var errorpara=document.querySelectorAll(".er"); 
    [].forEach.call(errorpara, function(el){
        el.innerHTML="";
     });
 }