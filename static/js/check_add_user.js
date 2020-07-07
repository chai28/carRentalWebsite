$(document).ready(function () {
    $("#adduser").click(function () {
        var fname=$('#txtFName');
        var lname= $('#txtLName');
        var phone=$('#numTel');
        var email=$('#email');
        var psw1=$('#psw1');
        var psw2=$('#psw2');
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