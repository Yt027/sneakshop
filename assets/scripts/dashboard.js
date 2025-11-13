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



    // Products Section Start
    document.querySelectorAll(".page .products .product-container .product-card").forEach(product => {
        const id = product.dataset["key"];
        // Manage product's visibility
        product.querySelector(".cta .cta-btn.mask").addEventListener("click", () => {
            let state;
            ajaxStart(product);
            toggleVisibility(id)
            .then(data => {
                ajaxEnd(product);
                state = data["state"];
                product.classList.toggle("hidden", state == 0)
            })
        })

        // Removing product
        product.querySelector(".cta .cta-btn.remove").addEventListener("click", () => {
            if(confirm("Êtes-vous sûr de vouloir supprimer ce produit ? Cette action est irréversible !") == false) {
                return;
            }
            let state;
            ajaxStart(product);
            deleteProduct(id)
            .then(data => {
                ajaxEnd(product);
                state = data["state"];
                if(state) {
                    product.remove();
                }
            })
        })
    })

    async function toggleVisibility(id) {
        let request = {
            "id": id
        }

        return fetch("./admin/show-hide-product.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(request).toString()
        })
            .then(res => res.json())
            .then(data => {
                return data;
            })
            .catch(err => { return err })
    }

    async function deleteProduct(id) {
        let request = {
            "id": id
        }

        return fetch("./admin/remove-product.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(request).toString()
        })
            .then(res => res.json())
            .then(data => {
                return data;
            })
            .catch(err => { return err })
    }
    // Products Section End
})
