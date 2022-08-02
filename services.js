const servicesLoop = document.createDocumentFragment();

for(var i=0; i<6; i++){
    const div1 = document.createElement('div');
    div1.className = "service_'+ i'";

    const div2 = document.createElement('div');
    div2.className = "img_container";

    const image = document.createElement('img');
    image.className = "service_img";

    const div3 = document.createElement('div');
    div3.className = "overlay";

    const div4 = document.createElement('div');
    div4.className = "service_details";

    document.appendChild(servicesLoop);

}