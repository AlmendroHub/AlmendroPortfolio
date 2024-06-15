window.onload = function(){ 

    console.log("JS Funcionando!!");

    // <----- Menú Hmaburguesa Responsive ----->
    const navbar = document.querySelector('#navbar');
    const abrir = document.querySelector('#menu-desplegable');
    const cerrar = document.querySelector('#cerrar-menu');

    abrir.addEventListener("click", () => {
        navbar.classList.add("visible")
    })

    cerrar.addEventListener("click", () => {
        navbar.classList.remove("visible")
    })

    navbar.addEventListener("click", () => {
        navbar.classList.remove("visible")
    })
}
