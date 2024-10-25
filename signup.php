<?php
    include("conn.php");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<style>
    .error, #name_error {
        color: red;
        font-size: 15px;
        margin-top: 5px;
    }
</style>
<body>
    <div class="container">
        <div class="title">
            <p>Registration</p>
        </div>
        <form onsubmit="return validateForm()" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" placeholder="Enter your name" name="fname">
                    <div class="error" id="name_error"></div>
                </div>
                <div class="input_box">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username" name="uname">
                    <div class="error" id="uname_error"></div>
                </div>
                <div class="input_box">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" name="email">
                    <div class="error" id="email_error"></div>
                </div>
                <div class="input_box">
                    <label for="phone">Phone Number</label>
                    <input type="number" id="phone" placeholder="Enter your number" name="number">
                    <div class="error" id="number_error"></div>
                </div>
                <div class="input_box">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" placeholder="Enter your password" name="password">
                    <div class="error" id="password_error"></div>
                </div>
                <div class="input_box">
                    <label for="confirmPass">Confirm Password</label>
                    <input type="password" id="confirmPass" placeholder="Confirm your password" name="cpassword">
                    <div class="error" id="cpassword_error"></div>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Register" name="register_submit">
            </div>
            <span style="text-align: center;width: 100%;display: flex;justify-content: center;align-items: center;padding-bottom: 20px;">Do have an account?<a href="signin.php" style="text-decoration: none;"> Login Now!</a></span>
            <div class="msg" style="text-align: center; padding-bottom: 20px; color: green; display: none;">Registration Successful!</div>
        </form>
        <?php
            if (isset($_POST['register_submit'])) {
                // Get and validate inputs to ensure no fields are blank
                $fname = mysqli_real_escape_string($conn, trim($_POST['fname']));
                $uname = mysqli_real_escape_string($conn, trim($_POST['uname']));
                $email = mysqli_real_escape_string($conn, trim($_POST['email']));
                $number = mysqli_real_escape_string($conn, trim($_POST['number']));
                $password = mysqli_real_escape_string($conn, trim($_POST['password']));

                // Check for empty fields
                if (empty($fname) || empty($uname) || empty($email) || empty($number) || empty($password)) {
                    echo "<div style='color: red; text-align: center;'>All fields are required. Please fill out the form completely.</div>";
                } else {
                    // Insert data into database if all fields are filled
                    $sql = "INSERT INTO login (fname, uname, email, number, password) VALUES ('$fname', '$uname', '$email', '$number', '$password')";

                    if (mysqli_query($conn, $sql)) {
                        echo "<div style='color: green; text-align: center;'>Registration Successful!</div>";
                    } else {
                        echo "<div style='color: red; text-align: center;'>Error: " . mysqli_error($conn) . "</div>";
                    }
                }
            }
        ?>
    </div>
    <script src="js/validate.js"></script>
</body>
</html>
