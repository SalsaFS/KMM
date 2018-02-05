<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Pelatihan TIK Kab. Banyumas</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<style>
  #map {
    height: 400px;
    width: 100%;
  }
</style>

</head>

<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <a class="navbar-brand page-scroll" style="padding-top: 0"><img src="image/logo2.png" style="height:110px; alt="logo"></a>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="page-scroll" href="index.html">Beranda</a>
        </li>
        <li>
          <a class="page-scroll" href="PageBerita.php">Berita</a>
        </li>
        <li>
          <a class="page-scroll" href="">Jadwal</a>
        </li>
        <li>
          <a class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
          <ul class="dropdown-menu bg-primary" style="padding: 20px 10px 5px 10px; width:300px;">
            <form>
                <fieldset id="inputs">
                  <h4>Username</h4>
                  <input style="color: #222" id="username" type="username" name="username" placeholder="Your username" required>
                  <h4>Password</h4>   
                  <input style="color: #222" id="password" type="password" name="Password" placeholder="Password" required>
                </fieldset>
                <fieldset id="actions">
                  <a id="signup" href="" class="btn btn-dark btn-round">Log in</a>
                  <label><input type="checkbox" checked="checked"> Keep me signed in</label>
                </fieldset>
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Pelatihan-->
<!--Judul-->
<section id="pelatihan">
<div class="container bg-dark" style="width: 100%; height: 60px;">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h1 class="section-heading" style="color: white;"><b>NAMA PELATIHAN</b></h1>
  </div>
</div>
<!--detail-->
<div class="container" style="padding-top:0">
  <div class="row">
    <div class="col-md-9 col-lg-offset-1">
      <div class="panel panel-default">
        <div class="panel-body">
          <h3 href="berita.php">JUDUL PELATIHAN</h3>
          <div class="info-meta">
            <ul class="list-inline">
              <li><i class="fa fa-clock-o"></i> tanggal posting </li>
            </ul>
          </div>
          <div class = "media">
            <a class = "pull-left" href="berita.php">
              <img class = "media-object " src = "image/Banyumas.jpg" width="300px" height="300px" >
            </a>
            <div class = "media-body">
              <p>deskirpsi pelatihan </p>
              <p>Waktu : </p>
              <p>Tempat: </p>
              <p>Kuota :</p>
            </div>
          </div>
          <br>
          <div>
            <h4>Lokasi:</h4>
            <div id="map">
            </div>
          </div>
        </div>
        <p style="text-align:right; padding-right: 20px">
          <a class="btn btn-primary" href="form.php">DAFTAR</a>
        </p>
      </div>
      <p style="text-align:left;">
        <a class="btn btn-primary" href="jadwal.php">Kembali
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
      </p>  
    </div>         
  </div>
</div>
</section>

<!-- Section Footer
================================================== -->
<footer class="bg-dark">
<div class="container" style="width:100%;height:110px;">
  <div class="col-md-12 text-center">
    <h3>Pelatihan TIK Kabupaten Banyumas</h3>
    <p>
      &copy; 2018 Dinas Komunikasi & Informasi Kabupaten Banyumas
    </p>
  </div>
</div>
</footer>

<script>
  function initMap() {
    var uluru = {lat: -7.424587, lng: 109.230163};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_qdDJrkQLp1xXHvALBkVjKZoAwoFaDDs&callback=initMap">
</script>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>