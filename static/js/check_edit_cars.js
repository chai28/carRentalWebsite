$(document).ready(function () {
    $("#update").click(function () {
        var modal=$('#modal');
        var brand= $('#brand');
        var category=$('#category');
        if(category.val()==""){
            alert("Please enter the category ID!");
            return false;
        } else if (modal.val()=="") {
            alert("Please enter car modal!");
            return false;
        }else if(brand.val()==""){
            alert("Please enter car brand!");   
            return false;
        }else{
        }
    });
});