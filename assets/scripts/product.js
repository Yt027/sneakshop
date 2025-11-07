document.addEventListener("DOMContentLoaded", () => {
    const mainImage = document.querySelector(".product .images .main-image")
    console.log(mainImage);
    
    // Main Image Slider Start
    document.querySelectorAll(".product .images .galery .item").forEach((galeryItem, id) => {
        galeryItem.addEventListener("click", () => {            
            mainImage.scrollTo({
                left: mainImage.offsetWidth * id,
                behavior: "smooth"
            })
        })
    })
    // Main Image Slider End
})