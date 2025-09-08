// Countered Add to cart button Start
document.addEventListener("DOMContentLoaded",() => {
    document.querySelectorAll(".counter-add-to-cart").forEach(cartAdd => {
        cartAdd.addEventListener("submit", e => {
            e.preventDefault()
        })

        cartAdd.querySelectorAll(".btn").forEach(btn => {
            btn.onclick = () => {
                let min = Number(cartAdd.querySelector("input.number").getAttribute("min")) || undefined
                let max = Number(cartAdd.querySelector("input.number").getAttribute("max")) || undefined

                let actualV = Number(cartAdd.querySelector("input.number").value)
                let change = (btn.className.includes("plus")) ? +1 : -1;

                let newV = actualV + change
                if (min && newV < min) { newV = min }
                if (max && newV > max) { newV = max }
                cartAdd.querySelector("input.number").value = newV
            }
        })
    })
})
// Countered Add to cart button End