<?php
if (!isset($_COOKIE['status'])) {
    header('lcoation: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/registration_styles.css">
    <title>Login</title>
</head>
<body>
<form action="../controllers/php/login_verification.php" method="post">
    <fieldset>
        <legend>LOGIN</legend>
        <label for="user_id">User Id</label>
        <br>
        <input type="text" name="userId" id="user_id">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <input type="checkbox" name="rememberMe" id="remember_me">
        <label for="remember_me">Remember me</label>
        <hr>
        <input type="submit" value="Login">
        <a href="registration.php">Register</a>
    </fieldset>
</form>
</body>
</html>