include('main_services_query.php')

for(var i=0; i<6; i++){
document.getElementById("services").innerHTML +=
`<div class = "service">
    <div class = "img_container">
        <img class = "service_img"/>
    </div>
<div class = "overlay">
`<?php
if($resultCheck > 0){
    while($row = $result->fetch_assoc()){
      echo "<h3 class='service_title'>" . $row['service_title'] . "<br>" . "</h3>";
    }}
?>`
</div>
<div class = "service_details>
<?php
if($resultCheck > 0){
    while($row = $result->fetch_assoc()){
      echo "<p class='service_details'>" . $row['details'] . "<br>" . "</p>";
    }}
?>
</div>`
}

const serviceContainer = document.querySelectorAll('.service')
serviceContainer.id = "service" + i