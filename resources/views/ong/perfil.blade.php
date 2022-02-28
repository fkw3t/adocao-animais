@extends('layouts.header-footer')

@section('title', 'Cadastro de Usuário')

@section('content')

    <section class="perfil row d-flex justify-content-center my-5">

        <div class="foto col-4">
        <img class="rounded-circle" src="{{$user->profile ?? 'https://www.fiscalti.com.br/wp-content/uploads/2021/02/default-user-image.png'}}" alt="" width="350" height="350">
        </div>

        <div id="usuarioDesc" class="perfil_texto col-4" >
        
            <h3><strong>{{$user->name}}</strong></h3>
            <span>{{$user->address->city ?? 'Cidade não cadastrada'}}</span>
            <br>
            <span>{{$user->phone_number}}</span>
            <br>
            <span>{{$user->email}}</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error assumenda vero quis in atque similique excepturi, corporis eos expedita consequatur ipsam totam nemo minus ipsum debitis numquam blanditiis, ducimus tempora.</p>
                        
        </div> 
        <div class="container col-6 d-grid gap-2 d-md-flex justify-content-md-end my-5">

        <form action="" method="POST">
            @csrf
            <button class="btn btn-outline btn-lg me-md-2" type="submit">Animais Cadastrados</button>
        </form>
        
        <form action="{{route('ong.edit', ['ong' => auth()->guard('ong')->user()])}}" method="GET">
            @csrf
            <button class="btn btn-outline btn-lg me-md-2" type="submit">Editar Organização</button>
        </form>

        <form action="">
            @csrf
            @method('DELETE')
            <button class="btn bbtn-outline btn-lg" type="submit">Excluir Conta</button>
        </form>
        </div>
    </section>

@endsection