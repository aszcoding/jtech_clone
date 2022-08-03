for(var i=0; i<6; i++){
document.getElementById("services").innerHTML +=
`<div class = "service">
    <div class = "img_container">
        <img class = "service_img"/>
    </div>
<div class = "overlay"></div>
<div class = "service_details>
</div>`
}


const serviceContainer = document.getElementsByClassName("service")
serviceContainer.id = 'service' + i 
document.body.appendChild(serviceContainer)
