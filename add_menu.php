<?php
include_once 'header.php';
?>


<div class="col-lg-6">
    <li> <?php  echo $_GET['msg'];?></li>
    <div class="card">
        <div class="card-header">Add Menu</div>
        <div class="card-body card-block">
            <form action="actions/add_menu_action.php" method="get" class="">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text"  name="menu_name" placeholder="Enter menu name" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                    <textarea name="menu_desc" id="textarea-input" rows="9" placeholder="Menu Description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text"  name="menu_cat" placeholder="Menu catgory" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
                </div>

                <div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm">Submit</button></div>
            </form>
        </div>
    </div>
</div>


<?php
include_once 'footer.php';
?>