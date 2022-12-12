<?php
require_once "database_connection.php";
function verifyLogin($user)
{
    $connection = getConnection();
    $sql = "SELECT * FROM users_information WHERE id='{$user['id']}' and password='{$user['password']}'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $userInformation = mysqli_fetch_array($result);
        setcookie('id', $userInformation['id'], time() + 3600, true);
        setcookie('password', $userInformation['password'], time() + 3600, true);
        setcookie('name', $userInformation['name'], time() + 3600, true);
        setcookie('email', $userInformation['email'], time() + 3600, true);
        setcookie('userType', $userInformation['user_type'], time() + 3600, true);
        setcookie('status', true, time() + 3600, true);
        return true;
    } else {
        return false;
    }
}

function insertUser($user)
{
    $connection = getConnection();
    $sql = "INSERT INTO users_information (id, password, name, email, user_type) VALUES ('{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['userType']}')";
    mysqli_query($connection, $sql);
}