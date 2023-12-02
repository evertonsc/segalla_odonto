@extends('layouts.main')

@section('title', 'Segalla Odonto')

@section('links')
    <link rel="stylesheet" href="/css/estilos-inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
@endsection

@section('conteudo')
    
    <main>
        <h1 class="titulo hidden" style="transition: 1s ease;">Sorrir é muito melhor. Então, SORRIA!</h1>

        <div class="carrossel">
            @for($i = 1; $i <= 15; $i++)    
                <div class="slide_container fade">
                    <img src="/img/pagina-inicio/img{{ $i }}.png" alt="Imagem {{ $i }}" class="slide">
                </div>
            @endfor

            <a class="prev hidden">&#10094;</a>
            <a class="next hidden">&#10095;</a>
        </div>

        <a class="link_agendar_consulta hidden" href="/contato">Agende sua consulta</a>
    </main>

@endsection


@section('scripts')
    <script src="/js/inicio.js"></script>
@endsection