const hamburguer = document.querySelector(".hamburguer");
const nav = document.querySelector(".navbar");
console.log(nav);
hamburguer.addEventListener("click", () => 
    nav.classList.toggle("active")
);