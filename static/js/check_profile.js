$(document).ready(function () {
    $("#update").click(function () {
        var fname=$('#proftxtFName');
        var lname= $('#proftxtLName');
        var phone=$('#profphoneNum');
        var email=$('#profemail');
        if(fname.val()==""){
          document.getElementById("validationFNameProfFail").innerHTML= "Please enter firt name";
          document.getElementById("validationFNameProfFail").style.color="red";
          document.getElementById("proftxtFName").style.border="1px solid red";
            return false;
        } else if (lname.val()=="") {
          document.getElementById("validationLNameProfFail").innerHTML= "Please enter last name";
          document.getElementById("validationLNameProfFail").style.color="red";
          document.getElementById("proftxtLName").style.border="1px solid red";
            return false;
        }else if(phone.val()==""){
          document.getElementById("validationProfTelFail").innerHTML= "Please enter phone";
          document.getElementById("validationProfTelFail").style.color="red";
          document.getElementById("profphoneNum").style.border="1px solid red";
            return false;
        }else if(email.val()==""){
          document.getElementById("validationProfEmailFail").innerHTML= "Please enter email";
          document.getElementById("validationProfEmailFail").style.color="red";
          document.getElementById("profemail").style.border="1px solid red";
            return false;
        }
    });
});
