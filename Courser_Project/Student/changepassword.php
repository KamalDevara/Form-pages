<?php
   session_start();
   require_once '../config/connect.php';
   if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
           header('location: index.php?');
   }
   else{
         $password="";
         $count =0;
        $email = $_SESSION['email'];
        if(isset($_POST['change_user'])){
          $password = mysqli_real_escape_string($conn,$_POST['pass']);
          $confirm  = mysqli_real_escape_string($conn,$_POST['confirmpass']);
          if(strlen($password) < 4 || strlen($password) > 10){
            $error_msg['pass'] ="** password must be between 4 and 10 character";
            $count++;
          }
          if($password != $confirm){
            $error_msg['confirmpass']="** password not matching";
            $count++;
          }
            if($count == 0)
            {
              $query ="SELECT * FROM register WHERE Email = '$email'";
              $result=mysqli_query($conn,$query);
              $row = mysqli_fetch_array($result);
               if($email === $row['Email']){
                  $password = md5($password);
                  $query = "UPDATE register set password='$password' WHERE Email = '$email'";
                  mysqli_query($conn,$query);
                  $_SESSION['email'] = $email;
                  echo '
                        <script type="text/javascript" src="../js/jquery.min.js"></script>
                        <link rel="stylesheet" href="../css/sweetalert.css">
                        <script src="../js/sweetalert.min.js"></script>
                         <script>
                         $( document ).ready(function() {
                       swal({
                            title: "Password Successfully Changed",
                            text: "",
                            type: "success",
                            }, function(isConfirm) {
                               document.location.href="index.php?"
                            });
                          });
                     </script>';
               }
               else{
                 echo "not done";
               }
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
     <title>Coursera &nbsp| Login </title>

     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/loginpage.css" rel="stylesheet">

   </head>
    <body>
       <div class="site-wrapper">

           <div class="page-wrap member-page">
               <div class="row m-0">
                  <div class="col-sm-6 col-sm-push-6 p-0">
                      <div class="member-col member-left">
                         <div class="member-overlay">
                      <div class="member-col-inner">
                              <div class="member-form-wrap">

                                       <h1 class="text-center">Welcome to <a href="../index.php?" style="text-decoration: none;"><b>Coursera</b></a></h1>
                                       <a href="changepassword.php?" style="text-decoration: none;"><h2 class="text-center">Change Password</h2></a>
                                       <form action="changepassword.php" method='POST'>
                                         <div class="error4" >  <p> Username :- <?php
                                                if(isset($_SESSION['name'])){
                                                   echo $_SESSION['name'];
                                                }
                                              ?></p></div>
                                  <!-- password-->
                                   <div class="hk">
                                    <input type="password" name="pass" class="form-control" placeholder="Enter your Password" autocomplete="off" required="">                                    <span> <p class="error">
                                          <?php   if(isset($error_msg['pass']))
                                                 echo $error_msg['pass'];
                                          ?>
                                    </p> </span>
                                  </div>
                                  <div class="hk">
                                    <input type="password" name="confirmpass" class="form-control" placeholder="Enter your confirm password" autocomplete="off" required="">
                                    <span> <p class="error">
                                          <?php   if(isset($error_msg['confirmpass']))
                                                 echo $error_msg['confirmpass'];
                                          ?>
                                    </p> </span>
                                  </div>
                                      <div class="hk">
                                        <center><button type="Submit" name="change_user" class="btn btn-blue block">CHANGE</button></center>
                                      </div>
                                    </form>
                              </div> <!-- member-from-wrap -->
                      </div> <!-- member-col-inner -->
                        </div><!-- member-overlay -->
                       </div> <!-- member-col-->
                      </div><!-- col-sm--->

                      <div class="col-sm-6 col-sm-pull-6 p-0">
                         <div class="member-col member-right">
                            <div class="member-col-inner">


                             </div><!--/.member-col-inner-->
                          </div><!--/member-col-wrap-->
                        </div><!--/.col-md-6-->
              </div> <!-- row m-0-->
           </div> <!-- page-warp member-page -->

       </div> <!-- site-wrapper -->

     <script src="../js/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
   </body>
 </html>
