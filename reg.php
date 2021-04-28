<?php

require_once "config.php";
 

$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
       
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = trim($_POST["username"]);
            
            
            if(mysqli_stmt_execute($stmt)){
               
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            
            mysqli_stmt_close($stmt);
        }
    }
    
   
   $upcase = "/(?=.*?[A-Z])/";
   $locase = "/(?=.*?[a-z])/";
   $specchar = "/(?=.*?[#?!@$%^&*-])/";
   $num = "/(?=.*?[0-9])/";
   $mail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

    // password validation
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";        
    } 
    elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have atleast 8 characters.";         
     }
    elseif(!preg_match($specchar,$_POST['password'])){
        $password_err = "Password must contain atleast one(1) special characters.";
    }
    elseif(!preg_match($num,$_POST['password'])){
        $password_err = "Password must contain atleast one(1) number.";
    }
    elseif(!preg_match($locase,$_POST['password'])){
        $password_err = "Password must contain atleast one(1) lowercase.";
    }
    elseif(!preg_match($upcase,$_POST['password'])){
        $password_err = "Password must contain atleast one(1) uppercase.";
    }
    else{
        $password = trim($_POST["password"]);
    }

    //confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    //email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";     
    }elseif(!preg_match($mail,$_POST['email'])){
        $email_err = "Please enter valid email";
    }else{
        $email = trim($_POST['email']);
    }

    
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
        
        
        $sql = "INSERT INTO users (username, password,email) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);
            
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: loginpage.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style type="text/css">
        label{ font-family: Palatino Linotype; font-size: 15pt; }
        h1{ font-family: Palatino Linotype; font-size: 30pt; }
        input{ font-family: Palatino Linotype; 
            font-size: 14pt;
            border:2px solid black; 
            border-radius: 5px;
        }
       .login { 
                background-color: #cccccc; 
                box-shadow: 0 0 40px 0 rgba(0, 0, 0, 0.8); 
                width: 500px; 
                padding: 20px;
                border-radius: 30px;
                position: absolute;
                top: 80px;
                left: 400px;
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
<body background="img/signupbg.png">
    <div class="login">
        <center>
        <img src="img/logoblack.png">
        <h1>Registration Form</h1>
        <form  method="post">
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter username"> </br>
            </br>   
                <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter e-mail address"> </br>
            </br> 
                <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter password"></br>
            </br>
                <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" placeholder="Re-type password"> </br>
            </br>
                <input type="submit" value=" Register ">
            <br/>
            <p>Already have an account? <a href="loginpage.php">Login</a>.</p>
        </center> 
        </form>  
    </div>
    </body>
    </html>