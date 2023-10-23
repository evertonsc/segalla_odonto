$(document).ready(function () {
    const imagens = document.querySelectorAll(".img");
    let index = 0;

    function mostrarImagemAtiva() {
        // Oculta a imagem ativa atual
        imagens[index].classList.remove("img_carrossel_ativa");
        imagens[index].classList.add("img_carrossel_desativa");

        // Atualiza o índice para a próxima imagem
        index = (index + 1) % imagens.length;

        // Mostra a próxima imagem
        imagens[index].classList.remove("img_carrossel_desativa");
        imagens[index].classList.add("img_carrossel_ativa");
    }

    function mostrarImagemAnterior() {
        // Oculta a imagem ativa atual
        imagens[index].classList.remove("img_carrossel_ativa");
        imagens[index].classList.add("img_carrossel_desativa");

        // Atualiza o índice para a imagem anterior
        index = (index - 1 + imagens.length) % imagens.length;

        // Mostra a imagem anterior
        imagens[index].classList.remove("img_carrossel_desativa");
        imagens[index].classList.add("img_carrossel_ativa");
    }

    document.querySelector(".btn_voltar").addEventListener("click", mostrarImagemAnterior);
    document.querySelector(".btn_avancar").addEventListener("click", mostrarImagemAtiva);

    // Chama a função para mostrar a próxima imagem a cada 4 segundos
    setInterval(mostrarImagemAtiva, 4000);
});