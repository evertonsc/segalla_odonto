@extends('layouts.main')

@section('title', 'Serviços')

@section('links')
    <link rel="stylesheet" href="/css/estilos-servicos.css">
@endsection

@section('conteudo')

    <main>
        <h1 class="titulo">Serviços</h1>

        <section class="cards">
            <div class="card">
                <div class="card_imagem" style="background-image: url(/img/pagina-servicos/implante-dentario.png);"></div>
                <div class="card_conteudo">
                    <div class="card_titulo">IMPLANTES DENTÁRIOS</div>
                    <div class="card_descricao">Um implante dentário é um pilar pequeno e resistente fabricado em metais ou produtos cerâmicos biocompatíveis.A fase de <span class="texto-colorido">cicatrização</span> demora de <span class="texto-colorido">6 a 12 semanas</span>, dependendo da situação clínica individual. Durante este período, o implante se une firmemente ao osso maxilar - um processo designado por <span class="texto-colorido">osseointegração</span>.</div>
                </div>
            </div>
    
    
            <div class="card">
                <div class="card_imagem" style="background-image: url(/img/pagina-servicos/odontologia-dental.png);"></div>
                <div class="card_conteudo">
                    <div class="card_titulo">ODONTOLOGIA DIGITAL</div>
                    <div class="card_descricao">Próteses por computador são dispositivos personalizados criados através de modelagem digital avançada. Utilizando tecnologias como CAD (Computer-Aided Design) e impressão 3D, essas próteses são <span class="texto-colorido">precisas e adaptáveis às necessidades específicas do paciente</span>. Esse processo otimiza a produção, resultando em soluções mais eficientes e acessíveis para a substituição de membros perdidos.</div>
                </div>
            </div> 
    
    
            <div class="card">
                <div class="card_imagem" style="background-image: url(/img/pagina-servicos/clareamento-dental.png);"></div>
                <div class="card_conteudo">
                    <div class="card_titulo">CLAREAMENTO DENTAL</div>
                    <div class="card_descricao">O clareamento dental é um procedimento feito no consultório ou pode-se confeccionar uma moldeira para você fazer em casa. Esse processo ajuda a <span class="texto-colorido">restaurar o branco natural dos dentes</span>, promovendo um sorriso mais branco. Certas comidas e bebidas podem causar a <span class="texto-colorido">pigmentação</span> (manchamento) dos dentes, como o <span class="texto-colorido">café, chá, vinho e isotônicos</span>. Lembrando que <span class="texto-colorido">fumar</span> também pode manchar os dentes.</div>
                </div>
            </div> 
    
    
            <div class="card">
                <div class="card_imagem" style="background-image: url(/img/pagina-servicos/laminados-ceramicos.png);"></div>
                <div class="card_conteudo">
                    <div class="card_titulo">LAMINADOS CERÂMICOS</div>
                    <div class="card_descricao">Laminados cerâmicos são <span class="texto-colorido">finas camadas de porcelana</span> utilizadas em odontologia estética para melhorar a aparência dos dentes. Personalizados e ultrafinos esses revestimentos são aplicados sobre a superfície dental, <span class="texto-colorido">corrigindo imperfeições como manchas, descolorações e irregularidades</span>. Proporcionam um sorriso natural e duradouro, com mínima intervenção nos dentes originais.</div>
                </div>
            </div>             
    
    
            <div class="card">
                <div class="card_imagem" style="background-image: url(/img/pagina-servicos/proteses-moveis.png);"></div>
                <div class="card_conteudo">
                    <div class="card_titulo">PRÓTESES MÓVEIS</div>
                    <div class="card_descricao">A <span class="texto-colorido">prótese parcial removível</span> consiste em uma estrutura metálica que se apóia nos dentes naturais e rebordo (osso e tecido). Já a <span class="texto-colorido">prótese total</span> convencional é colocada em sua boca depois que os <span class="texto-colorido">dentes remanescentes foram extraídos e os tecidos cicatrizarem</span>. Essas próteses devem estar bem ajustadas em todos os tecidos e não deve causar lesões em sua boca.</div>
                </div>
            </div> 
    

            <div class="card">
                <div class="card_imagem" style="background-image: url(/img/pagina-servicos/proteses-fixas.png);"></div>
                <div class="card_conteudo">
                    <div class="card_titulo">PRÓTESES FIXAS</div>
                    <div class="card_descricao">As coroas de porcelana ou cerâmica podem combinar com a cor natural de seus dentes. Outros <span class="texto-colorido">materiais usados</span> são o <span class="texto-colorido">ouro</span> e as <span class="texto-colorido">ligas de metal</span>, o <span class="texto-colorido">acrílico e a cerâmica</span>. Estas ligas são geralmente mais resistentes que a porcelana e são recomendadas para os dentes posteriores. A porcelana é ligada a uma estrutura metálica e é usada, em geral, por ser resistente e atraente.</div>
                </div>
            </div> 
        </section>
    </main>
@endsection