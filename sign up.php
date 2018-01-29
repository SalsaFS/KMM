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
            <a id="login" href="" class="btn btn-dark btn-round">Log in</a>
            <label><input type="checkbox" checked="checked"> Keep me signed in</label>
            <label><h5>Belum punya akun?
            <a id="signup" href="sign up.php" class="text-center" style="color: white;"><strong> daftar disini</strong></a></h5></label>
            </fieldset>
          </form>
        </ul>
      </li>
     
    </ul>
  </div>
  </div>
</nav>

<section id="berita">  
<div class="container col-md-offset-4" style="padding-top: 1cm; width: 20cm;">
  <div class="row">
    <div class="col-md-9 ">
    <!--kotakan form-->
      <div class="panel panel-default bg-primary roundbox">
        <div class="bg-dark text-center" style="height: 2cm; padding-top: 5px;"><h2><strong> SIGN UP</strong></h2> </div>
        <div class="form " style="padding-top: 1cm; padding-left: 1cm;">
          <table cellpadding="100">
            <tr>
              <td>Username</td>
              <td>: </td>
              <td><input type="text" size="30"></td></tr>
            <tr>
              <td>E-mail</td>
              <td>: </td>
              <td><input type="text" size="30" placeholder="pitik@gmail.com"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>: </td>
              <td><input type="text" size="30" placeholder="********"></td>
            </tr>
          </table> <br>
          <p style="text-align: center;">
        <input type="submit" class="submit btn btn-dark btn-round" value="Sign Up" cols="30"> </p>
        </div> <br>
      </div>
    </div>
    <div class="col-md-4">
    <div>
      <a href="index.html" class="btn btn-primary"> < Kembali</a>
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