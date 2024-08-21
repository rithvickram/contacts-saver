<?php
$server = "localhost";
$username = "root";
$password = "Tommy@whiteranger5";
$database = "id21780565_contacts_saver";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//    echo "success";
// }
//else{
    die("Error". mysqli_connect_error());
}

?>