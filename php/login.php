<?php

    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','onetapgarage') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
          if(password_verify($_POST['password'],$row['password']))
          {
            $_SESSION["id"] = $row['id'];
            $_SESSION["email"] = $row['email'];
          }
          else {
            header("Location:error3.php");
          }
       
        } else {
          header("Location:error3.php");
        }
    }
    if(isset($_SESSION["email"])) {

    header("Location:../customer/main.php");
    }
    
?>
