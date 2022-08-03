<?php

if($resultCheck > 0){
while($row = $result->fetch_assoc()){
echo "<h3 class='service_title'>" . $row['service_title'] . "<br>" . "</h3>";
}}

?>