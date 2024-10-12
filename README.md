# PHP Restro App
Project Overview
PHP Restro App is a simple restaurant management application built with PHP. It provides basic CRUD (Create, Read, Update, Delete) functionality to manage restaurant data efficiently. This project is designed for beginners looking to understand core PHP with MySQL and how to work with XAMPP and phpMyAdmin.

# Features:
Add, update, delete, and view restaurant details.
User-friendly interface.
Built with vanilla PHP and MySQL.
Prerequisites
Before setting up the project, ensure you have the following installed on your machine:

XAMPP (or any other local server running Apache and MySQL)
Basic knowledge of PHP and MySQL.
phpMyAdmin (usually included with XAMPP).
# Installation
1. Clone the Repository
First, navigate to your htdocs folder within XAMPP (typically C:/xampp/htdocs/ on Windows or /opt/lampp/htdocs/ on Linux) and clone the project:

Copy code
cd /path/to/xampp/htdocs/
git clone https://github.com/yourusername/php-restro-app.git


# Create the Database
Open phpMyAdmin via your XAMPP control panel (http://localhost/phpmyadmin).
Create a new database named db_restro:

CREATE DATABASE db_restro;


# Import Database
Inside phpMyAdmin, import the database schema provided in the db folder of the project.
You can do this by navigating to the Import tab in phpMyAdmin and uploading the .sql file.


# Configure Database Connection
Open the project folder and locate the db.php file inside the config directory.
Update the database credentials (if needed):


```php
<?php
$servername = "localhost";
$username = "root"; // Default XAMPP user
$password = ""; // Leave empty for default
$dbname = "db_restro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>
```

# Start XAMPP
Open your XAMPP Control Panel and start both Apache and MySQL.
# Access the Application

Open your web browser and go to:

http://localhost/php-restro-app/



# Usage
Once the setup is complete, you will be able to perform the following actions:

Add new restaurants: Use the form to input restaurant details.
View existing restaurants: Browse the list of added restaurants.
Edit details: Modify the information of any existing restaurant.
Delete entries: Remove a restaurant from the list.
Contributing
Contributions are welcome! Feel free to submit a pull request or create an issue for suggestions and improvements.

# License
This project is open-source and available under the MIT License.

# Author
Mentor Abdullah