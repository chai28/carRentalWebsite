$(document).ready(function(){
  //--- Navogation bar highlight jQuery ---//
  $(".navSet").hover(function(){
    $(this).css("border", "1px solid black");
    $(this).css("border-radius", "8px");
    $(this).css("color", "black");
  }, function(){
    $(this).css("border", "none");
  });

  $(".navSet").click(function(){
    $(this).css("background", "inherit");
    $(this).css("border", "none");
  });

  $(".text-design").hover(function(){
    $(this).css("text-shadow", "1px 2px snow");
  }, function(){
    $(this).css("text-shadow", "none");
  });

  $(".navSlide1").click(function(){
    $(".menu1").slideToggle("slow");
  });
  $(".navSlide2").click(function(){
    $(".menu2").slideToggle("slow");
  });
  //--- End for Navigation bar jQuery ---//

  // --- Start Field validation based on blur --- //
  $("#txtFName").blur(function(){
    validationHighlight("txtFName","validationFNameFail","Please enter your first name")
  });

  $("#txtLName").blur(function(){
    validationHighlight("txtLName","validationLNameFail","Please enter your last name")
  });

  $("#proftxtFName").blur(function(){
    validationHighlight("proftxtFName","validationFNameProfFail","Please enter your first name")
  });

  $("#proftxtLName").blur(function(){
    validationHighlight("proftxtLName","validationLNameProfFail","Please enter your last name")
  });

  $("#AdminUpdtxtFName").blur(function(){
    validationHighlight("AdminUpdtxtFName","validationAdminUpdFNameFail","Please enter your first name")
  });

  $("#AdminUpdtxtLName").blur(function(){
    validationHighlight("AdminUpdtxtLName","validationAdminUpdLNameFail","Please enter your last name")
  });

  $("#feedbackmessage").blur(function(){
    validationHighlight("feedbackmessage","validationfeedbackmsgFail","Please fill in the message box for your feedback before sending.")
  });

  $("#regEmail").blur(emailRegValidation);

  $("#loginEmail").blur(emailLogValidation);

  $("#profemail").blur(emailProfValidation);

  $("#AdminUpdemail").blur(emailAdmnValidation);

  $("#numTel").blur(function(){
    numValidation("numTel","validationTelFail","Please enter contact number")
  });

  $("#profphoneNum").blur(function(){
    numValidation("profphoneNum","validationProfTelFail","Please enter contact number")
  });

  $("#AdminUpdphoneNum").blur(function(){
    numValidation("AdminUpdphoneNum","validationAdminUpdTelFail","Please enter contact number")
  });

  $("#previouspsw").blur(function(){
    validationHighlight("previouspsw","validationNewPassFail","Password atleast 8 characters")
  });

  $("#newpsw1").blur(function(){
    validationHighlight("newpsw1","validationNewPass1Fail","Password atleast 8 characters")
  });

  $("#newpsw2").blur(function(){
    validationHighlight("newpsw2","validationNewPass2Fail","Password atleast 8 characters")
  });

  $("#psw2").blur(function(){
    pswCompare("psw1","psw2", "validationPass2Fail", "password does not match!")
  });

  $("#newpsw2").blur(function(){
    pswCompare("newpsw1","newpsw2", "validationNewPass2Fail", "password does not match!")
  });

  // --- End of Field validation based  on blur--- //
});

// --- Validity Check ---//
function validationHighlight(field,errorField,message){
  var textA = document.getElementById(field).value;

  if(textA === ""){
    document.getElementById(errorField.toString()).innerHTML= message;
    document.getElementById(field.toString()).style.border="1px solid red";
    document.getElementById(errorField.toString()).style.color="red";
    return false;
  }
  else{
    document.getElementById(errorField).innerHTML= "";
    document.getElementById(field).style.border="1px solid #ccc";
    return true;
  }
};

