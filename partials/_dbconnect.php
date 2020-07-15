<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername , $username , $password , $database);

if (!$conn) {
//     echo "Connected to the Database successfully";
// }
// else{
    die("Failed to connect to the database due to this error-->". mysqli_connect_error());
}

?>