<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$dbName = 'tissa_ujian';

$conn = new mysqli($host, $user, $pwd, $dbName);

if($conn -> connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}