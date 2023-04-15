let modal = document.getElementById("myModal");
let overlay = document.getElementById("overlay");
// Получить кнопку, которая открывает модальный
let btn = document.getElementById("subscribe");
// Получить элемент <span>, который закрывает модальный
let span = document.getElementById("close");


// Когда пользователь нажимает на кнопку, откройте модальный
btn.onclick = function() {
    modal.style.display = "block";
}

// Когда пользователь нажимает на <span> (x), закройте модальное окно
span.onclick = function() {
    modal.style.display = "none";
    overlay.classList.remove("is-show");
    document.body.style.overflow = 'auto';
}

// Когда пользователь щелкает в любом месте за пределами модального, закройте его
window.onclick = function(event) {
    if (event.target.id === "overlay") {
        modal.style.display = "none";
        overlay.classList.remove("is-show");
        document.body.style.overflow = 'auto';
    }
}

btn.addEventListener("click", () => {
    overlay.classList.add("is-show");
    document.body.style.overflow = 'hidden';
})


window.addEventListener("keydown", (event) => {
    if (event.key == "Escape") {
        span.click()
        // modalFormClose.click()
    }
})
