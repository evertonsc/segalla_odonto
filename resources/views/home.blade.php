@extends('layouts.main')

@section('title', 'Segalla Odonto')

@section('links')
    <link rel="stylesheet" href="/css/estilos-inicio.css">
@endsection

@section('conteudo')
    
    <main>
        <h1 class="titulo hidden">Sorrir é muito melhor. Então, SORRIA!</h1>

        <div class="carrossel">
            @for($i = 1; $i <= 15; $i++)    
                @if($i == 1)
                    <div class="container_img">
                        <img src="/img/pagina-inicio/img{{ $i }}.webp" alt="Imagem {{ $i }}" class="img img_carrossel_ativa">
                    </div>
                @else
                    <div class="container_img">
                        <img src="/img/pagina-inicio/img{{ $i }}.webp" alt="Imagem {{ $i }}" class="img img_carrossel_desativa">
                    </div>
                @endif
            @endfor

            <div class="botoes">
                {{-- <button type="button" class="btn btn_voltar"> < </button>
                <button type="button" class="btn btn_avancar"> > </button> --}}
                <button><img src="/img/pagina-inicio/botao-voltar.png" alt="Voltar" class="btn"></button>
                <button><img src="/img/pagina-inicio/botao-avancar.png" alt="Avançar" class="btn"></button>
            </div>
        </div>

        <a class="link_agendar_consulta" href="/contato">Agenda sua consulta</a>
    </main>

@endsection


@section('scripts')
    <script src="/js/inicio.js"></script>
@endsection