<?php

$host = "localhost";
$user = "admin";
$password = "mugambi";
$db = "jkuat-student-portal";

$conn = mysqli_connect($host,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}
// }else{
//     die("Connection Successfull");
// }


//$conn = new MySQLi($host, $user, $password, $db_name);
// if ($conn->connect_error) {
//     die('Database connection error');
// };