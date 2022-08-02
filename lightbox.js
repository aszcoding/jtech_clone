const lightbox = document.createElement('div')
lightbox.id = 'lightbox'
document.body.appendChild(lightbox)

const images = document.querySelectorAll('.service_img')
images.forEach(image => {
    image.addEventListener('click', e => {
        lightbox.classList.add('active')
        const img = document.createElement('img')
        img.src = image.src
        while(lightbox.firstChild) {
            lightbox.removeChild(lightbox.firstChild)
        }
        lightbox.appendChild(img)
        
        const exit_lightbox = document.createElement('button')
        exit_lightbox.id = 'close_lightbox'
        exit_lightbox.innerHTML = "&times;"
        lightbox.appendChild(exit_lightbox)        
        exit_lightbox.addEventListener('click', e => {
        return lightbox.classList.remove('active')
        })
    })
})

lightbox.addEventListener('click', e => {
    if (e.target !== e.currentTarget) return
    lightbox.classList.remove('active')
})
