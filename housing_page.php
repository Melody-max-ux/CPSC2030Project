<?php
// error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'validation/housing_validation.php';
require_once 'database/housing_database.php';
require_once 'functions/housing_functions.php';
// global array of posts, to be fetched from database
$posts = [];

//connect to database: PHP Data object representing Database connection
$dbname = 'studentdb';
$tableName = 'housing';

$pdo = db_connect($dbname, $tableName);
// submit comment to database
handle_form_submission();

// Get comments from database
get_posts();




// include the template to display the page
include 'templates/housing.php';
