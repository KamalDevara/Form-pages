<?php
   session_start();
   require_once '../config/connect.php';
    if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
            header('location: index.php?');
    }
    else{
          $answer="";
          $count = 0;
          $email = $_SESSION['email'];
          if(isset($_POST['seq_user'])){
             $question = mysqli_real_escape_string($conn,$_POST['secQue']);
             $answer = mysqli_real_escape_string($conn,$_POST['secAne']);
              if(empty($question)){
                $error_msg['secQue'] ="** please select any question";
                $count++;
              }
              if(empty($answer)){
                $error_msg['secAne']="** please fill the Answer";
                $count++;
              }
              if($count == 0){
                $count = 0;
                $answer= md5($answer);
                $query = "SELECT * FROM register WHERE Email = '$email' AND Question ='$question'";
                $query1 = "SELECT * FROM register WHERE Email = '$email' AND Answer ='$answer'";
                $result = mysqli_query($conn,$query);
                $result1 = mysqli_query($conn,$query1);
                $row =mysqli_fetch_array($result);
                $row1 =mysqli_fetch_array($result1);
                    if($row['Question'] !== $question){
                       $error_msg['secQue']="** wrong question";
                       $count++;
                    }
                    if($row['Question'] === $question){
                      $error_msg['secQue']="** correct question , please select that question again";
                    }
                    if($row['Answer'] !== $answer){
                      $error_msg['secAne']="** wrong answer";
                      $count++;
                    }
                    if($count == 0){
                       $_SESSION['email'] = $email;
                       $_SESSION['name'] =$row['Name'];
                       $_SESSION['id'] = $row['reg_id'];
                       header('location: changepassword.php?');
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
                                       <a href="security.php?" style="text-decoration: none;"><h2 class="text-center">Security Question</h2></a>
                                       <form action="security.php" method='POST'>
                                        <div class="error4" >  <p> Username :- <?php
                                               if(isset($_SESSION['name'])){
                                                  echo $_SESSION['name'];
                                               }
                                             ?></p></div>
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
                                       <input type="text" name="secAne" class="form-control" value="" placeholder="Enter your Security Answer" autocomplete="off" required="">
                                       <span> <p class="error">
                                             <?php   if(isset($error_msg['secAne']))
                                                    echo $error_msg['secAne'];
                                             ?>
                                       </p> </span>
                                     </div>
                                     <!-- row -->
                                      <div class="hk">
                                        <center><button type="Submit" name="seq_user" class="btn btn-blue block" href="login.php">SUBMIT</button></center>
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
