<?php
        setcookie('id', '', time() - 3600, true);
        setcookie('password', '', time() - 3600, true);
        setcookie('name', '', time() - 3600, true);
        setcookie('email', '', time() - 3600, true);
        setcookie('userType', '', time() - 3600, true);
        header('location: ../../views/login.php');