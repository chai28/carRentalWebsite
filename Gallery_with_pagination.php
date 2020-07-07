<?php 
include 'header.php'; 
include 'viewcarmodal.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
    <title>Document</title>
</head>

<body>
    <style>
        img,
        nav {
            display: block;
            margin: auto;
            max-width: 80%;
            height: auto;
        }

    </style>
      <header>
      <div class="container-fluid text-center">
        <a class="navbar-brand" href="#"><img src="logo.png" width="180px" height="150px"></a>
      </div>
    </header>
    <?php include 'nav_bar.php';?>
    <div  style=" margin-top:15px;">
     <a href="#section1" id="Premium">Premium+</a>  
    </div>
    <div class="container">
      
        <div class="div" id="images">

            <div id="section1" class="row">
                <div class="col-md-4"><img
                        src="static/img/premium/Bmwi8.jpg"
                        alt="" data-toggle="modal" data-target="#viewcarmodal"> </div>
                <div class="col-md-4"><img
                        src="static/img/premium/jeep.jpg"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"></div>
                <div class="col-md-4"><img
                        src="static/img/premium/R8audiUk.png"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"></div>
            </div>
            
            <div id="section2" class="row"  style="display:none;">
                <div class="col-md-4"><img 
                        src="static/img/premium/bentley.jpg"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"></div>
                <div class="col-md-4"><img
                        src="static/img/premium/ferrari-gtc.jpg"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"></div>
                
                <div class="col-md-4"><img
                        src="static/img/premium/rollsroyce_wraith.jpg"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"></div>
            </div>
    
            <div id="section3" class="row" style="display:none;">
                <div class="col-md-4"><img
                        src="static/img/premium/lamborghini-aventador.jpg"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"> </div>
                <div class="col-md-4"><img
                        src="static/img/premium/MercedesBenz.jpg"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"></div>
                <div class="col-md-4"  ><img
                        src="static/img/premium/racer-wot-hummer-h2-suv-black.jpeg"
                        alt=""data-toggle="modal" data-target="#viewcarmodal"></div>
            </div>

        </div>
    </div>

        <div class="row" style="margin-top: 40px; ">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">  
                    </li>
                    <li id="page1" class="page-item"><a class="page-link" href="#section1">1</a></li>
                    <li id="page2" class="page-item"><a class="page-link" href="#section2">2</a></li>
                    <li id="page3" class="page-item"><a class="page-link" href="#section3">3</a></li>
                    <li class="page-item">
                    </li>
                </ul>
            </nav>
        </div>

    <div>
            <button style="margin-top: 20px; margin-left: 630px;" id="view">View more</button>
            <button style="margin-top: 20px; margin-left: 630px; display:none;" id="hide" >Hide</button>

   </div> 

</div>
    


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script>
    $("#page1").on("click", function () {

        $("#section2").hide();
        $("#section3").hide();
        $("#section1").show();
        $("#view").show();
        $("#hide").hide();
    })

    $("#page2").on("click", function () {

        $("#section1").hide();
        $("#section3").hide();
        $("#section2").show();
        $("#view").hide();
        $("#hide").hide();

    })

    $("#page3").on("click", function () {

        $("#section1").hide();
        $("#section2").hide();
        $("#section3").show();
        $("#view").hide();
        $("#hide").hide();
    })

    $("#view").on("click", function () {

     $("#section2").show();
     $("#section3").show();
     $("#section1").hide();
     $("#view").hide();
     $("#hide").show();
})
$("#hide").on("click", function () {

    $("#section2").hide();
    $("#section3").hide();
    $("#section1").show();
    $("#view").show();
    $("#hide").hide();
})

$("#Premium").on("click", function () {

$("#section2").hide();
$("#section3").hide();
$("#section1").show();
$("#view").show();
$("#hide").hide();
})

</script>

</html>