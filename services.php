<?php 
include("main_services_query.php");

 $element = "<div class='service'>";
 $element2= "<div class='img_container'>";
 $element3= "<img class='service_img'/></div>";
 $element4= "<div class='overlay'> </div>";
 $element5= "<div class='service_details'></div></div>"
 $count = 6;
 foreach( range(1,$count) as $item){
     echo $element, $element2, $element3, $element4, $element5;
 }

 if($resultCheck > 0){
    while($row = $result->fetch_assoc()){
  echo "<h3 class='service_title'>" . $row['service_title'] . "<br>" . "</h3>";
    }}
?>

