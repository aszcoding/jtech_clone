<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Config</title>
</head>
<body>

<!-- <//?php
// $hostName = "localhost";
// $userName = "root";
// $password = "";
// $databaseName = "services_clone";

//  $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";

?>  -->

<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

</body>
</html>