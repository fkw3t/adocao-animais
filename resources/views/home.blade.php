@extends('layouts.header-footer')

@section('title', 'Home')

@section('content')

    <section class="main container col-8 my-4" id="main-container">
        <div class="row my-2" id="banner-bh-adota">
            <img src="img/banner-bhadotapet.png" class="img-thumbnail" alt="...">
            
        </div>        
        <div class="row my-2 py-2 px-4" id="quero-adotar">
            <div class="col-4 home-iteraction">
                <button class="btn text-uppercase" onclick="location.href='cadastro_animal.html';">Quero Adotar</button>             
            </div>
            <div class="col-4 home-iteraction">
                <button class="btn text-uppercase">Quero Doar</button>
            </div>
            <div class="col-4 home-iteraction">
                <button class="btn text-uppercase">Quero Contribuir</button>
            </div>
        </div>
        <h3 class="text-center text-uppercase mt-5 mb-3">Animais Disponíveis para Adoção</h3>
        <div id="animaisAdocao" class="row row-cols-5 my-2 animais-adocao">
            <div class="col p-3 animais-adocao text-center">Animal 1
                <img src="https://portaldoscaesegatos.com.br/wp-content/uploads/2018/03/filhotes-de-cachorro-200x200.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col p-3 text-center">Animal 2
                <img src="https://portaldoscaesegatos.com.br/wp-content/uploads/2018/03/filhotes-de-cachorro-200x200.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col p-3 text-center">Animal 3
                <img src="https://portaldoscaesegatos.com.br/wp-content/uploads/2018/03/filhotes-de-cachorro-200x200.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col p-3 text-center">Animal 4
                <img src="https://portaldoscaesegatos.com.br/wp-content/uploads/2018/03/filhotes-de-cachorro-200x200.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col p-3 text-center">Animal 5
                <img src="https://portaldoscaesegatos.com.br/wp-content/uploads/2018/03/filhotes-de-cachorro-200x200.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
    </section>

@endsection