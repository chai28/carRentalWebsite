
<?php
session_start();
include 'header.php';
?>
<body>
  <header>
    <div class="container-fluid text-center">
      <a class="navbar-brand" href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <?php include 'navbar.php';?>

  <div class="container-fluid bannerContainer">
    <section id="slider">
      <!-- START Carousel ---->
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="static/img/slider/lamb_desert.jpg" height= "600px" class="w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="static/img/slider/ferrari.jpg" height= "600px" class="w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="static/img/slider/Limousine.jpg" height= "600px" class="w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- END Carousel -->
    </section>

    </div>
    <div class="container-fluid">
    <section id="Adds1"> <!-- google map -->
      <div class="row">
        <div class="col-md-12">
          <h3 class="mb-4" style="text-align: center">Location map</h3>
          <div class="mapouter" style="display:block; margin:auto">
            <div style='overflow:hidden;height:400px;width:520px;'>
              <div id='gmap_canvas' style='height:400px;width:520px;'></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="articles">
      <div class="row">
        <div class="col-md-4 ">
            <div class="articlecontainer">
              <h2>Outstanding Services</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="articlecontainer">
              <h2>Quality Vehicles</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="articlecontainer">
              <h2>GPS Equipped</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="articlecontainer">
              <h2>Full Insurance Plan</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="articlecontainer">
              <h2>Long Term Offers</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="articlecontainer">
              <h2>24/7 Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
        </div>
      </div>
    </section>
  </div>

  <?php include 'footer.php'; ?>
  <?php include 'loginRegModal.php'; ?>
</body>
<a href='https://www.symptoma.ro/'>ReantACar database</a>
<script type='text/javascript'
  src='https://embedmaps.com/google-maps-authorization/script.js?id=0279ef9956049088485e958f728f770497c82664'></script>
<script type='text/javascript'>
  function init_map() {
    var myOptions = {
      zoom: 12,
      center: new google.maps.LatLng(-41, 174),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    marker = new google.maps.Marker({
      map: map,
      position: new google.maps.LatLng(-41, 174)
    });
    var infowindow = new google.maps.InfoWindow({

      content: '<iframe title="YouTube video player" type="text/html" width="100%" height="100%" src="static/img/0(1).mp4" frameborder="0"></iframe>'

    });


    google.maps.event.addListener(marker, 'click', function () {
      infowindow.open(map, marker);
    });
    infowindow.open(map, marker);
  }
  google.maps.event.addDomListener(window, 'load', init_map);
</script>
</html>
