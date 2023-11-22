@extends('layouts.main')

@section('title', 'Carreira')

@section('links')
    <link rel="stylesheet" href="/css/estilos-carreira.css">
@endsection

@section('conteudo')
    
    {{-- <main class="hidden">
        <h1 class="titulo">Carreira</h1>

        <p>Aqui será destinado a uma página contando um pouco sobre a carreira do dentista, o que ele tem de formação, talvez cursos que ele já deu etc.</p>
        <br>
        <p>Será basicamente um espaço destinado a por coisas que agregam para a carreira dele como dentista.</p>
    </main> --}}

    <main>
        <div class="conteudo">
            <div class="textos">
                <h3 class="hidden titulo-textos">Douglas Segalla</h3>
    
                <p class="hidden texto">
                    Cirurgião-Dentista em Porto Alegre-RS, CRO/RS 15241.
                    Capitão Dentista no Exército Brasileiro, Chefe da Odontologia Digital, onde atua na área de Reabilitação Bucal desde 2007.
                </p>
    
                <p class="hidden texto">
                    Graduado pela PUCRS (2004),
                    especialista em Implantodontia pela PUCRS (2008). 
                    Mestre em Prótese Dentária pela PUCRS (2020) e
                    doutorando em Prótese Dentária PUCRS. 
                </p>
    
                <p class="hidden texto"> 
                    Membro do Internacional Team for Implantology - ITI. Professor de Pós Graduação nos Cursos de Prótese Dentária na ABO - RS
                </p>
    
                {{-- Ele não comentou deste texto abaixo, porém estava no outro site dele então coloquei também --}}
                <p class="hidden texto">
                    Atendimento personalizado do paciente com <span>preocupação</span> nos <span>desejos</span> e <span>necessidades odontológicas</span>, sejam elas estéticas ou funcionais, procurando realizar o <span>tratamento mais adequado</span> a cada paciente, sempre dentro das melhores técnicas e materiais odontológicos.
                </p>
            </div>
    
            <img src="/img/imagem-carreira.png" alt="Foto Douglas Segalla" class="foto hidden">
        </div>
    </main>
    

@endsection