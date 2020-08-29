<!--  Ariel Simantov 207366865
      Liron Shemesh 301569075
!-->
<?php
$DBConInfo = [
    'server'   => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'name'     => 'test',
];
$conn = new mysqli(
    $DBConInfo['server'],
    $DBConInfo['username'],
    $DBConInfo['password'],
    $DBConInfo['name']);

if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
//echo "Connected successfully"."<br>";
