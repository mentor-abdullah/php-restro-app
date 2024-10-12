<?php
/**
 * Deletes a branch record from the database based on the provided branch_id.
 *
 * This action is typically triggered by a user request to delete a specific branch.
 * The branch_id is retrieved from the query string, and a SQL DELETE statement is
 * prepared and executed to remove the corresponding record from the branches table.
 * If the deletion is successful, the user is redirected to the view_branch.php page
 * with a success message.
 *
 * @param int $branch_id The ID of the branch to be deleted.
 */

$branch_id = $_GET['delete_id'];

include_once('../conn.php');

// Prepares and executes a SQL DELETE statement to remove a branch record identified by the branch_id.
$stmt = $conn->prepare("DELETE FROM branches where 	branch_id= $branch_id");
$stmt->execute();

// Checks if the statement execution was successful and redirects to the view_branch page with a success message.
if ($stmt) {
    $msg = "record deleted";
    header('Location: ../view_branch.php?msg=' . urlencode($msg));
    exit(); // It's a good practice to call exit() after a header redirect to stop further script execution.
}


?>