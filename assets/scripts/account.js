document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector("header.header")
    const Sidebar = document.querySelector(".sidebar")
    const Page = document.querySelector(".page")
    // Sidebar Switch Button Start
    Sidebar.querySelector(".switch").addEventListener("click", () => {
        Sidebar.classList.toggle("reduced")
    })
    // Sidebar Switch Button End

    // Sidebar Links Start
    Sidebar.querySelectorAll(".links .item").forEach(link => {
        const target = link.dataset["target"];

        link.addEventListener("click", () => {
            Sidebar.querySelectorAll(".links .item.active").forEach(formerActive => {
                formerActive.classList.remove("active")
            })

            link.classList.add("active")
            switchView(target)
        })
    })

    function switchView(target) {
        const targetedSection = Page.querySelector(`section.${target}`) || undefined;
        if (targetedSection) {
            Page.scrollTo({
                top: targetedSection.offsetTop - parseFloat(window.getComputedStyle(header).height),
                behavior: "smooth"
            })
        }
    }

    // Auto scroll to active view on window resize
    window.addEventListener("resize", (e) => {
        setTimeout(() => {
            const activeView = Sidebar.querySelector(".links .item.active")?.dataset["target"] || "home";
            switchView(activeView);
        }, 300)
    })
    // Sidebar Links End



    // Logout Section Start
    document.querySelector(".logout .cta-btn.logout").addEventListener("click", () => {
        const request = {
            "request": "logout"
        }

        fetch("./controls/logout.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(request).toString()
        })
            .then(res => res.json())
            .then(data => {
                console.log(data);
                document.location.reload()
            })
            .catch(err => { return err })
    })
    // Logout Section End
})
