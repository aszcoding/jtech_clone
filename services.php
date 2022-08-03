<?php 
 $element = "<div class='service'></div>";
 $element2= "<div class='img_container'></div>";
 $element3= "<img class='service_img'/>";
 $element4= "<div class='overlay'></div>";
 $element5= "<div class='service_details'></div>";
 $count = 6;
 foreach( range(1,$count) as $item){
     echo $element, $element2, $element3, $element4, $element5;
 }
?>