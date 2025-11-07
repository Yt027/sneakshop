document.addEventListener("DOMContentLoaded", () => {
    const Sidebar = document.querySelector(".sidebar")
    // Sidebar Switch Button Start
    Sidebar.querySelector(".switch").addEventListener("click", () => {
        Sidebar.classList.toggle("reduced")
    })
    // Sidebar Switch Button End
})