for(var i=0; i<6; i++){
const serviceContainer = document.createElement('div')
serviceContainer.className = "service_0" + i
serviceContainer.id = "service"
document.body.appendChild(serviceContainer)
}

for(var i=0; i<6; i++){
document.getElementById("service").innerHTML +=
`  <div class = "img_container">
        <img class = "service_img"/>
    </div>
    <div class = "overlay"></div>
<div class = "service_details>
</div>`
}

// for(var i=0; i<6; i++){
//     document.body.innerHTML += `<div class="service_' + i + '"> <div class="img_container"><img class="service_img"/> <div class="overlay"> <div class="service_details"> </div></div></div></div>`
// }

// const div1 = document.createElement('div');
// div1.className = "service_'+ i'";

// const div2 = document.createElement('div');
// div2.className = "img_container";

// const image = document.createElement('img');
// image.className = "service_img";

// const div3 = document.createElement('div');
// div3.className = "overlay";

// const div4 = document.createElement('div');
// div4.className = "service_details";

// document.body.appendChild(servicesLoop);