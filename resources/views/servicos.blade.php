@extends('layouts.main')

@section('title', 'Serviços')

@section('links')
    <link rel="stylesheet" href="/css/estilos-servicos.css">
@endsection

@section('conteudo')

    <main>
        <h1 class="titulo">Serviços</h1>
    
        <div class="card-container">
            <div class="card">
                <img src="/img/pagina-servicos/implante-dentario.png" alt="Imagem implante dentário" width="185px" height="185px">
    
                <h2>Implantes dentários</h2>
            </div>
            
            <div class="card">
                <img src="/img/pagina-servicos/protese-por-computador.png" alt="Imagem" width="185px" height="185px">
                
                <h2>Próteses por computador</h2>
            </div>
    
            <div class="card">
                <img src="/img/pagina-servicos/clareamento-dental.png" alt="Imagem " width="185px" height="185px">
    
                <h2>Clareamento dental</h2>
            </div>
            
            <div class="card">
                <img src="/img/pagina-servicos/laminados-ceramicos.png" alt="Imagem " width="185px" height="185px">
    
                <h2>Laminados cerâmicos</h2>
            </div>
            
            <div class="card">
                <img src="/img/pagina-servicos/proteses-fixas.png" alt="Imagem " width="185px" height="185px">
    
                <h2>Próteses fixas</h2>
            </div>
            
            <div class="card">
                <img src="/img/pagina-servicos/proteses-moveis.png" alt="Imagem " width="185px" height="185px">
    
                <h2>Próteses móveis</h2>
            </div>
        </div>

        Essa página será destinada para mostrar serviços que ele realiza atualmente, para que possíveis clientes já saibam se o que eles precisam está dentro do que o dentista oferece.
        <br>
        Basicamente será mostrado de alguma forma que ainda deve ser definida os tipos de serviços que ele realiza
    </main>
@endsection