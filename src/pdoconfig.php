<?php
$host = "localhost";
$dbname = "feedback_form";
$username = "root";
$password = "";
$charset = "utf8";
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
   PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
   PDO::ATTR_EMULATE_PREPARES  => false,
];
