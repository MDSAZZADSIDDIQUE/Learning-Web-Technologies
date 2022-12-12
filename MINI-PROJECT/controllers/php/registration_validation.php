<?php
require_once "../../models/user_model.php";
$id = $_POST['id'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$userType = $_POST['userType'];
$user = ['id' => $id, 'password' => $password, 'name' => $name, 'email' => $email, 'userType' => $userType];
insertUser($user);
if ($userType === 'admin') {
    header('location: ../../views/admin_panel.php');
} else {
    header('location: ../../views/user_panel.php');
}