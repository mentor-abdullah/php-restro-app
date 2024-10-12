<?php 
include_once('header.php'); // Includes the header file for the page layout
/**
 * Displays a table of branch records, including the branch ID, name, address, and contact information.
 * The table also includes a "Delete" button for each branch, which allows the user to delete the branch.
 * If a message is passed via a GET request, it is displayed in a success alert at the top of the page.
 */
?>
 

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View branch</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">View branch</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="card">
        <?php if(isset($_GET['msg'])){ // Checks if a message is passed via GET request ?>
 
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <span class="badge badge-pill badge-success">Success</span>
                        <?php echo $_GET['msg']; // Displays the message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                           
                    </div>
 <!-- write button code for update reocrd -->
  <
             </div>
 
 
<?php 
} 
    ?>
 
                            <div class="card-header">
                                <strong class="card-title">  Branches</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Branch Name</th>
                                            <th scope="col">Branch Addres</th>
                                            <th scope="col">Branch Contact</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                        include_once('conn.php'); // Includes the database connection file
 
                                        $sql = "SELECT * FROM branches ORDER BY branch_id DESC"; // SQL query to select all branches
                                        $result = $conn->query($sql); // Executes the query
 
                                        while($branches = $result->fetch_assoc()){ // Iterates through each branch record ?>
                                        <tr>
                                            <th><?php echo $branches['branch_id']?></th>
                                            <td><?php echo $branches['branch_name']?></td>
                                            <td><?php echo $branches['branch_address']?></td>
                                            <td><?php echo $branches['branch_contact']?></td>
                                            <td>
                                                <!--  write button for update reocrd  -->
                                                <button type="button" class="btn btn-danger"><a onclick="return confirm('are you sure you want to delete')" style="color:white;" href="actions/delete_branch_action.php?delete_id=<?php echo $branches['branch_id'] ?>">Delete</a></button>
                                                <button type="button" class="btn btn-info"><a onclick="return confirm('are you sure you want to update')" style="color:white;" href="edit_branch.php?edit_id=<?php echo $branches['branch_id'] ?>">Update</a></button>
                
                                            </td>

                                            </tr>
                                    </tbody>
 
 
                                       <?php } ?>
                                </table>
 
                            </div>
                        </div>
<?php 
include_once('footer.php'); // Includes the footer file for the page layout
 
?>