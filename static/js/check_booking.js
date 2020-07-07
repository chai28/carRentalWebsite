$(document).ready(function () {
    $("#request").click(function () {
        var sdate=$('#sdate');
        var stime= $('#stime');
        var edate=$('#edate');
        var etime=$('#etime');
        if(sdate.val()==""){
            alert("Please enter the start date!");
            return false;
        } else if (stime.val()=="") {
            alert("Please enter start time!");
            return false;
        }else if(edate.val()==""){
            alert("Please enter end date!");   
            return false;
        }else if(etime.val()==""){
            alert("Please enter end time!");   
            return false;
        }
    });
});