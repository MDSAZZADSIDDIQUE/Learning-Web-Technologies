<?php
if (!isset($_COOKIE['status'])) {
    header('lcoation: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <h1>Welcome,</h1>
    <?php
    ?>
    <a href="profile.php">Profile</a>
    <a href="change_password.php">Change Password</a>
    <a href="view_users.php">View Users</a>
    <a href="../controllers/php/logout.php">Logout</a>
</fieldset>
</body>
</html>
