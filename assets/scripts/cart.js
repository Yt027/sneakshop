document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll(".cart-counter").forEach(counter => {
    counter.querySelectorAll(".btn").forEach(btn => {
      btn.onclick = () => {
        let min = Number(counter.querySelector("input.number").getAttribute("min")) || undefined
        let max = Number(counter.querySelector("input.number").getAttribute("max")) || undefined

        let actualV = Number(counter.querySelector("input.number").value)
        let change = (btn.className.includes("plus")) ? +1 : -1;

        let newV = actualV + change
        if (min && newV < min) { newV = min }
        if (max && newV > max) { newV = max }
        counter.querySelector("input.number").value = newV
      }
    })
  })
})
