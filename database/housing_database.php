<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '1234');

function db_connect($dbname, $tableName) {
    try {
  
        $pdo = new PDO("mysql:host=" . DBHOST, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
        echo "database '$dbname' Already exists or created successfully<br>";

     
        $pdo->exec("USE $dbname");

     
        $sql = "CREATE TABLE IF NOT EXISTS $tableName (
            id INT AUTO_INCREMENT PRIMARY KEY,
            address VARCHAR(100) NOT NULL,
            type VARCHAR(10) NOT NULL,
            area INT NOT NULL,
            price INT NOT NULL,
            email VARCHAR(100) NOT NULL,
            date DATE NOT NULL
        )";
        $pdo->exec($sql);
      

     
        return $pdo;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
/*
// 
$dbname = 'test_database';
$tableName = 'users';

$pdo = db_connect($dbname, $tableName);

if ($pdo) {
    echo "<br>Database connection successful, ready for further operations!";
}
?>*/

//if global $valid true insed
// Handle form submission
function handle_form_submission() {
    global $pdo;
    global $valid;
    global $tableName;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        // Prepare the submitted form data and insert it to the database
        if($valid){
            $sql = "INSERT INTO $tableName (address, type, area, price, email, date) VALUES (:address, :type, :area, :price, :email, :date)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':date', date('Y-m-d'));
            $stmt->bindValue(':address', $_POST['address']);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->bindValue(':type', $_POST['type']);
            $stmt->bindValue(':area', $_POST['area']);
            $stmt->bindValue(':price', $_POST['price']);
            try {
                $stmt->execute();
                echo "Data inserted successfully!";
            } catch (PDOException $e) {
                echo "Error inserting data: " . $e->getMessage();
            }
        }
    }
}

// Get all posts from database and store in $comments
function get_posts() {
    global $pdo;
    global $posts;
    global $tableName;
  
    //TODO
    $sql = "SELECT * FROM $tableName ORDER BY ID DESC";
    $stmt = $pdo->query($sql);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $posts[] = $row;
    }
  }