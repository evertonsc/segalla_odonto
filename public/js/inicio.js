$(document).ready(function () {
    
    /* Funções para trocar os slides com os botões */
    var indiceSlide = 1;
    mostrarSlides(indiceSlide);

    function mudarImagem(n) {
        mostrarSlides(indiceSlide += n);
    }

    $(".prev").on('click', function () {
        mudarImagem(-1);
    });
    
    $(".next").on('click', function () {
        mudarImagem(1);
    });

    function mostrarSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide_container");
    
        if (n > slides.length) {
            indiceSlide = 1;
        }
    
        if (n < 1) {
            indiceSlide = slides.length;
        }
        
        for (i= 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        
        slides[indiceSlide - 1].style.display = "block";
    }


    /* Trocar slides automaticamente */
    var indiceSlide = 0;        // Tem que ser o mesmo nome pois sincroniza caso o usuário troque de imagem com algum dos botões
    mostrarSlidesAutomatico();

    function mostrarSlidesAutomatico() {
        var i;
        var slides = document.getElementsByClassName("slide_container");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        indiceSlide++;
        
        if (indiceSlide > slides.length) {
            indiceSlide = 1;
        }
        slides[indiceSlide - 1].style.display = "block";
        
        setTimeout(mostrarSlidesAutomatico, 4000); // Change image every 2 seconds
    }
    
});


