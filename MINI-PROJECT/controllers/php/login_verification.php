<?php
require_once "../../models/user_model.php";
$id = $_POST['userId'];
$password = $_POST['password'];

$user = ['id' => $id, 'password' => $password];
$status = verifyLogin($user);
if ($status) {
    if ($_COOKIE['userType'] == 'admin') {
        header('location: ../../views/admin_panel.php');
    } else {
        header('location: ../../views/user_panel.php');
    }
} else {
    header('location: ../../views/login.php');
}