const observer = new IntersectionObserver((entradas) => {
    entradas.forEach((entrada) => {
        if(entrada.isIntersecting){
            entrada.target.classList.add('show')
        }
        else {
            entrada.target.classList.remove('show')
        }
    });
});

const elementosHidden = document.querySelectorAll('.hidden');
elementosHidden.forEach((elemento) => observer.observe(elemento));