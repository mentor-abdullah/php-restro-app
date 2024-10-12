<?php 
include_once "../conn.php"; 




if($_SERVER["REQUEST_METHOD"] == "GET"){
    $branch_id = $_GET['branch_id'];
    $brnach_name = $_GET['branch_name']; 
    $brnach_desc = $_GET['branch_address'];
    $brnach_contact = $_GET['branch_contact'];

    $stmt = $conn->prepare("UPDATE branches 
                            SET branch_name= ?,branch_address = ?,branch_contact=? where branch_id=?");
    $stmt->bind_param("sssi",$brnach_name,$brnach_desc,$brnach_contact,$branch_id);
    $stmt->execute();
    $msg = "Branch updated succesfully ";
    header("location:../view_branch.php?msg=$msg");                     

}

// echo $brnach_contact;



?>