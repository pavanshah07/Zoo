<?php
require_once "config.php";
 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
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
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            if(mysqli_stmt_execute($stmt)){
                echo '
                <script type = "text/javascript">
	                alert("New Client Registered Successfully");
				    window.location = "login.php";
			    </script>
		        ';
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
    <title>Sign Up</title>
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
            width: 400px;
            height: 470px;
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
        <h2 class="text-light">Sign Up</h2>
        <p class="text-light">Please fill this form to create an account.</p>
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class=" box form-group">
                    <p>Username</p>
                    <div>
                        <input type="text" name="username"
                            class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $username; ?>" autocomplete="off" placeholder="Enter your username">
                    </div>
                    <span class="invalid-feedback">
                        <?php echo $username_err; ?>
                    </span>
                </div><br>
                <div class="box form-group">
                    <p>Password</p>
                    <div>
                        <input type="password" name="password"
                            class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $password; ?>" autocomplete="off" placeholder="Enter your password">
                    </div>
                    <span class="invalid-feedback">
                        <?php echo $password_err; ?>
                    </span>
                </div><br>
                <div class="box form-group">
                    <p>Confirm Password</p>
                    <div>
                        <input type="password" name="confirm_password"
                            class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $confirm_password; ?>" autocomplete="off"
                            placeholder="Enter your password again">
                    </div>
                    <span class="invalid-feedback">
                        <?php echo $confirm_password_err; ?>
                    </span>
                </div><br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary loginBtn" value="Submit"><br>
                    <input type="reset" class="btn btn-secondary loginBtn" value="Reset">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
    </div>
</body>

</html>