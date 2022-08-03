<?php
    $sql = "SELECT * FROM services WHERE active=1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
    while($row = $result->fetch_assoc()){
    echo "<h3 class='service_title'>" . $row['title'] . "<br>" . "</h3>";
    echo "<p class='service_description'>" . $row['description'] . "<br>" . "</p>";
}}
?>