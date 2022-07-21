<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Services</title>
</head>
<body>

<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "services_clone";

 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

?> 

</body>
</html>