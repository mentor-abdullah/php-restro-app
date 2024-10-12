
<?php
/**
 * Adds a new branch record to the 'branches' table in the database.
 *
 * This script retrieves the branch name, address, and contact information from the
 * query parameters, constructs an SQL INSERT statement, and executes it to add a
 * new record to the 'branches' table. If the insert is successful, it redirects
 * the user to the 'view_branch.php' page with a success message. If there is an
 * error, it outputs the error message.
 */
include_once "../conn.php";

$branch_name = $_GET['branc_name'];
$branch_address = $_GET['branch_address'];
$branch_contact = $_GET['branch_contact'];

// Constructs an SQL INSERT statement to add a new branch record into the 'branches' table.
$query = "INSERT INTO branches(branch_name,branch_address,branch_contact)
values('$branch_name','$branch_address','$branch_contact')";

// Executes the SQL query and handles the result.
if ($conn->query($query) === true) {
    
    $msg = "New Branch Created succesfully ";
    header("location:../view_branch.php?msg=$msg");
} else {
    echo "Error" . $conn->error;
}

// add redirect
