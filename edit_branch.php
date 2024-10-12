<?php  include_once('header.php');?>
<?php 
    include_once("conn.php");
    $edit_id =  $_GET['edit_id'];

    // $sql = "SELECT * FROM branches where branch_id = $edit_id"; 
    
    // $query = mysqli_query($conn,$sql);
    
    // $data = mysqli_fetch_assoc($query);
    // echo "<pre>";
    // print_r($data);

        $stmt = $conn->prepare("SELECT * FROM branches WHERE branch_id= ? ");
        $stmt->bind_param('i',$edit_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $branch_reocrd = $result->fetch_assoc();
    //     echo "<pre>";
    // print_r($branch_reocrd);

?>

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Edit Brnach </strong> 
        </div>
        <div class="card-body card-block">
            <form action="actions/edit_branch_action.php" method="get" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" value="<?php echo $branch_reocrd['branch_id']  ?>"  name="branch_id"  class="form-control">
            <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Branch Title</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="<?php echo $branch_reocrd['branch_name']  ?>" id="text-input" name="branch_name" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Branch Address</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="<?php echo $branch_reocrd['branch_address']  ?>" id="text-input" name="branch_address" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Branch Contact</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="<?php echo $branch_reocrd['branch_contact']  ?>" id="text-input" name="branch_contact" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                </div>
                <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
            </form>
        </div>
       
</div>
</div>

<?php  include_once('footer.php');?>
