<?php
   session_start();
   require_once '../config/connect.php';
   $count="";
   $email="";
   if(isset($_POST['log_user']))
  {
    if(isset($_POST['email'])){
     $email = mysqli_real_escape_string($conn,$_POST['email']);}
     if(isset($_POST['password'])){
     $password = mysqli_real_escape_string($conn,$_POST['password']);}
        if(empty($email))
        {
          $error_msg['email']="please fill the email id or name";
          $count++;
        }
        if(empty($password)){
          $error_msg['password']="please fill the password";
          $count++;
        }
        if($count == 0){
          $count = 0;
          $count1 =0;
          $password3 = md5($password);
          $query = "SELECT * FROM register WHERE Email='$email'";
          $query1 ="SELECT * FROM register WhERE password='$password3'";
          $result = mysqli_query($conn,$query);
          $result1 = mysqli_query($conn,$query1);
          $row =mysqli_fetch_array($result);
          $row1 =mysqli_fetch_array($result1);
                if(strtolower($row['Email']) !== strtolower($email) ){
                  if ($row['password'] !== $password3) {
                    $count1++;
                  }
                }
                if(strtolower($row['Email'] === strtolower($email))){
                if($row1['password'] !== $password3 ){
                  $error_msg['password'] ="** wrong password";
                  $count++;
                }
              }
                if($count == 0 && $count1 == 0){
                   $query ="SELECT * FROM  register WHERE email ='$email'";
                   $sql = mysqli_query($conn,$query);
                   $row =mysqli_fetch_array($sql);
                   if($row['userStatus'] == 1){
                       /* echo '<script src="../js/jquery.min.js"></script>
                           <script src="../js/.min.js"></script>
                            <script text="type/javascript">
                             alert("We`re Sorry! This user is disabled! Please contact Admin incharge");
                             </script>'; */
                             echo '
                                   <script type="text/javascript" src="../js/jquery.min.js"></script>
                                   <link rel="stylesheet" href="../css/sweetalert.css">
                                   <script src="../js/sweetalert.min.js"></script>
                                    <script>
                                    $( document ).ready(function() {
                                  swal({
                                       title: "We`re Sorry!",
                                       text: "This user is disabled! Please contact Courser Incharge by keep message",
                                       type: "error",
                                       }, function(isConfirm) {
                                          document.location.href="index.php?"
                                       });
                                     });
                                </script>';
                   }
                   else {
                      $_SESSION['email'] =$email;
                      $_SESSION['name'] =$row['Name'];
                      $_SESSION['id'] = $row['reg_id'];
                      header('location: ../Courser/index.php?');
                   }
             }
            elseif ($count1 != 0) {
              echo '
                    <script type="text/javascript" src="../js/jquery.min.js"></script>
                    <link rel="stylesheet" href="../css/sweetalert.css">
                    <script src="../js/sweetalert.min.js"></script>
                     <script>
                     $( document ).ready(function() {
                   swal({
                        title: "We`re Sorry!",
                        text: "You not registration or wrong email id",
                        type: "error",
                        }, function(isConfirm) {
                           document.location.href="index.php?"
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
     <title>Coursera &nbsp| &nbspLogin </title>

     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/loginpage.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/viewport.css">
     <script src="../js/res.js"></script>
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
                                       <a href="login.php" style="text-decoration: none;"><h2 class="text-center">Login</h2></a>
                                    <form action="index.php" method="post">
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
                                    <input type="password" id="loginpass" name="password" class="form-control" placeholder="Enter your password" autocomplete="off" required=" "/>
                                    <span> <p class="error">
                                          <?php   if(isset($error_msg['password'])){
                                                 echo $error_msg['password'];}
                                          ?>
                                    </p> </span>
                                  </div>
                                    <div class="row hk">
                                          <!-- keep on login -->
                                        <div class="checkbox rem">
                                        <div class="col-sm-6">
                                           <label> <input type="checkbox" name="remember">Remember me</label>
                                        </div>
                                      </div>
                                          <!-- forget password -->
                                          <div class="col-sm-6 ">
                                                <a href="forgot.php?" ><label class="for">Forgot password ?</label> </a>
                                          </div>
                                    </div> <!-- row -->
                                         <center><button type="submit" name="log_user" class="btn btn-blue block">LOGIN</button></center>
                                     </form>
                                    <span class="member-or">OR</span>
                                        <a href="register.php?" style="text-decoration: none;"><h4 class="text-center h2s">Sign Up</h4></a>
                                            <p class="p2">By signing up to create an account I accept Coursera's Terms of Use and Privacy Policy.</p>
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
