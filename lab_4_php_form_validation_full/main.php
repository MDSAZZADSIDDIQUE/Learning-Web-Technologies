<?php
$username = $_POST['username'];
$password = $_POST['password'];
if (strlen($username) > 1) {
}
else {  echo 'Username must be at least 2 characters'; }

if (strlen($password) > 7) {
}
else {  echo 'Password must be at least 8 characters'; }

if (strpos($password, "@") === 0) {
    echo "Created";
} elseif (strpos($password, "#") === 0)
{
    echo "Created";
} elseif (strpos($password, "$") === 0)
{
    echo "Created";
} elseif (strpos($password, "%") === 0)
{
    echo "Created";
} else {
    echo "Password must contain at least one of the special characters";
}
?>