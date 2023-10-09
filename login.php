<?php
error_reporting(0);
session_start();


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
require_once "config.php";
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
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
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                          
                            if($username=='admin'){
                                echo '
			                    <script type = "text/javascript">
				                    alert("Admin Logged In Successfully");
				                    window.location = "admin.php";
			                    </script>
		                        ';
                            }else{
                                echo '
			                    <script type = "text/javascript">
				                    alert("Client Logged In Successfully");
				                    window.location = "index.php";
			                    </script>
		                        ';
                            }
                        } else{
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000
        }

        .container {
            background: rgb(15, 15, 15);
            width: 350px;
            height: 350px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            color: #fff;
            padding: 2em
        }

        .heading {
            font-size: 2em;
            margin-bottom: 0.5em
        }

        .box {
            margin: 0.2em 0
        }

        .container .box p {
            color: rgba(255, 255, 255, 0.701)
        }

        .container .box div {
            position: relative;
            width: 100%;
            height: 40px;
            margin: 0.2em 0
        }

        .container .box input {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(19, 19, 19);
            color: #fff;
            border: none;
            outline: none;
            padding-left: 0.8em;
            border-radius: 10px;
            transition: all 0.5s
        }

        .container .box input:focus::placeholder {
            color: #fff
        }

        .container .box div::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 102%;
            height: 105%;
            border-radius: 10px;
            background: linear-gradient(to right, #ff416c, #ff4b2b)
        }

        .loginBtn {
            width: 102%;
            height: 40px;
            border-radius: 10px;
            margin: 0.2em 0;
            transform: translate(-1%);
            cursor: pointer;
            color: #fff;
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            transition: all 0.5s
        }

        .loginBtn:hover {
            transform: translate(-1%, 5%);
            box-shadow: 0 0 10px #ff416d65
        }

        .text {
            font-size: 0.8em;
            margin-top: 0.5em;
            text-align: center;
            color: rgba(255, 255, 255, 0.625)
        }

        .text a {
            color: rgba(255, 255, 255, 0.911)
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2 class="text-light">Login</h2>
        <p class="text-light">Please fill in your credentials to login.</p>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="box form-group">
                    <p>Username</p>
                    <div> <input type="text" name="username"
                            class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $username; ?>" autocomplete="off" placeholder="Enter your username">
                    </div>
                    <span class="invalid-feedback">
                        <?php echo $username_err; ?>
                    </span>
                </div><br>
                <div class="box form-group">
                    <p>Password</p>
                    <div> <input type="password" name="password"
                            class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                            autocomplete="off" placeholder="Enter your password"> </div>
                    <span class="invalid-feedback">
                        <?php echo $password_err; ?>
                    </span>
                </div><br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary loginBtn" value="Login">
                </div>
                <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </div>
        </form>
    </div>
</body>

</html>