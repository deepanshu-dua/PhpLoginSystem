


<?php 

$servername = "localhost";
$username = "deepu";
$password = "";
$database = "users";

$conn = mysqli_connect($servername , $username , $password , $database);

if (!$conn) {
    die("sorry we failed" . mysqli_connect_error());

    
}
?>