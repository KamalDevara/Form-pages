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
      <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">

        <!-- Icon for page -->
      <link rel="Icon" href="../images/favicon.png">
      <title>Coursera &nbsp| &nbspHome</title>

      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/homestyle.css" rel="stylesheet">
      <link rel="stylesheet" href="css/viewport.css">
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
                                   <li class="active"><a href="index.php?">Home</a></li>
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
                                    <li><a href="test.php?">Online Tests</a></li>
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
                   <div class="tutorials">
                      <div class="row">
                          <div class="tcolumn pad-20">
                               <a href="Java/index.php?">
                               <span class="lightgreen-box pad-15 white box-shadow">
                                <img style="max-width:48px;height:auto;" src="images/symbol/Java.png" alt="Java Tutorials">
                                <span class="box-font white text-center">Java ></span>
                               </span>
                             </a>
                          </div>
                          <div class="tcolumn pad-20">
                               <a href="Java-Examples/index.php?">
                               <span class="lightgreen-box pad-15 white box-shadow">
                                <img style="max-width:48px;height:auto;" src="images/symbol/java_examples.png" alt="Java Examples">
                                <span class="box-font white text-center">Java Examples ></span>
                               </span>
                             </a>
                          </div>
                          <div class="tcolumn pad-20">
                               <a href="Java_Collections/index.php?">
                               <span class="lightgreen-box pad-15 white box-shadow">
                                <img style="max-width:48px;height:auto;" src="images/symbol/Java_Collections.png" alt="Java Collections">
                                <span class="box-font white text-center">Java Collections > </span>
                               </span>
                             </a>
                          </div>
                          <div class="tcolumn pad-20">
                               <a href="JSP/index.php?">
                               <span class="lightgreen-box pad-15 white box-shadow">
                                <img style="max-width:48px;height:auto;" src="images/symbol/JSP.png" alt="JSP">
                                <span class="box-font white text-center">JSP > </span>
                               </span>
                             </a>
                          </div>
                      </div>
                      <div class="row">
                        <div class="tcolumn pad-20">
                             <a href="Java_IO/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/Java_IO.png" alt="Java I/O">
                              <span class="box-font white text-center">Java I/O > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="Java_Strings/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/Java_Strings.png" alt="Java String">
                              <span class="box-font white text-center">Java Strings > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="Java_AWT/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/Java_AWT.png" alt="Java AWT">
                              <span class="box-font white text-center">Java AWT > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="Java_Swing/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/Java_Swing-1.png" alt="Java Swing">
                              <span class="box-font white text-center">Java Swing > </span>
                             </span>
                           </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="tcolumn pad-20">
                             <a href="C/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/C.png" alt="C tutorials">
                              <span class="box-font white text-center">C > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="C_Examples/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/java_examples.png" alt="C examples">
                              <span class="box-font white text-center">C Examples ></span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="C++/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/C-1.png" alt="C++ tutorials">
                              <span class="box-font white text-center">C++ > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="DBMS/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/DBMS.png" alt="DBMS tutorials">
                              <span class="box-font white text-center">DBMS > </span>
                             </span>
                           </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="tcolumn pad-20">
                             <a href="Perl/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/Perl_icon.png" alt="Perl">
                              <span class="box-font white text-center">Perl > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="MongoDB/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/MongoDB.png" alt="MongoDB">
                              <span class="box-font white text-center">MongoDB > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="Php/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:53px;height:auto;" src="images/symbol/php.png" alt="php">
                              <span class="box-font white text-center">PHP > </span>
                             </span>
                           </a>
                        </div>
                        <div class="tcolumn pad-20">
                             <a href="python/index.php?">
                             <span class="lightgreen-box pad-15 white box-shadow">
                              <img style="max-width:48px;height:auto;" src="images/symbol/python.png" alt="Perl">
                              <span class="box-font white text-center">Python > </span>
                             </span>
                           </a>
                        </div>
                      </div>
                   </div> <!-- tutorials -->
             </div><!-- site-container-->

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
