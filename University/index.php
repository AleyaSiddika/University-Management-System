

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->


<!-- Mirrored from nkdev.info/con/page-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Apr 2015 12:58:44 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login For Administrator</title>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="admin/assets/_con/images/icon.png">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="admin/assets/nanoScroller/nanoscroller.css" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="admin/assets/font-awesome/css/font-awesome.min.css" />

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="admin/assets/material-design-icons/css/material-design-icons.min.css" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css" href="admin/assets/ionicons/css/ionicons.min.css" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="admin/assets/weatherIcons/css/weather-icons.min.css" />
  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="admin/assets/_con/css/_con.min.css" />

  <!--[if lt IE 9]>
    <script src="admin/assets/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
</head>
<style>
    .admin{
        font-size: 18px;
        color: #f4f4f4;
        font-family:"Comic Sans MS", cursive, sans-serif;
        text-shadow: #000 1px 0px 10px ;
    }
    .btnnnn{
        background-color: #284e6c;
    }
    .btnnnn:hover{
        background-color: #2e417a;
    ;
        color: #fff;
    }

</style>
<body>

  <section id="sign-in">

    <!-- Background Bubbles -->
    <canvas id="bubble-canvas"></canvas>
    <!-- /Background Bubbles -->

    <!-- Sign In Form -->
      <form action="admin/Views/Auth/login-process.php" method="post">
      <div class="row links">
        <div class="col s6 logo">
          <p class="admin">
              Login For Administrator
          </p>
        </div>
      </div><br>

      <div class="card-panel" style="background-color: #f4f4f4;">

        <div class="row">
          <div class="col-md-10">
                  <?php
                  @session_start();
                  if(isset($_SESSION['Msg'])){
                      echo $_SESSION['Msg'];
                      unset($_SESSION['Msg']);
                  } ?>
          </div>
        </div>

        <!-- Username -->
        <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <input id="username-input" required="required" type="text" name="adminEmail" class="validate">
          <label for="username-input">Email</label>
        </div>
        <!-- /Username -->

        <!-- Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
          <input id="password-input" required="required"  type="password" name="Admin_pass" class="validate">
          <label for="password-input">Password</label>
        </div><br><br>
        <!-- /Password -->


        <button type="submit" class="waves-block waves-deep-purple btn-large z-depth-0 z-depth-1-hover   btnnnn">Log In</button>
      </div>

    </form>
    <!-- /Sign In Form -->

  </section>


  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type="text/javascript" src="admin/assets/_con/js/_demo.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="admin/assets/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="admin/assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="admin/assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="admin/assets/materialize/js/materialize.min.js"></script>

  <!-- Sortable -->
  <script type="text/javascript" src="admin/assets/sortable/Sortable.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="admin/assets/_con/js/_con.min.js"></script>




</body>


<!-- Mirrored from nkdev.info/con/page-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Apr 2015 12:58:44 GMT -->
</html>