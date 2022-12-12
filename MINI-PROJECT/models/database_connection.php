<?php
function getConnection()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database= "mini_project";
    return mysqli_connect($hostname, $username, $password, $database);
}