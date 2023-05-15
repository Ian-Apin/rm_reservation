<?php
// $servername="localhost";
// $dbusername="root";
// $dbpassword="";
// $dbname="rm_reservation";

// $conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

// // Check connection
// if (!$conn){
//     die("Maintenance Mode.");
// }

// session_start();
// include_once ("sql_utilities.php");

ini_set('display_errors','1');
ini_set('display_startup_errors','1');

error_reporting(E_ALL);
// Connect to the database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'rm_reservation';


$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $dbname);


// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//define("LOGGED_IMG_FOLDER","../img");
//define("CONN",$conn);
//define("CURRENCY","Php ");



include_once "sql_utilities.php";
include_once "function.php";
//include_once "icons.php";
session_start();

if(isset($_GET['logout'])){
    session_destroy();
    header("location: ./");
}



?>