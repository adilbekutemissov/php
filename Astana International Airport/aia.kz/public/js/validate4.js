function ValidateForm(){
    var firstname= document.getElementById("firstname");
    var lastname= document.getElementById("lastname");
    var departure_date= document.getElementById("departure_date");
    var arrival_date = document.getElementById("arrival_date");
    var arrival_time = document.getElementById("arrival_time");
    var departure_time= document.getElementById("departure_time");
    var flight= document.getElementById("flight");
    var of= document.getElementById("of");
    var toward= document.getElementById("toward");

    removeMessage();
 
     var valid=true;
     if(firstname.value.length==0){
         firstname.className="wrong-error";
         firstname.nextElementSibling.innerHTML="firstname can't be blank";
         valid=false;
     }
    if(lastname.value.length==0){
     lastname.className="wrong-error";
     lastname.nextElementSibling.innerHTML="lastname can't be blank";
     valid=false;
    }
    if(departure_date.value.length==0){
     departure_date.className="wrong-error";
     departure_date.nextElementSibling.innerHTML="departure_date can't be blank";
     valid=false;
    }
    if(arrival_date.value.length==0) {
        arrival_date.className="wrong-error";
        arrival_date.nextElementSibling.innerHTML="Arrival Date cannot be less than 6";
        valid=false;
       }
    if(departure_time.value.length==0){
     departure_time.className="wrong-error";
     departure_time.nextElementSibling.innerHTML="departure_time cannot be less than 6";
     valid=false;
    }
    if(arrival_time.value.length==0) {
     arrival_time.className="wrong-error";
     arrival_time.nextElementSibling.innerHTML="Arrival time cannot be less than 6";
     valid=false;
    }
    if(flight.value.length==0) {
        flight.className="wrong-error";
        flight.nextElementSibling.innerHTML="flight cannot be less than 6";
        valid=false;
    }
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
        el.classList.remove("form-control"); 
    });
    
    var errorpara=document.querySelectorAll(".er"); 
    [].forEach.call(errorpara, function(el){
        el.innerHTML="";
     });
 }