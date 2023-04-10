let cartModal = document.getElementById("cart-modal");
let cart = document.getElementById("cart");
cart.addEventListener("click", function modalCart () {
        if (!cartModal.classList.contains("active-modal")){
            cartModal.classList.add("active-modal");
        } else {
            cartModal.classList.remove("active-modal");
        }
    }
)
