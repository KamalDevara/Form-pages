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
    <title>Coursera | Announcements </title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- main CSS -->
    <link href="css/style.css" rel="stylesheet">
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
          <a class="navbar-brand cou" href="index.php?id=aqs=0.699i60l4.154j0j7&sourceid=lkajk&ie=UTF-8">Coursera</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?id=aqs=0.699i60l4.154j0j7&sourceid=lkajk&ie=UTF-8">Home</a></li>
            <li class="active"><a href="announcements.php?id=aqs=0.699il4.154j0j7&sourceid=lkk&ie=UTF-8">Announcements</a></li>
            <li><a href="about.php?id=0.699i60l4.154j0j7&sourceid=lkajk&ie=UTF-8">About Us</a></li>
            <li class="butt"><a class="btn btn-online-success"  id="butt" role="button" href="Student/index.php?id=0.699i60.1540j7&sourceid=lkajk&ie=UTF-8" >Log In</a></li>
          </ul>
        </div>
        </div>
      </div>
    </nav>

      <!-- main header -->
    <div role="main"><article id="post-265"  class="post-265 page type-page status-publish hentry">
     <div class="container an">
      <h1 class="super text-center h1a" style="color: #000000;">Better learning &#8211; feature by feature</h1>
      <p class="lead text-center">
       Say goodbye to feeling shorthanded when building your online courses.<br />
      </p>
     </div>
    </article>
  </div>

      <!-- Announcements page -->
      <div role="main">
       <div class="container an">
        <h1 class="super text-left h1n">ANNOUNCEMENTS</h1>
        <ul class="ulan">
            <li class="lead"> <p> 02&#8211;10&#8211;2018   C programming</p>
                          <p>C programming a new course avaliable on portal.</p>
            </li>
            <li class="lead"> <p> 13&#8211;09&#8211;2018  Network programming</p>
                          <p>Network programming now created and material avaliable</p>
            </li>
            <li class="lead"> <p> 21&#8211;07&#8211;2018   Java </p>
                          <p>Java now material avaliable</p>
            </li>
        </ul>
       </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
