<?php
include_once('../conn.php');

// Sanitize and validate input
$menu_name = htmlspecialchars(trim($_GET['menu_name']));
$menu_desc = htmlspecialchars(trim($_GET['menu_desc']));
$menu_cat = htmlspecialchars(trim($_GET['menu_cat']));
 
$stmt =  $conn->prepare("INSERT INTO menu(menu_name,menu_desc,menu_catg) VALUES(?,?,?)");
$stmt->bind_param("sss",$menu_name,$menu_desc,$menu_cat);
$stmt->execute();

if($stmt){
    $msg = "record inserted";
    header('location:../add_menu.php?msg='.$msg);
}


 ?>