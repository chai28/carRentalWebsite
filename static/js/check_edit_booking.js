$(document).ready(function () {
    $("#update").click(function () {
        var date=$('#txtdate');
        var userid= $('#txtLuserid');
        var carid=$('#carid');
        if(date.val()==""){
            alert("Please enter the date!");
            return false;
        } else if (userid.val()=="") {
            alert("Please enter car user ID!");
            return false;
        }else if(carid.val()==""){
            alert("Please enter car ID!");   
            return false;
        }else{
          alert("Update successfully!");
        }
    });
});