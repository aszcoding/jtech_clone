<?php
    $sql = "SELECT * FROM services WHERE active=1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

Make this a function that retrieves data from services table and returns an array of the data