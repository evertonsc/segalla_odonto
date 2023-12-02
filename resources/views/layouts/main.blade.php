<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="icon" href="/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos-globais.css">

    @yield('links')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container_principal_menu">
                
                <div class="container_informacoes_menu">
                    
                    <div class="container_logo">
                        <a href="/" class="link_logo">
                            <img src="/img/logo.png" class="logo" alt="logo">
                        </a>
                    </div>
                    
                    <div class="informacoes_menu_container">
                        <h1 class="texto_logo_principal">Douglas Segalla</h1>
                        <p class="sub_texto_logo">Odontologia Especializada - Reabilitação Bucal</p>
                    </div>

                </div>
                
    
                <div class="whatsapp_container">
                    <img src="/img/whatsapp.webp" alt="Icone" width="55px" height="55px">
                    <a href="https://wa.me/+5551998388883?text=Olá,%20vim%20pelo%20seu%20site!" target="blank" class="link_whatsapp">+55 (51) 99838-8883</a>
                </div>

            </div>
            
            
            <div class="container_ul_menu">
                <button type="button" class="hamburguer"></button>
                <ul class="ul_menu">
                    <li class="li_menu"><a href="/" class="link menu_ativo">Início</a></li>
                    <li class="li_menu"><a href="/carreira" class="link">Carreira</a></li>
                    <li class="li_menu"><a href="/servicos" class="link">Serviços</a></li>
                    <li class="li_menu"><a href="/cursos" class="link">Cursos</a></li>
                    <li class="li_menu"><a href="/contato" class="link">Contato</a></li>
                </ul>
            </div>

        </nav>

    </header>

    @yield('conteudo')

    <footer>
        <div class="contatos">
            <a href="https://www.instagram.com/segallaodonto/" target="_blank" class="instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg><span>@segallaodonto</span></a>
            <p class="email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg> segallaodonto@gmail.com</p>
        </div>
        
        <div class="container_endereco">
            <div class="endereco">
                <p>Av. 24 de Outubro, 435 - Moinhos de Vento, Porto Alegre-RS, 90510-002, Brasil</p>
                <p>Sala 202</p>
            </div>
    
    
            <div class="container_mapa">
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.346878031184!2d-51.208266512509454!3d-30.02690476581533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979b685c9c01b%3A0xc4da757b0c33f4e3!2sR.%2024%20de%20Outubro%2C%20435%20-%20Independ%C3%AAncia%2C%20Porto%20Alegre%20-%20RS%2C%2090510-002!5e0!3m2!1spt-BR!2sbr!4v1698007152374!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>


    <script src="/js/main.js"></script>
    <script src="/js/text-reveal.js"></script>
    @yield('scripts')
</body>
</html>