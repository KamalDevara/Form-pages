<?php
   require '../config/connect.php';

      // register user
           $name = "";
           $email = "";
           $password="";
           $password1= "";
           $question= "";
           $answer="";
           $regid = "";
           $count = 0;
        if(isset($_POST['reg_user']))
        {
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['pass']);
            $password1 = mysqli_real_escape_string($conn,$_POST['confirmpass']);
            if(isset($_POST['secQue'])){
            $question=mysqli_real_escape_string($conn,$_POST['secQue']);}
            $answer = mysqli_real_escape_string($conn,$_POST['secAne']);

          /* form validation for registration*/
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
               if(strlen($password) < 5 || strlen($password) > 10){
                 $error_msg['pass'] ="** password must be only 5 character";
                 $count++;
               }
               if($password != $password1){
                 $error_msg['confirmpass']="** password not matching";
                 $count++;
               }
                 /* check in the  database*/
                  $register_check_query = "SELECT * FROM register where Name = '$name' OR Email = '$email' LIMIT 1";
                  $result = mysqli_query($conn,$register_check_query);
                  $register = mysqli_fetch_assoc($result);

                  if($register){
                    if(preg_match("/^[a-zA-Z -]*$/",($register['Name'] === $name))) {
                      $error_msg['name'] ="** Name already exist";
                      $count++;
                    }
                    if($register['Name'] === $name){
                       $error_msg['name']="** Name already exist";
                       $count++;
                    }
                    if(!preg_match("/^[a-zA-Z0-9]*$/",($register['Email'] === $email)))  {
                      $error_msg['email'] = "** Email already exist";
                      $count++;
                    }
                    if($register['Email'] === $email){
                      $error_msg['email'] = "** Email already exist";
                      $count++;
                    }
                  }
                  if($count == 0){
                      $password3 = md5($password);
                      $answer1 = md5($answer);
                      $query = "INSERT INTO register (Name,Email,password,Question,Answer) values ('$name','$email','$password3','$question','$answer1')";
                      mysqli_query($conn,$query);
                      $_SESSION['email'] = $email;
                      echo '
                            <script type="text/javascript" src="../js/jquery.min.js"></script>
                            <link rel="stylesheet" href="../css/sweetalert.css">
                            <script src="../js/sweetalert.min.js"></script>
                             <script>
                             $( document ).ready(function() {
                           swal({
                                title: "Thank you for Registration",
                                text: "",
                                type: "success",
                                }, function(isConfirm) {
                                   document.location.href="index.php?"
                                });
                              });
                         </script>';
                  }
        }
            // forgot user
             if(isset($_POST['for_user'])){
                 $email = mysqli_real_escape_string($conn,$_POST['email']);

                  if(empty($email)){
                    $error_msg['email'] = "** please fill the email id";
                    $count++;
                  }
                   if($count == 0){
                     $query = "SELECT * FROM register where Email = '$email'";
                     $result = mysqli_query($conn,$query);
                     $row =mysqli_fetch_array($result);
                       if(mysqli_num_rows($result) == 1){
                         $query = "SELECT * FROM register where Email = '$email'";
                         $result = mysqli_query($conn,$query);
                         $row =mysqli_fetch_array($result);
                           $_SESSION['email'] =$email;
                           $_SESSION['name'] =$row['Name'];
                           $_SESSION['id'] =$row['reg_id'];
                           header('location: security.php?');
                       }
                       else{
                              $error_msg['email'] ="** invalid email";
                       }
                   }
             }
?>
