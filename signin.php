<?php
session_start();
include("conn.php");

$error_message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM login WHERE uname = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            // Successful login
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            // Login failed
            $error_message = "Invalid username or password";
        }
    } else {
        $error_message = "Please fill in both fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Haseeb Ansari</title>
    <link rel="stylesheet" href="css/form.css">
    <style>
        .error {
            color: red;
            font-size: 15px;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <p>Login</p>
        </div>
        <form onsubmit="return validateLoginForm()" method="post">
            <div class="user_details">
                <div class="input_box" style="width: 100%;">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username" name="uname">
                    <div class="error" id="uname_error"></div>
                </div>
                <div class="input_box" style="width: 100%;">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" placeholder="Enter your password" name="password">
                    <div class="error" id="password_error"></div>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Login" name="login_submit">
            </div>
            <span style="text-align: center;width: 100%;display: flex;justify-content: center;align-items: center;padding-bottom: 20px;">
                Don't have an account? <a href="signup.php" style="text-decoration: none;"> Register Now!</a>
            </span>
            <?php if (!empty($error_message)) { ?>
                <div class="error"><?= $error_message ?></div>
            <?php } ?>
        </form>
    </div>
    <script src="js/validate.js"></script>
</body>
</html>
