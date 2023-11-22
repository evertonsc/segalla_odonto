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
                    <li class="li_menu"><a href="/tratamentos" class="link">Tratamentos</a></li>
                    <li class="li_menu"><a href="/servicos" class="link">Serviços</a></li>
                    <li class="li_menu"><a href="/contato" class="link">Contato</a></li>
                </ul>
            </div>

        </nav>

    </header>

    @yield('conteudo')
    colocar icone instagram no footer

    <footer>
        <p class="email">Email: segallaodonto@gmail.com</p>
        
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