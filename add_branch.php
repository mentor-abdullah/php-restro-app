<?php include_once 'header.php';?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add branch</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Add branch</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <?php if(isset($_GET['msg'])){ ?>

                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                        <span class="badge badge-pill badge-success">Success</span>
                                        <?php echo $_GET['msg'];?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                    </div>


                <?php 
            } 
                    ?>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Branch Details</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="actions/add_branch_action.php" method="get" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Branch name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="branc_name" placeholder="Enter Branch name" class="form-control"><small class="form-text text-muted">Enter branch name</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Branch Address</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="branch_address" placeholder="Enter branch address" class="form-control"><small class="form-text text-muted">Enter branch Address</small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Branch Contact</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="branch_contact" placeholder="Enter Branch Contact" class="form-control"><small class="form-text text-muted">Enter branch Contact</small></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </form>
                    </div>
                </div>
            </div>

<?php include_once 'footer.php';?>
