<?php 
session_start();

include_once("../conn.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $stmt = $conn->prepare("SELECT user_email, user_password from user where user_email = ?");

    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->fetch();
    // print_r($stmt);
    $stmt->store_result();

    print_r($stmt);

    if($stmt->num_rows > 0){
     
        $stmt->bind_result($email,$hashed_password);
        $stmt->fetch();
        if(password_verify($password,$hashed_password)){
            
            $_SESSION['user_email'] = $email;

            $msg = "Login Successfully !! ";
            header("location:../index.php?msg=$msg");    
        }else{
            echo "Invalid password";
        }
        //   print_r($stmt);
    }else{
        echo "No user found With that username";
    }

}


?>