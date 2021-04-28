<?php
/** Data source name */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "somsri";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $th) {
    echo "Could not connect Database:" .$th->getMessage();
    exit();
}

?>