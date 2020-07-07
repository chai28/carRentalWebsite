 $(document).ready(function () {
    $("#sdate").click(function () {
        var today = new Date();
        var dd = (today.getDate()+1);
        var mm = today.getMonth()+1; 
        var yyyy = today.getFullYear();
         if(dd<10){
                dd='0'+dd
            } 
            if(mm<10){
                mm='0'+mm
            } 
       var date = yyyy+'-'+mm+'-'+dd;
        $(this).attr("min",date);
    });
    $("#edate").click(function () {
       var sdate=$("#sdate").val();
        $(this).attr("min",sdate);
    });
   /* $("#stime").click(function () {
        var today = new Date();
        var hour=today.getHours();
        var minute=today.getMinutes();
        if(minute<10){
         var minutes="0"+miunte;  
        var current=hour+":"+minutes;
         $(this).attr("min",current);
        }else{
            var current=hour+":"+minute;
            $(this).attr("min",current);
        } 
     });*/
});