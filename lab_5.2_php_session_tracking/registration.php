<?php
$name = $_POST['name'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

session_start();

if ($password == $confirm_password):
    $_SESSION['status'] = true;
    header('location:home.html');
else:
    $_SESSION['password'] = false;
    echo 'Your password is incorrect';
    header('Location: registration.html');
endif;
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
    <table border="1" cellspacing="0" width="100%">
        <tr height="50px">
            <td style="text-align: right;">
                <a href="home.php">Home</a>
                <p style="display: inline;">|</p>
                <a href="login.html">Login</a>
                <p style="display: inline;">|</p>
                <a href="registration.html">Registration</a>
            </td>
        </tr>
        <tr height="250px">
            <td>
                <form action="registration.php" style="display: inline-block;" >
                    <fieldset >
                        <legend><h1>Registration</h1></legend>
                        <label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="text" id="name" name="name"><hr>
                        <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="email" name="email" id="email">
                        <hr>
                        <label for="user_name">User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="user_name" name="user_name" id="user_name">
                        <hr>
                        <label for="password">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="password" name="password" id="password">
                        <hr>
                        <label for="confirm_password">Confirm Password: </label>
                        <input type="password" name="confirm_password" id="confirm_password">
                        <hr>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" id="male"></input>
                            <label for="male">Male</label>
                            <input type="radio" id="male"></input>
                            <label for="female">Female</label>
                            <input type="radio" id="other"></input>
                            <label for="other">Other</label>
                        </fieldset>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="text" style="width: 20px;">
                            <p style="display: inline;">/</p>
                            <input type="text" style="width: 20px;">
                            <p style="display: inline;">/</p>
                            <input type="text" style="width: 20px;">
                            <p style="display: inline;">(dd/mm/yyyy)</p>
                        </fieldset>
                        <hr>
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td  height="25px">
                <footer style="text-align: center;">Copyright © 2017</footer>
            </td>
        </tr>
    </table>
</body>
</html>