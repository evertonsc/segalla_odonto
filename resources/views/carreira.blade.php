@extends('layouts.main')

@section('title', 'Carreira')

@section('links')
    <link rel="stylesheet" href="/css/estilos-carreira.css">
@endsection

@section('conteudo')
    
    <main>
        <div class="conteudo">
            <div class="textos">
                <h3 class="titulo-textos hidden">Douglas Segalla</h3>
    
                <p class="texto hidden">
                    &#9733;
                    Cirurgião-Dentista em Porto Alegre-RS, CRO/RS 15241.
                    Capitão Dentista no Exército Brasileiro, Chefe da Odontologia Digital, onde atua na área de Reabilitação Bucal desde 2007.
                </p>
    
                <p class="texto hidden">
                    &#9733;
                    Graduado pela PUCRS (2004),
                    especialista em Implantodontia pela PUCRS (2008). 
                    Mestre em Prótese Dentária pela PUCRS (2020) e
                    doutorando em Prótese Dentária PUCRS. 
                </p>
    
                <p class="texto hidden"> 
                    &#9733;
                    Membro do Internacional Team for Implantology - ITI. Professor de Pós Graduação nos Cursos de Prótese Dentária na ABO - RS
                </p>
    
                {{-- Ele não comentou deste texto abaixo, porém estava no outro site dele então coloquei também --}}
                <p class="texto hidden">
                    Atendimento personalizado do paciente com <span>preocupação</span> nos <span>desejos</span> e <span>necessidades odontológicas</span>, sejam elas estéticas ou funcionais, procurando realizar o <span>tratamento mais adequado</span> a cada paciente, sempre dentro das melhores técnicas e materiais odontológicos.
                </p>
            </div>
    
            <img src="/img/imagem-carreira.png" alt="Foto Douglas Segalla" class="foto hidden">
        </div>
    </main>
    

@endsection