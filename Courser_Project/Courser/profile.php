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
     $comments="";
     $count = 0;
      if(isset($_POST['feedback'])){
        $comments =mysqli_real_escape_string($conn,$_POST['comment']);
        $question1 = mysqli_real_escape_string($conn,$_POST['que_1']);
        $question2 = mysqli_real_escape_string($conn,$_POST['que_2']);
        $question3 = mysqli_real_escape_string($conn,$_POST['que_3']);

          if(empty($comments)){
            $error_msg['comment']="** Please fill the text";
            $count++;
          }
          elseif(str_word_count($comments) < 15 || str_word_count($comments) > 100){
            $error_msg['comment']="** Word must be between 15 and 100";
            $count++;
          }
          if($count == 0){
            $query = "INSERT INTO tbl_feedback values ('','$id','$name','$question1','$question2','$question3','$comments',now())";
            mysqli_query($conn,$query);
            $_SESSION['name'] =$name;
            echo '
                  <script type="text/javascript" src="js/jquery.min.js"></script>
                  <link rel="stylesheet" href="css/sweetalert.css">
                  <script src="js/sweetalert.min.js"></script>
                   <script>
                   $( document ).ready(function() {
                 swal({
                      title: "Thank you for feedback",
                      text: "",
                      type: "success",
                      }, function(isConfirm) {
                         document.location.href="feedback.php?"
                      });
                    });
               </script>';
          }
      }
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
     <title>Coursera &nbsp| &nbspProfile Page</title>

     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/nav1.css" rel="stylesheet" media="all">
     <link rel="stylesheet" href="css/teststyle1.css" media="all">
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
                                   <li><a href="test.php?">Online Tests</a></li>
                               </ul>
                               <ul class="nav navbar-nav navbar-right">
                                   <li><a href="feedback.php?">Feedback</a></li>
                                   <li class="dropdown active">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                           <?php
                                               echo strtoupper("$name");
                                            ?>
                                       <span class="caret" aria-hidden="true"></span></a>
                                       <ul class="dropdown-menu">
                                          <li class="active"><a href="profile.php?">Profile</a></li>
                                          <li><a href="#">Settings</a></li>
                                          <li><a href="logout.php?">Logout</a></li>
                                       </ul>
                                   </li>
                               </ul>
                          </div>
                     </div>
                  </nav>
                  <section class="container">
                        <div class="wrapper">
                            <div class="wrapper site-header1 text-center">
                                <h1>Profile </h1>
                            </div>
                            <div class="form-wrapper">
                               <div class="site-page">
                                  <h3>Please give your answer about the following Question:</h3>
                               </div>
                                <div class="list-form">
                                  <form action="feedback.php" method="post">

                                      <button type="submit" name="feedback" onclick=""class="btn btn-default btn-orange"></button>
                                      <!--input type="submit" name="feedback" onClick="" role="button" class="btn btn-default btn-orange" value="submit"-->
                                   </form>
                                </div>
                            </div>
                        </div>
                  </section>
            </div><!-- site-container-->

     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/sweetalert.min.js"></script>
   </body>
 </html>
