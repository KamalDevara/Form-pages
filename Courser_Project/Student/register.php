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
     <title>Coursera &nbsp| Registration </title>

     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/loginpage.css" rel="stylesheet">

   </head>
    <body>
       <div class="site-wrapper">

           <div class="page-wrap member-page">
               <div class="row m-0">
                  <div class="col-sm-6 col-sm-push-6 p-0">
                      <div class="member-col1 member-left">
                         <div class="member-overlay">
                      <div class="member-col-inner">
                              <div class="member-form-wrap">

                                       <h1 class="text-center">Welcome to <a href="../index.php?" style="text-decoration: none;"><b>Coursera</b></a></h1>
                                       <a href="register.php?" style="text-decoration: none;"><h2 class="text-center">Register</h2></a>
                                       <form action="register.php" method='POST'>
                                         <!--name -->
                                         <div class="hk">
                                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your Name" autocomplete="off" required=""/>
                                      <span> <p class="error">
                                            <?php   if(isset($error_msg['name']))
                                                   echo $error_msg['name'];
                                            ?>
                                      </p> </span>
                                    </div>
                                    <!-- email -->
                                  <div class="hk">
                                    <input type="email" name="email" class="form-control"value="<?php echo $email; ?>" placeholder="Enter your Email" autocomplete="off" required=""/>
                                    <span> <p class="error">
                                          <?php   if(isset($error_msg['email']))
                                                 echo $error_msg['email'];
                                          ?>
                                    </p> </span>
                                  </div>
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
                                       <select class="form-control1" name="secQue" required="">
                                            <option disabled selected value>Enter your Security Question</option>
                                            <option>In what city or town does your nearest sibling live?</option>
                                             <option>What is your pet’s name?</option>
                                             <option>In what town was your first job?</option>
                                             <option>In what year was your father born?</option>
                                              <option>What is your favorite movie?</option>
                                              <option>What is your favorite color?</option>
                                          </select>
                                       <span> <p class="error1">
                                             <?php   if(isset($error_msg['secQue']))
                                                    echo $error_msg['secQue'];
                                             ?>
                                       </p> </span>
                                     </div>

                                       <div class="hk">
                                       <input type="text" name="secAne" class="form-control" value="<?php echo $answer; ?>" placeholder="Enter your Security Answer" autocomplete="off" required="">
                                       <span> <p class="error">
                                             <?php   if(isset($error_msg['secAne']))
                                                    echo $error_msg['secAne'];
                                             ?>
                                       </p> </span>
                                     </div>
                                    <div class="row hk">
                                          <!-- keep on login -->
                                        <div class="checkbox rem">
                                        <div class="col-sm-12">
                                           <label> <input type="checkbox" name="check_name" required="">I agree Teams of Service and Privacy Policy</label>
                                        </div>
                                      </div>

                                    </div> <!-- row -->
                                      <div class="hk">
                                        <center><button type="Submit" name="reg_user" class="btn btn-blue block" href="login.php">SUBMIT</button></center>
                                      </div>
                                    </form>
                                    <span class="member-or">OR</span>
                                        <p class="lead text-center">Already a member?</p>
                                        <a href="index.php?" style="text-decoration: none;"><h4 class="text-center h2s">Log In</h4></a>
                              </div> <!-- member-from-wrap -->
                      </div> <!-- member-col-inner -->
                        </div><!-- member-overlay -->
                       </div> <!-- member-col-->
                      </div><!-- col-sm--->

                      <div class="col-sm-6 col-sm-pull-6 p-0">
                         <div class="member-col1 member-right">
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
