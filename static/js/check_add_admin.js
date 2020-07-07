$(document).ready(function () {
    $("#addadmin").click(function () {
        var fname=$('#FName');
        var lname= $('#LName');
        var phone=$('#num');
        var email=$('#emails');
        var psw1=$('#psw3');
        var psw2=$('#psw4');
        if(fname.val()==""){
            alert("Please enter the first name!");
            return false;
        } else if (lname.val()=="") {
            alert("Please enter last name!");
            return false;
        }else if(phone.val()==""){
            alert("Please enter phone number!");   
            return false;
        }else if(email.val()==""){
            alert("Please enter email!");   
            return false;
        }else if(psw1.val()==""){
            alert("Please enter password!");   
            return false;
        }else if(psw2.val()==""){
            alert("Please enter confirm password!");   
            return false;
        }else if (psw1.val()==psw2.val()){

        }else{
            alert("The two password doesn't match!"); 
            return false;
        }
    });
});