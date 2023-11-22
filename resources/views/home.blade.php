@extends('layouts.main')

@section('title', 'Segalla Odonto')

@section('links')
    <link rel="stylesheet" href="/css/estilos-inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
@endsection

@section('conteudo')
    
    <main>
        <h1 class="titulo hidden" style="transition: 1.7s;">Sorrir é muito melhor. Então, SORRIA!</h1>

        <div class="carrossel">
            @for($i = 1; $i <= 15; $i++)    
                @if($i == 1)
                    <div class="container_img hidden" style="transition: 1.5s;">
                        <img src="/img/pagina-inicio/img{{ $i }}.webp" alt="Imagem {{ $i }}" class="img img_carrossel_ativa">
                    </div>
                @else
                    <div class="container_img hidden" style="transition: 1.5s;">
                        <img src="/img/pagina-inicio/img{{ $i }}.webp" alt="Imagem {{ $i }}" class="img img_carrossel_desativa">
                    </div>
                @endif
            @endfor

            <div class="botoes">
                <button type="button" class="btn btn_voltar hidden" style="transition: 2.4s;"> < </button>
                <button type="button" class="btn btn_avancar hidden" style="transition: 2.4s;"> > </button>
            </div>
        </div>

        <a class="link_agendar_consulta hidden" style="transition: 2s;" href="/contato">Agenda sua consulta</a>
    </main>

@endsection


@section('scripts')
    <script src="/js/inicio.js"></script>
@endsection