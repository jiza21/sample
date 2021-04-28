<?php

session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: web1.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }



    
    if(empty($username_err) && empty($password_err)){
        
         if(empty($username_err) && empty($password_err)){ 
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){ 
            mysqli_stmt_bind_param($stmt, "s", $param_username);
             
            $param_username = $username;
             
            if(mysqli_stmt_execute($stmt)){ 
                mysqli_stmt_store_result($stmt);
                 
                if(mysqli_stmt_num_rows($stmt) == 1){ 
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){

                            $_SESSION["verify"] = true;
                            $_SESSION["code_access"] = true;

                            $_SESSION["id"] = $id;
                            header("location: web1.php");

                        } else{ 
                             
                            echo "<script>alert('PASSWORD ERROR');</script>";
                        } 
                    }
                } else{ 
                    echo "<script>alert('USERNAME IS NOT EXIST');</script>";
                }
            } else{
                echo "<script> alert('Oops! Something went wrong. Please try again later.'); </script>";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<center>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
        label{ font-family: Palatino Linotype; font-size: 15pt; }
        h1{ font-family: Palatino Linotype; font-size: 35pt; }
        input{ font-family: Palatino Linotype; 
            font-size: 14pt;
            border:2px solid black; 
            border-radius: 5px;
        }
       .login { 
                background-color: #cccccc; 
                box-shadow: 0 0 40px 0 rgba(0, 0, 0, 0.8); 
                width: 400px; 
                padding: 20px;
                border-radius: 30px;
                position: absolute;
                top: 150px;
                left: 450px;
                border: 2px solid black;
                
                 }
        input[type=submit]{
            background-color: #f8f8ff; 
            font-size: 14pt; 
            padding: 5px 10px;
            border-radius: 10px;
        }
        img{
            height: 70px;
            width: 70px;
        }
        p{
            font-family: Palatino Linotype; 
            font-size: 12pt;
        }
    </style>
</head>  
<body background="img/loginbg.png">
    <div class="login">   
        <img src="img/logoblack.png">
        </br>
        </br>
        <form method="post">
                <input type="text" name="username" id="username" placeholder="Enter Username"></br>
            </br>  
                <input type="password" name="password" id="password" placeholder="Enter Password"></br>
             
            </br>
                <input type="submit" name="login" value=" Login ">
                <p>Create an account. <a href="reg.php">Sign up now</a>.</p>
        </form> 
    </div>
</body>
</html>