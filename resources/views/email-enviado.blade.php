@extends('layouts.main')

@section('title', 'Email enviado')

@section('links')
    <link rel="stylesheet" href="/css/estilos-contato.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
@endsection

@section('conteudo')
    
    <main style="height: 60svh;">
        <div style="height: 40svh; display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <h1 class="titulo">Email enviado</h1>
    
            <p>Clique <a href="/" style="color: var(--cor-primaria);">aqui</a> para voltar à página inicial.</p>
        </div>
    </main>

@endsection

@section('scripts')
    <script src="/js/contato.js"></script>
@endsection