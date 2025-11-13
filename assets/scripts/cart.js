document.addEventListener('DOMContentLoaded', () => {
  // Product quantity selector Start
  document.querySelectorAll(".cart .wrapper .item").forEach(cartItem => {
    const id = cartItem.dataset['key'];

    // Changing value with arrow buttons
    cartItem.querySelectorAll(".cart-counter .btn").forEach(btn => {
      btn.onclick = () => {
        let min = Number(cartItem.querySelector(".cart-counter input.number").getAttribute("min")) || undefined
        let max = Number(cartItem.querySelector(".cart-counter input.number").getAttribute("max")) || undefined

        let actualV = Number(cartItem.querySelector(".cart-counter input.number").value)
        let change = (btn.className.includes("plus")) ? +1 : -1;

        let newV = actualV + change
        if (min && newV < min) { newV = min }
        if (max && newV > max) { newV = max }
        cartItem.querySelector(".cart-counter input.number").value = newV

        changeQty(id, newV);
      }
    })

    // Change value with direct input
    cartItem.querySelector("input.number").addEventListener("input", e => {
      let value = Number(e.target.value);
      if(value <= 0) {
        e.target.value = 1;
        value = 1;
      }

      changeQty(id, value)
    })

    // Removing from cart
    cartItem.querySelector(".remove-from-cart").addEventListener("click", () => {
      // Sending zero to add-to-cart API
      ajaxStart(cartItem);
      addToCart("cart", id, 0)
        .then(data => {
            ajaxEnd(cartItem);
            // Removing product
            if(data["outCart"] == id){
              cartItem.remove()
            };
        })
    })

    // Add non null quantity to cart
    async function changeQty(id, qty) {
      // Sending new value to add-to-cart API
        addToCart("cart", id, qty)
          .then(data => {
              return true;
          })
    }
  })
  // Product quantity selector End
})
