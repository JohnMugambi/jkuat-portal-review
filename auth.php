<?php

include_once("./config.php");

$errors = array('email' => '', 'password' => '', 'login_err'=>'');
$email = $password = "";

if(isset($_POST['login'])){


    if(empty(trim($_POST['username']))){
        $errors['username'] = 'A username is required';
    } else{
        $username = trim($_POST['username']);
    }
    //check password
    if(empty(trim($_POST['password']))){
        $errors['password'] = 'A valid password is required';
    } else{
        $password = trim($_POST['password']);
    }


    //check if any errors in the form
    if(array_filter($errors)){
        echo 'errors in the form';
    }else{
        //Select user
        $sql = "SELECT username, password FROM tblusers WHERE username = ? ";

        if($stmt = mysqli_prepare($conn, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;

            //Attempt to execute prepared statement
            if(mysqli_stmt_execute($stmt)){
                //store result
                mysqli_stmt_store_result($stmt);

                //if user exist, verify password
                if(mysqli_stmt_num_rows($stmt) == 1){

                    //bind result variables
                    mysqli_stmt_bind_result($stmt,$username, $hashed_password);

                    if(mysqli_stmt_fetch($stmt)){

                        if($password === $hashed_password){
                            // Password is correct, so start a new session
                            //session_start();
                            echo "Success";
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;                            
                            $_SESSION['message'] = "You are now logged in.";
                            $_SESSION['type']= "success";
                            // Redirect user to welcome page
                            header("location: $base_url student/index.php");
                            exit();

                        }else{
                            echo "someting 1";
                            $errors['login_err']  = "Invalid username or password.";
                            $_SESSION['message'] = $errors['login_err'];
                            $_SESSION['type']= "error";
                            //header("location: login.php");
                        }
                    }else{
                        $errors['login_err']  = "Invalid username or password.";
                        $_SESSION['message'] = $errors['login_err'];
                        $_SESSION['type']= "error";
                        //header("location: login.php");

                        echo "someting 2";


                    }
                }else{
                    $errors['login_err']  = "Invalid username or password.";
                    $_SESSION['message'] = $errors['login_err'];
                    $_SESSION['type']= "error";
                    //header("location: login.php");
                    echo "someting 3";

                }
            }else{
                $errors['login_err']  = "Invalid username or password.";
                $_SESSION['message'] = $errors['login_err'];
                $_SESSION['type']= "error";
                //header("location: login.php");
            echo "tis error";

            }
        }else{
            echo "someting 4";
        }
    }
}

//Register

if(isset($_POST['register'])){
    // check email
    if(empty(trim($_POST['username']))){
        $errors['email'] = 'An email is required';
    } else{
        $username = $_POST['username'];
    }
    //check password
    if(empty(trim($_POST['password']))){
        $errors['email'] = 'A valid password is required';
    } else{
        $password = $_POST['password'];
    }

    //check if any errors in the form
    if(array_filter($errors)){
        echo 'errors in the form';
    }else{

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
      
        $sql = "INSERT INTO tblusers(username, password) VALUES(?,?)";

        if($stmt = $conn->prepare($sql)){

            // Bind variables to the prepared statement as parameters
            $stmt->bind_param('ss', $param_username, $param_password);

            //set parameters
            $param_username = $username;
            $param_password = $password;

            $stmt->execute();
            if(   mysqli_stmt_execute($stmt)){
                //session_start();
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;                            
                $_SESSION['message'] = "You are now logged in.";
                $_SESSION['type']= "success";

                header("Location: $base_url student/index.php");
                exit();
            }else{
                echo 'Something went wrong';
            }

            $stmt->close();
        }else{
            echo "error 3";
        }        
        
        //close connection
        $conn->close();
    }
}
