document.addEventListener('DOMContentLoaded', () => {
  // Product quantity selector Start
  document.querySelectorAll(".cart .wrapper .item").forEach(cartItem => {
    const id = cartItem.dataset['key'];

    // Changing value
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

        // Sending new value to add-to-cart API
        addToCart("cart", id, newV)
          .then(data => {
              console.log(data);              
          })
      }
    })

    // Removing from cart
    cartItem.querySelector(".remove-from-cart").addEventListener("click", () => {
      // Sending zero to add-to-cart API
      addToCart("cart", id, 0)
        .then(data => {
            console.log(data);              
        })
      // Removing product
      cartItem.style.display = "none";
    })
  })
  // Product quantity selector End
})
