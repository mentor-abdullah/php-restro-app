<?php 

include_once('header.php');
?>
<?php 
 if(isset($_GET['msg'])){

?>
<div class="alert alert-primary" role="alert">
    <strong><?php  echo $_GET['msg'];?></strong> <a href="#" class="alert-link"></a>
</div>
<?php 
}
include_once('footer.php');
?>