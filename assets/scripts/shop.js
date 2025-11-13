document.addEventListener("DOMContentLoaded", () => {
    // Product Card Add to Cart Button Start
    document.querySelectorAll(".product-card").forEach(card => {
        const container = card.parentElement
        const id = card.dataset["id"];

        const cartBtn = card.querySelector(".ban .add-to-cart");
        cartBtn.addEventListener("click", () => {
            ajaxStart(cartBtn)
            addToCart("shop", id, 1)
                .then(data => {
                    ajaxEnd(cartBtn)
                    if (data.inCart) {
                        card.classList.add("carted");
                        cartBtn.setAttribute("title", "Supprimer du panier");
                    } else {
                        card.classList.remove("carted");
                        cartBtn.setAttribute("title", "Ajouter au panier");
                    }
                })
        })
    })
    // Product Card Add to Cart Button End
})