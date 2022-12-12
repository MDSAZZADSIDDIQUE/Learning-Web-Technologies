<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/registration_styles.css">
    <title>Registration</title>
</head>
<body>
    <form action="../controllers/php/registration_validation.php" method="post">
        <fieldset>
            <legend>REGISTRATION</legend>
            <label for="id">Id</label>
            <br>
            <input type="text" name="id" id="id">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <label for="confirm_password">Confirm Password</label>
            <br>
            <input type="password" name="confirmPassword" id="confirm_password">
            <br>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" id="email">
            <br>
            <label for="user_type">User Type <i>[User/Admin]</i></label>
            <br>
            <select name="userType" id="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <hr>
            <input type="submit" value="Register">
            <a href="login.php">Login</a>
        </fieldset>
    </form>
</body>
</html>