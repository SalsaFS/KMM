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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="js/jquery/jquery-ui.css">
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

<section id="berita">
<div class="container bg-dark" style="width: 100%; height: 60px;">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h2 class="section-heading" id="judul_berita" style="color: white;"><b>PENDAFTARAN PELATIHAN</b></h2>
  </div>
</div>
<div class="container col-md-offset-2" style="padding-top: 1cm;">
   <div class="row">
    <div class="col-md-9">
    <!--kotakan form-->
      <div class="panel panel-default">
        <div class="form " style="padding-top: 1cm; padding-left: 1cm;">
          <table cellpadding="100">
            <tr>
              <td>Nama Pelatihan</td>
              <td>: </td>
              <td><input type="text" size="30" autocomplete=""></td></tr>
            <tr>
              <td>Nama Peserta</td>
              <td>: </td>
              <td><input type="text" size="30"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>: </td>
              <td><input type="text" size="30" placeholder="pitik@gmail.com"></td>
            </tr>
            <tr>
              <td>Kelamin</td>
              <td>: </td>
              <td>
                <input name="jenis_kelamin" type="radio" value="L" checked>
                  Laki-laki
                 <input name="jenis_kelamin" type="radio" value="P">
                Perempuan </td>
            </tr>
            <tr>
              <td>Tempat, Tanggal Lahir</td>
              <td>: </td>
              <td><input type="text" size="30"></td>
              <td>
                <form method="post" action="">
                Tanggal : <input type="text" name="date" id="date"/></form>
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><textarea cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
              <td>Nomor Handphone</td>
              <td>: </td>
              <td><input type="text" size="30" placeholder="08xxxxxxxxxx"></td>
            </tr>
            <tr>
              <td>Pendidikan Terakhir</td>
              <td>: </td>
              <td>
                <select class="dropdown" value="Pendidikan"><option>--Pilihan--</option>
                  <option>SD</option>
                  <option>SMP/MTS</option>
                  <option>SMA/K/MA</option>
                  <option>D1</option>
                  <option>D2</option>
                  <option>D3</option>
                  <option>D4</option>
                  <option>S1</option>
                  <option>S2</option>
                  <option>Lainya</option>
                </select> </td>
            </tr>
            <tr>
              <td>Photo</td>
              <td>:</td>
              <td><input type="file" name="photo" id="photo"></td>
            </tr>         
          </table>
        <br>
        <input type="checkbox"> Saya setuju dengan persyaratan yang di ajukan<br><br>
        <p style="text-align: right;">
        <input type="submit" class="submit btn btn-primary btn-round" value="Daftar" cols="30">
        <input type="cancel" id="fulang2" class="submit btn btn-dark btn-round" value="Batal" style="width: 130px;" onClick="javascript:history.back()"></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
    <div>
      <a href="pelatihan.php" class="btn btn-primary"> < Kembali</a>
    </div>       
  </div>
  </div>
  <br><br>         
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

<!-- jQuery -->
<script src="js/bootstrap.min.js"></script>

</body>
<script type="text/javascript">
  $(document).ready(function(){
    $("#date").datepicker();});
    $(document).ready(function(){
      $("#date").datepicker({
        changeMonth:true,
        changeYear:true
        });
      });
      $("#date").datepicker({
        changeMonth:true,
        changeYear:true,
        yearRange:"-100:+0",
        dateFormat:"dd MM yy"
      });
  </script>
</html>