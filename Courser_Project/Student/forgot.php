<?php
   session_start();
   require_once '../config/connect.php';
   require 'serverlogin.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

       <!-- Icon for page -->
     <link rel="Icon" href="../images/favicon.png">
     <title>Coursera &nbsp| &nbspForgot </title>

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
                                       <a href="forgot.php?" style="text-decoration: none;"><h2 class="text-center">Forgot password</h2></a>

                                    <form action="forgot.php" method="post">
                                      <div class="hk">
                                    <input type="email" id="loginemail" name="email" value="<?php echo $email;?>" class="form-control" placeholder="Enter your email" autocomplete="off" required=" "/>
                                     <span> <p class="error">
                                          <?php   if(isset($error_msg['email'])){
                                                 echo $error_msg['email'];
                                               }
                                          ?>
                                     </p> </span>
                                  </div>
                                        <div class="hk">
                                        <center><button type="submit"  name="for_user" class="btn btn-blue block">SUBMIT</button></center>
                                      </div>
                                     </form>
                                        <div class="hk">
                                    <span class="member-or">OR</span>
                                          </div>
                                          <a href="index.php?" style="text-decoration: none;"><h1 class="text-center h2s hk">Log In</h1></a>
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
