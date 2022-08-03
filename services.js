for(var i=0; i<6; i++){
document.getElementById("services").innerHTML +=
`<div class = "service">
<?php
if($resultCheck > 0){
    while($row = $result->fetch_assoc()){
      echo "<h3 class='service_title'>" . $row['service_title'] . "<br>" . "</h3>";
    }}
?>
    <div class = "img_container">
        <img class = "service_img"/>
    </div>
<div class = "overlay"></div>
<div class = "service_details>
</div>`
}

const serviceContainer = document.querySelectorAll('.service')
serviceContainer.id = "service" + i