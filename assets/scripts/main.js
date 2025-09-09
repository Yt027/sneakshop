document.addEventListener("DOMContentLoaded",() => {
    // Countered Add to cart button Start
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
    // Countered Add to cart button End

    // Form Password Input Start
        // Input type Changer
    document.querySelectorAll("form.default .password:has(.btn)").forEach(passwordBox => {
        let passwordInput = passwordBox.querySelector("input");
        let passwordBtn = passwordBox.querySelector(".btn");

        passwordBtn.onclick = () => {
            passwordBtn.querySelector(".bx").className = (passwordBtn.querySelector(".bx").className.includes("bxs-show")) ? "bx bxs-low-vision" : "bx bxs-show"
            passwordInput.type = (passwordBtn.querySelector(".bx").className.includes("bxs-show")) ? "text" : "password";
        }
    })

        // Reactive Password Confirmation
    document.querySelectorAll("form.default .password-conf").forEach(confirmator => {
        let target = document.querySelector(confirmator.dataset["target"])

        confirmator;addEventListener("input", () => {
            confirmator.classList.toggle("valid", confirmator.value == target.value)
        })
    })
    // Form Password Input End
})