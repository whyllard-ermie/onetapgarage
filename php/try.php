<?php
    require('db_conn.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $lastname = stripslashes($_REQUEST['lastname']);
        //escapes special characters in a string
        $lastname = mysqli_real_escape_string($con, $lastname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password1 = stripslashes($_REQUEST['password1']);
        $password1 = mysqli_real_escape_string($con, $password1);
        $password2 = stripslashes($_REQUEST['password2']);
        $password2 = mysqli_real_escape_string($con, $password2);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (name ,lastname, email ,password1, password2, create_datetime)
                     VALUES ('$name','$lastname', '$email'," . md5($password1) . "," . md5($password2) . "', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='loginmodal.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='SignUpmodal.php'>registration</a> again.</p>
                  </div>";
        }
    } else 
?>