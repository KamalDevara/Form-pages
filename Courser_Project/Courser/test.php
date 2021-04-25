<?php
session_start();
 require_once '../config/connect.php';
 if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
   header('location: ../Student/index.php?');
 }
 else{
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $id = $_SESSION['id'];
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

       <!-- Icon for page -->
     <link rel="Icon" href="../images/favicon.png">
     <title>Coursera &nbsp| &nbsp Online Test</title>

     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/nav.css" rel="stylesheet" media="all">
     <link rel="stylesheet" href="css/teststyle.css" media="all">
     <link rel="stylesheet" href="css/viewport.css" media="all">
     <script src="js/res.js"></script>

   </head>
    <body>
            <div class="site-container">
                   <header>
                    <div class="site-header text-center">
                       <a class="imga" href="index.php?"><img src="images/website.png" alt="Coursera" class="img-responive imgc"></a>
                    </div><!-- site-header -->
                  </header>
                  <nav class="navbar navbar-default navbar-static-top">
                     <div class="container-fluid">
                         <div class="navbar-header">
                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                             </button>
                             <a class="navbar-brand" href="index.php?">COURSERA</a>
                         </div>
                          <div id="navbar" class="navbar-collapse collapse">
                               <ul class="nav navbar-nav navbar-left">
                                  <li><a href="index.php?">Home</a></li>
                                   <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALL Tutorials
                                           <span class="caret1" aria-hidden="true"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                          <li><a href="Java/index.php?">Learn Java</a></li>
                                          <li><a href="C/index.php?">Learn C</a></li>
                                          <li><a href="C++/index.php?">Learn C++</a></li>
                                          <li><a href="Python/index.php?">Learn Python</a></li>
                                          <li><a href="XML/index.php?">Learn XML</a></li>
                                          <li><a href="PHP/index.php?">Learn PHP</a></li>
                                          <li><a href="DBMS/index.php?">Learn DBMS</a></li>
                                          <li><a href="MongoDB/index.php?">Learn MongoDB</a></li>
                                           <li><a href="Perl/index.php?">Learn Perl</a></li>
                                        </ul>
                                   </li>
                                   <li class="active"><a href="test.php?">Online Tests</a></li>
                               </ul>
                               <ul class="nav navbar-nav navbar-right">
                                   <li><a href="feedback.php?">Feedback</a></li>
                                   <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                           <?php
                                               echo strtoupper("$name");
                                            ?>
                                       <span class="caret" aria-hidden="true"></span></a>
                                       <ul class="dropdown-menu">
                                          <li><a href="#">Profile</a></li>
                                          <li><a href="#">Settings</a></li>
                                          <li><a href="logout.php?">Logout</a></li>
                                       </ul>
                                   </li>
                               </ul>
                          </div>
                     </div>
                  </nav>
                   <div class="test">
                        <div class="row">
                             <div class="tcolumn pad-15">
                                <div class="pt_info">
                                  <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                     <h4>Java</h4>
                                     <p>NO. of Question :<b>15</b></p>
                                     <p>Duration : <b>25:00 Mins</b></p>
                                     <button type="submit" name="java" class="btn btn-default">Take Test</button>
                                </div>
                             </div>
                             <div class="tcolumn pad-15">
                                <div class="pt_info">
                                  <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                     <h4>C</h4>
                                     <p>NO. of Question :<b>15</b></p>
                                     <p>Duration : <b>25:00 Mins</b></p>
                                     <button type="submit" name="C" class="btn btn-default">Take Test</button>
                                </div>
                             </div>
                             <div class="tcolumn pad-15">
                                <div class="pt_info">
                                  <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                     <h4>C++</h4>
                                     <p>NO. of Question :<b>15</b></p>
                                     <p>Duration : <b>25:00 Mins</b></p>
                                     <button type="submit" name="C++" class="btn btn-default">Take Test</button>
                                </div>
                             </div>
                             <div class="tcolumn pad-15">
                                <div class="pt_info">
                                  <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                     <h4>PHP</h4>
                                     <p>NO. of Question :<b>15</b></p>
                                     <p>Duration : <b>25:00 Mins</b></p>
                                     <button type="submit" name="php" class="btn btn-default">Take Test</button>
                                </div>
                             </div>
                        </div>
                        <div class="row">
                          <div class="tcolumn pad-15">
                             <div class="pt_info">
                               <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                  <h4>DBMS</h4>
                                  <p>NO. of Question :<b>15</b></p>
                                  <p>Duration : <b>25:00 Mins</b></p>
                                  <button type="submit" name="DBMS" class="btn btn-default">Take Test</button>
                             </div>
                          </div>
                          <div class="tcolumn pad-15">
                             <div class="pt_info">
                               <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                  <h4>Python</h4>
                                  <p>NO. of Question :<b>15</b></p>
                                  <p>Duration : <b>25:00 Mins</b></p>
                                  <button type="submit" name="python" class="btn btn-default">Take Test</button>
                             </div>
                          </div>
                          <div class="tcolumn pad-15">
                             <div class="pt_info">
                               <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                  <h4>HTML</h4>
                                  <p>NO. of Question :<b>15</b></p>
                                  <p>Duration : <b>25:00 Mins</b></p>
                                  <button type="submit" name="html" class="btn btn-default">Take Test</button>
                             </div>
                          </div>
                          <div class="tcolumn pad-15">
                             <div class="pt_info">
                               <img style="max-width:48px;height:auto;" src="images/symbol/exam.png" alt="exam">
                                  <h4>XML</h4>
                                  <p>NO. of Question :<b>15</b></p>
                                  <p>Duration : <b>25:00 Mins</b></p>
                                  <button type="submit" name="xml" class="btn btn-default">Take Test</button>
                             </div>
                          </div>
                        </div>
                   </div><!--test -->
            </div><!-- site-container-->

     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
