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
    <form action="">
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
            <label for="current_password">Current Password</label>
            <input type="password" name="currentPassword" id="current_password">
            <label for="new_password">New Password</label>
            <input type="password" name="newPassword" id="new_password">
            <label for="retype_new_password">Retype New Password</label>
            <input type="password" name="retypeNewsPassword" id="retype_new_password">
            <input type="submit" value="Change">
            <?php
                echo "<a href='{$_COOKIE['userType']}_panel.php'>Home</a>"
                ?>
        </fieldset>
    </form>
</body>
</html>