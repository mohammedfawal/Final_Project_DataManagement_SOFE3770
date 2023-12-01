<?php

if($_SERVER['REQUEST_METHOD'] == "post"){
    if(isset($_POST['fname']) && isset($_POST['lname'])  && isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['psswrd'])){
         
    }
}

/*  include("connection.php");

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['psswrd'];

     if(!empty( $uname)&& !empty( $psswrd) ){

      $query = "insert into customer_info (USER_NAME,EMAIL, PASSWORD) values ('$uname', '$email','$psswrd')";

     mysqli_query($connection,$query);


    die;

    }
    
     else{
         echo "Please enter valid information!";
     }

    }
    */

header("Location: thanks.html");

?>