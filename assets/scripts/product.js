document.addEventListener("DOMContentLoaded", () => {
  const key = document.querySelector(".product").dataset["key"];
  const mainImage = document.querySelector(".product .images .main-image");
  // console.log(mainImage);

  // Main Image Slider Start
  document
    .querySelectorAll(".product .images .galery .item")
    .forEach((galeryItem, id) => {
      galeryItem.addEventListener("click", () => {
        mainImage.scrollTo({
          left: mainImage.offsetWidth * id,
          behavior: "smooth",
        });
      });
    });
  // Main Image Slider End

  // Add to cart Start
  document
    .querySelector(".product .content .counter-add-to-cart")
    .addEventListener("submit", (e) => {
      e.preventDefault();
      let value = Number(e.target.querySelector(".number").value);

      // Minimum value of 1
      value = value > 0 ? value : 1;

      // Sending new value to add-to-cart API
      addToCart("product", key, value).then((data) => {
        console.log(data);
      });
    });
  // Add to cart End
});
