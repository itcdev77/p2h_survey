<?php
$hostname   = "localhost";
$username   = "root";
$password   = "password";
$database   = "db_p2h_survey";

$con = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_error($con));
