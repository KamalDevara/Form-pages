<?php
session_start();
require_once '../config/connect.php';
   if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
     header('location: index.php?');
   }
else{
   session_destroy();
   header('location: index.php?');
}
 ?>
