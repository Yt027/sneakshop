document.addEventListener("DOMContentLoaded", () => {
    // Product Card Add to Cart Button Start
    document.querySelectorAll(".product-card").forEach(card => {
        const container = card.parentElement
        const id = card.dataset["id"];

        cartBtn = card.querySelector(".add-to-cart");
        cartBtn.addEventListener("click", () => {
            let isCarted = card.className.includes("carted");
            addToCart("shop", id, 1)
                .then(data => {
                    if (data.inCart) {
                        card.classList.add("carted");
                        cartBtn.setAttribute("title", "Supprimer panier");
                    } else {
                        card.classList.remove("carted");
                        cartBtn.setAttribute("title", "Ajouter au panier");
                    }
                })
        })
    })
    // Product Card Add to Cart Button End
})