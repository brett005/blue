<?php

date_default_timezone_set("Europe/London");
error_reporting(0);
@ini_set('display_errors', 0);



define("DB_SERVER", "localhost");

define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "bts");
define('APP_NAME', 'Blue Telecoms');

$email_username = "admin@baywash.com.my";
$email_from_name = "Bay Wash";


$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

