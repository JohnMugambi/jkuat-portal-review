<!-- REedirect to login page if user is not logged in -->

<?php
include('./config.php');

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
    header("Location: $base_url student/index.php ");
    exit();
}else{
    echo "user is not logged in";
    header("Location: $base_url login.php ");
}