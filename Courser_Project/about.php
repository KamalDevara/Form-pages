<?php
   session_start();
  require_once 'config/connect.php';
     $count = 0;
    if(isset($_POST['message'])){
      $name = mysqli_real_escape_string($conn,$_POST['name']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $subject = mysqli_real_escape_string($conn,$_POST['subject']);
      $comment = mysqli_real_escape_string($conn,$_POST['talk']);

       if(strlen($name) < 3 || strlen($name) > 15){
         $error_msg['name']="** character must be between 3 and 15";
         $count++;
       }
       if(!preg_match("/^[a-zA-Z -]*$/",$name)) {
         $error_msg['name']="**Number are not allowed";
         $count++;
       }
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error_msg['email'] = "** Invalid email address";
          $count++;
         }
        if(str_word_count($subject) < 3 || str_word_count($subject) > 10){
           $error_msg['subject'] ="** words must be between 3 and 10";
           $count++;
        }
        if(!preg_match("/^[a-zA-Z -]*$/",$subject)) {
          $error_msg['subject']="** Number are not allowed";
          $count++;
        }
        if(str_word_count($comment) < 15 || str_word_count($comment) > 100){
           $error_msg['talk'] ="** words must be between 15 and 100";
           $count++;
        }
        if($count == 0){
          $query ="INSERT INTO message values ('','$name','$email','$subject','$comment',now())";
           mysqli_query($conn,$query);
           $_SESSION['name'] = $name;
           echo '
                 <script type="text/javascript" src="js/jquery.min.js"></script>
                 <link rel="stylesheet" href="css/sweetalert.css">
                 <script src="js/sweetalert.min.js"></script>
                  <script>
                  $( document ).ready(function() {
                swal({
                     title: "Message Sent",
                     text: "",
                     type: "success",
                     }, function(isConfirm) {
                        document.location.href="about.php?"
                     });
                   });
              </script>';
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
     <link rel="Icon" href="images/favicon.png">
    <title>Coursera | About us </title>

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
          <a class="navbar-brand cou" href="index.php?id=a0.69il4.150j7&sourceid=lkajk&ie=UTF-8">Coursera</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?id=0.6i6l4.154j0j7&sourceid=lkajk&ie=UTF-8">Home</a></li>
            <li><a href="announcements.php?id=0.699i60l4.154j0&sourceid=lkk&ie=UTF-8">Announcements</a></li>
            <li class="active"><a href="about.php?id=0.69el4.15j7&sourceid=lkjk&e=UTF-8">About Us</a></li>
            <li class="butt"><a class="btn btn-online-success"  id="butt" role="button" href="Student/index.php?id=06.4j0j7&sourceid=lk&ie=UTF-8">Log In</a></li>
          </ul>
        </div>
        </div>
      </div>
    </nav>

       <!-- main header-->
      <div role="main"><article id="post-928"  class="post-928 page type-page status-publish hentry">
      <div class="container an">
        <h1 class="super text-center h1a" style="color: #000000;">We&#8217;re here for you.</h1>
        <p class="lead text-center" style="color: gray;">
            Have a question? Maybe you just want to say hello?<br />
            Send us an email at <a href="mailto:support@coursera.com" target="_blank" style="color : #FF4500;">support@Coursera.com</a> or give us a call at <a href="tel:+918934271369" target="_blank" style="font-weight: lighter; color:#FF4500;" rel="nofollow">+91 893 427 1369</a> or <a href="tel:+16466937115" target="_blank" style="font-weight: lighter; color:#FF4500;" rel="nofollow">+1 (646) 693 7115</a><br />
        </p>
       </div>

       <!-- below the main header -->
      <div class="container">
        <div class="section-header">
        <h1 class="headline text-caps text-center h1a" style="color: #000000;">Come visit us</h1>
      </div>
       <p class="lead text-center p1" style="color: #000000;">
        Developing a social learning platform that puts the fun back in learning and offering that to people all around the world is simply what makes us tick. Though, to be honest, there is one disadvantage. We don’t get to see you, our clients and partners, as often as we would like to. So whenever you are in town, please stop by our office for a cup of coffee and a chat.</p>
      </div>

       <!-- query -->
       <div style="background-color: #D3D3D3;">
         <div class="container">
           <div class="inner cover">
            <h2 class="headline text-caps text-center h1ab">Message Form</h2>
           </div>
           <div class="inner-wrapper">
             <div class="row">
           <form role="form" class="ab" action="about.php" method="post">
            <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="YOUR NAME" autocomplete="off" required><span> <p class="error">
              <span> <p class="error error1">
                   <?php   if(isset($error_msg['name'])){
                              echo $error_msg['name'];
                        }
                   ?>
              </p> </span>
            </div>
              <div class="form-group">
              <input type="email" class="form-control" name="email"placeholder="YOUR EMAIL" autocomplete="off" required>
              <span> <p class="error">
                   <?php   if(isset($error_msg['email'])){
                              echo $error_msg['email'];
                        }
                   ?>
              </p> </span>
               </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="SUBJECT" autocomplete="off" required>
                <span> <p class="error">
                     <?php   if(isset($error_msg['subject'])){
                                echo $error_msg['subject'];
                          }
                     ?>
                </p> </span>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="15" name="talk" placeholder="I WANT TO TALK ABOUT.." autocomplete="off" required></textarea>
                <span> <p class="error">
                     <?php   if(isset($error_msg['talk'])){
                                echo $error_msg['talk'];
                          }
                     ?>
                </p> </span>
              </div>
                 <button type="submit" class="btn btn-large btn-primary se" name="message" onclick="">Send Message</button>
              </form>
            </div>
         </div>
       </div>
     </div>
       </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
