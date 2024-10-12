<?php 
// echo include_once('header.php');
?>

<?php 
include_once('conn.php');

$sql = "SELECT * FROM branches WHERE branch_id=2";

$result = $conn->query($sql);

// $data = $result->fetch_assoc();

//     echo "<pre>";
// print_r($data);






while($branches = $result->fetch_assoc()){
//     echo "<pre>";
// print_r($branches);\
echo $branches['branch_id']."<br>";
echo $branches['branch_name']."<br>";

echo $branches['branch_address']."<br><br>";
}




// $data = $result->fetch_assoc();

// $data = $result->fetch_assoc();

// $data = $result->fetch_assoc();
// $data = $result->fetch_assoc();
// echo "<pre>";
// print_r($data);



?>


<?php 
// include_once('footer.php');

?>