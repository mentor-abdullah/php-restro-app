<?php 
// database setup name || localhost
// setup usernam || localhost username
// setup password || localhost password
// setup database name || localhost database name

/**
 * Establishes a connection to a MySQL database using the provided server, username, password, and database name.
 *
 * @param string $server The hostname or IP address of the MySQL server.
 * @param string $user The username to use for the database connection.
 * @param string $pass The password to use for the database connection.
 * @param string $db The name of the database to connect to.
 * @return mysqli The database connection object, or null if the connection failed.
 */
$server = "localhost"; // Database server address
$user = "root"; // Database username
$pass = ""; // Database password
$db = "db_restro"; // Database name

$conn = mysqli_connect($server,$user,$pass,$db); // Establishes a connection to the database

if(mysqli_connect_error()){ // Checks for connection errors
    die("connection failed".mysqli_connect_error()); // Terminates the script and displays the error message
}
?>