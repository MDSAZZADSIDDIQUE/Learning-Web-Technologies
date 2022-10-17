<?php
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$retype_new_password = $_POST['retype_new_password'];

if ($new_password == $current_password) { echo "New Password should not be same as the Current Password"; }
else if ($new_password != $retype_new_password) { echo "New Password must match with the retyped password"; }
else { echo "Password changed";}
?>