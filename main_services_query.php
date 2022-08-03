<?php
    $sql = "SELECT * FROM services WHERE active=1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>