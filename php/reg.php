
<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'db.php';   
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"]; 
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
            
    
    $sql = "Select * from users where email='$email'";
    
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); 
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password== $cpassword) && $exists==false) {
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` ( `fname`,`lname` ,`email`,
                `password`, `date`) VALUES ('$fname','$lname' ,'$email',
                '$hash', current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                header("location: successful.php");
                
            }
        } 
        else { 
            header("location: error1.php");
        }      
    }// end if 
    
   if($num>0) 
   {
    header("location: error2.php");
   } 
    
}//end if   
    
?>
    

    