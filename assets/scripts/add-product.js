document.addEventListener("DOMContentLoaded", () => {
    // Caracteristics Preview Start
    const caracteristicPreviewer = document.querySelector(".product .content .caracteristics .preview")
    document.querySelector("form .content .caracteristics input").addEventListener("input", (e) => {
        let content = e.target.value
        let data = content.split("|")

        caracteristicPreviewer.innerHTML = ""
        data.forEach(element => {
            caracteristicPreviewer.innerHTML += `<span class="item">${element}</span>`      
        });
    })
    // Caracteristics Preview End
})