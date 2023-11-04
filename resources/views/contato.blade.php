@extends('layouts.main')

@section('title', 'Contato')

@section('links')
    <link rel="stylesheet" href="/css/estilos-contato.css">
@endsection

@section('conteudo')
    
    <main>
        <h1 class="titulo">Entre em contato</h1>

        <form action="">
            <input type="text" id="nome" name="nome" placeholder="Nome completo" class="input_nome input" autocomplete="off">
            
            <div class="inputs_divididos">
                <input type="tel" id="telefone" name="telefone" placeholder="Telefone" class="input_telefone input" oninput="this.value = this.value.replace(/[\D]+/g, '');" maxlength="11" autocomplete="off">
                <input type="email" id="nome" name="email" placeholder="E-mail" class="input_email input" autocomplete="off">
            </div>
            <input type="text" id="endereco" name="endereco" placeholder="Endereço" class="input_endereco input" autocomplete="off">
            
            <textarea id="mensagem" name="mensagem" cols="60" rows="7" placeholder="Escreva uma mensagem..." class="textarea input" style="resize: none;"></textarea>

            <button type="submit" class="btn_enviar">Enviar</button>
        </form>

        <p>Aqui falta somente fazer a função de enviar pro email funcionar, mas o formulário já está pronto</p>
    </main>

@endsection

@section('scripts')
    <script src="/js/contato.js"></script>
@endsection