<?php 

include_once "../conn.php"; 




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['user_name'];
    $email  = $_POST['user_email']; 
    $password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);
    $user_role = 1;
    
    $stmt = $conn->prepare("INSERT INTO user(user_name,user_email,user_password,user_role) 
                            VALUES(?,?,?,?)" );
    $stmt->bind_param("sssi",$username,$email,$password,$user_role);
    if($stmt->execute()){
        $msg = "User Account Created succesfully ";
    header("location:../register.php?msg=$msg");    
    }

    echo $password;

}
?>