function numValidation(field,errorField,message){
  var coNum = document.getElementById(field).value;

  if((coNum === "")||(isNaN(coNum))){
    document.getElementById(errorField).innerHTML= message;
    document.getElementById(errorField).style.color="red";
    document.getElementById(field).style.border="1px solid red";
    return false;
  }
  else{
    document.getElementById(errorField).innerHTML= "";
    document.getElementById(field).style.border="1px solid #ccc";
    return true;
  }
};

function emailLogValidation(){
  var email = document.getElementById("loginEmail").value;

  if(email === ""){
    document.getElementById("validationLoginEmailFail").innerHTML= "Please enter email";
    document.getElementById("loginEmail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf("@", 0) < 0){
    document.getElementById("validationLoginEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("loginEmail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf(".", 0) < 0){
    document.getElementById("validationLoginEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("loginEmail").style.border="1px solid red";
    return false;
  }
  else{
    document.getElementById("validationLoginEmailFail").innerHTML= "";
    document.getElementById("loginEmail").style.border="1px solid #ccc";
    return true;
  }
};


function emailRegValidation(){
  var email = document.getElementById("regEmail").value;

  if(email === ""){
    document.getElementById("validationRegEmailFail").innerHTML= "Please enter email";
    document.getElementById("regEmail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf("@", 0) < 0){
    document.getElementById("validationRegEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("regEmail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf(".", 0) < 0){
    document.getElementById("validationRegEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("regEmail").style.border="1px solid red";
    return false;
  }
  else{
    document.getElementById("validationRegEmailFail").innerHTML= "";
    document.getElementById("regEmail").style.border="1px solid #ccc";
    return true;
  }
};

function emailProfValidation(){
  var email = document.getElementById("profemail").value;

  if(email === ""){
    document.getElementById("validationProfEmailFail").innerHTML= "Please enter email";
    document.getElementById("validationProfEmailFail").style.color="red";
    document.getElementById("profemail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf("@", 0) < 0){
    document.getElementById("validationProfEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("validationProfEmailFail").style.color="red";
    document.getElementById("profemail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf(".", 0) < 0){
    document.getElementById("validationProfEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("validationProfEmailFail").style.color="red";
    document.getElementById("profemail").style.border="1px solid red";
    return false;
  }
  else{
    document.getElementById("validationProfEmailFail").innerHTML= "";
    document.getElementById("profemail").style.border="1px solid #ccc";
    return true;
  }
};

function emailAdmnValidation(){
  var email = document.getElementById("AdminUpdemail").value;

  if(email === ""){
    document.getElementById("validationAdminUpdEmailFail").innerHTML= "Please enter email";
    document.getElementById("validationAdminUpdEmailFail").style.color="red";
    document.getElementById("AdminUpdemail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf("@", 0) < 0){
    document.getElementById("validationAdminUpdEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("validationAdminUpdEmailFail").style.color="red";
    document.getElementById("AdminUpdemail").style.border="1px solid red";
    return false;
  }
  else if(email.indexOf(".", 0) < 0){
    document.getElementById("validationAdminUpdEmailFail").innerHTML= "Please enter a valid e-mail address";
    document.getElementById("validationAdminUpdEmailFail").style.color="red";
    document.getElementById("AdminUpdemail").style.border="1px solid red";
    return false;
  }
  else{
    document.getElementById("validationAdminUpdEmailFail").innerHTML= "";
    document.getElementById("AdminUpdemail").style.border="1px solid #ccc";
    return true;
  }
};

function pswCompare(psw1, psw2, errorField) {
  var textA = document.getElementById(psw1).value;
  var textB = document.getElementById(psw2).value;
  if(textA === textB){
    document.getElementById(errorField).innerHTML= "";
    document.getElementById(psw2).style.border="1px solid #ccc";
    return true;
  }
  else{
    document.getElementById(errorField.toString()).innerHTML= "Password does not match!";
    document.getElementById(errorField.toString()).style.color="red";
    document.getElementById(psw2.toString()).style.border="1px solid red";
    return false;
  }
}

function regValidityCheck(){

  var error = 0;
  var val;

  val = validationHighlight("txtFName","validationFNameFail","Please enter your first name");
  if(val == false){
    error = error + 1;
  }

  val = validationHighlight("txtLName","validationLNameFail","Please enter your last name");
  if(val == false){
    error = error + 1;
  }
  val = numValidation("numTel","validationTelFail","Please enter contact number");
  if(val == false){
    error = error + 1;
  }

  if(emailRegValidation() == false){
    error = error + 1;
  }

  val = validationHighlight("psw1","validationPass1Fail","Please enter correct password Format");
  if(val == false){
    error = error + 1;
  }

  val = validationHighlight("psw2","validationPass2Fail","Please enter correct password Format");
  if(val == false){
    error = error + 1;
  }

  val = pswCompare("psw1","psw2", "validationPass2Fail", "Please enter correct password Format");
  if(val == false){
    error = error + 1;
  }

  if(error > 0){
    alert('Registration Fail');
    return false;
  }else{
    document.getElementById("registerModal").display = hidden;
    return true;
  }
};

function loginValidityCheck(){
  var error = 0;
  var val;

  if(emailLogValidation() == false){
    error = error + 1;
  }

  if(error > 0){
    alert('Login Incorrect');
    return false;
  }else{
    document.getElementById("LoginModal").display = hidden;
    return true;
  }
};

function changePasswordValidityCheck(){
  var psw1 = document.getElementById(newpsw1).value;
  var psw2 = document.getElementById(newpsw2).value;
  var error = 0;

  val = validationHighlight("previouspsw","validationNewPassFail","Please enter correct password Format");
  if(val == false){
    error = error + 1;
  }

  val = validationHighlight("newpsw1","validationNewPass1Fail","Please enter correct password Format");
  if(val == false){
    error = error + 1;
  }

  val = validationHighlight("newpsw2","validationNewPass2Fail","Please enter correct password Format");
  if(val == false){
    error = error + 1;
  }

  if(psw1 != psw2){
    error = error + 1;
  }
  if(error > 0){
    alert('Password change Fail');
    return false;
  }else{
    document.getElementById("changepasswordModal").display = hidden;
    return true;
  }
};

function UpdateValidityCheck(){

  var error = 0;
  var val;

  val = validationHighlight("proftxtFName","validationFNameProfFail","Please enter your first name");
  if(val == false){
    error = error + 1;
  }

  val = validationHighlight("proftxtLName","validationLNameProfFail","Please enter your last name");
  if(val == false){
    error = error + 1;
  }
  val = numValidation("profphoneNum","validationProfTelFail","Please enter contact number");
  if(val == false){
    error = error + 1;
  }

  if(emailProfValidation() == false){
    error = error + 1;
  }

  if(error > 0){
    alert('Update Fail');
    return false;
  }else{
    return true;
  }
};

function adminUpdateValidityCheck(){

  var error = 0;
  var val;

  val = validationHighlight("AdminUpdtxtFName","validationAdminUpdFNameFail","Please enter your first name");
  if(val == false){
    error = error + 1;
  }

  val = validationHighlight("AdminUpdtxtLName","validationAdminUpdLNameFail","Please enter your last name");
  if(val == false){
    error = error + 1;
  }
  val = numValidation("AdminUpdphoneNum","validationAdminUpdTelFail","Please enter contact number");
  if(val == false){
    error = error + 1;
  }

  if(emailAdmnValidation() == false){
    error = error + 1;
  }

  if(error > 0){
    alert('Update Fail');
    return false;
  }else{
    return true;
  }
};
//---Ends

//---Clear Input of Contact Us Starts ---//
function clearField(){
    document.getElementById("myForm").reset();
};
//---Clear Input of Contact Us Ends ---//

function openNav() {
  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("main").style.width = "80%";
  document.getElementById("main").style.marginLeft = "20%";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0%";
  document.getElementById("main").style.width = "100%";
  document.getElementById("main").style.marginLeft = "0%";
}
