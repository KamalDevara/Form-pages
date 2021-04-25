<?php
   session_start();
  require_once 'config/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Icon for page -->
     <link rel="Icon" href="images/favicon.png">
     <title>Coursera | Home</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Viewport -->
     <link rel="stylesheet" href="css/viewport.css">
     <script src="js/res.js"></script>
  </head>
  <body>
    <!--- header -->
    <header>
       <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
         <div class="navbar-header clearfix">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?id=aqs=0.699i60l4.154j0j7&sourceid=lkajk&ie=UTF-8">Coursera</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php?">Home</a></li>
            <li><a href="announcements.php?id=aqs=0.699i60l4.154j0j7&sourceid=lkajk&ie=UTF-8">Announcements</a></li>
            <li><a href="about.php?id=aqs=0.699i60l4.154j0j7&sourceid=lka@ie=UTF-8">About Us</a></li>
            <li class="butt"><a class="btn btn-online-success"  id="butt" type="button" href="Student/index.php?aqs=0.6l4.1540j7&sourceid=lkajk&ie=UTF-8">Log In</a></li>
          </ul>
        </div>
      </div>
    </nav>
        <div class="container-fluid backgroundimg">
          <h1 class="super text-center h1t">COURSERA MANAGEMENT SYSTEM</h1>
                <div class="inner cover mi">
                <h2 class="cover-header h2t">You are unstoppable</h2>
                <p class="lead p1">Build in-demand skills and earn valuable credentials.</p>
                <!-- Button trigger model -->
                <a class="btn btn-lg btn-primary"  type="button" id="join" role="button" href="Student/register.php?id=&abc12467absb">Join for free</a>
                </div>
           </div>
    </header>

    <!-- Modal -->

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-body">
     <div>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title text-center h1m" id="myModalLabel">Sign Up</h4>
     </div>
       <div class="modal-bu">
        <a href="Faculty/mainpage.php"><button type="button" class="btn btn-primary btn-lg fac butt1" >Faculty</button></a>
        <a href="Student/mainpage.php"><button type="button" class="btn btn-lg fac butt2">Student</button></a>
       </div>
     </div>
    </div>
   </div>
 </div> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
