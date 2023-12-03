@extends('layouts.main')

@section('title', 'Cursos')

@section('links')
    <link rel="stylesheet" href="/css/estilos-cursos.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
@endsection

@section('conteudo')
    
    <main>
        <h1 class="texto_principal hidden" style="transition: 1s ease;">Agenda de cursos em breve 2024</h1>
        <p class="sub_texto hidden">Clique <a href="/contato" class="link_contato">aqui</a> para saber mais!</p>
    </main>

@endsection