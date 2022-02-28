@extends('layouts.header-footer')

@section('title', 'Cadastro de Usuário')

@section('content')

    <section class="pt-5">
        <div class="container pt-5">
            <form method="POST" action="{{route('user.update', ['user' => auth()->user()])}}">
                @method('PUT')
                @csrf

                <div class="row justify-content-md-center mb-3">
                    <div class="col-6">
                        <h4>Personal Information</h4>
                    </div>
                </div>

                <div class="row justify-content-md-center">                    
                    <div class="col-4">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <input class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nicolas Cage" value="{{$user->name}}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>   

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">User</label>
                        <input class="form-control form-control-sm @error('user') is-invalid @enderror" type="text" name="user" placeholder="user123" value="{{$user->user}}">
                        @error('user')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="row justify-content-md-center mt-3">
                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">CPF</label>
                        <input class="form-control form-control-sm @error('document') is-invalid @enderror" type="text" name="document" placeholder="11122233344" value="{{$user->document}}">
                        @error('document')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Birthdate</label>
                        <input class="form-control form-control-sm @error('birth_date') is-invalid @enderror" type="date" name="birth_date" value="{{$user->birth_date}}">
                        @error('birth_date')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <input class="form-control form-control-sm @error('phone_number') is-invalid @enderror" type="text" name="phone_number" placeholder="(11) 9 9999-1235" value="{{$user->phone_number}}">
                        @error('phone_number')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>                    
                </div>

                <div class="row justify-content-md-center mt-5 mb-3">
                    <div class="col-6">
                        <h4>Location Information</h4>
                    </div>
                </div>

                <div class="row justify-content-md-center mt-3">
                    <div class="col-4">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <input class="form-control form-control-sm @error('address') is-invalid @enderror" type="text" name="address" placeholder="Rua Estrela Brilhante, Bairro Estrela do Oriente" value="{{$user->address->address ?? ''}}">
                        @error('address')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Postcode</label>
                        <input class="form-control form-control-sm @error('postcode') is-invalid @enderror" type="text" name="postcode" placeholder="30580120" value="{{$user->address->postcode ?? ''}}">
                        @error('postcode')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>                
                </div>

                <div class="row justify-content-md-center mt-3">
                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">City</label>
                        <input class="form-control form-control-sm @error('state') is-invalid @enderror" type="text" name="city" placeholder="Campinas" value="{{$user->address->city ?? ''}}">
                        @error('city')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">State</label>
                        <input class="form-control form-control-sm @error('state') is-invalid @enderror" type="text" name="state" placeholder="São Paulo" value="{{$user->address->state ?? ''}}">
                        @error('state')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Country</label>
                        <input class="form-control form-control-sm @error('country') is-invalid @enderror" type="text" name="country" placeholder="Brasil" value="{{$user->address->country ?? ''}}">
                        @error('country')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>                    
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-6 text-end">
                        <button class="btn btn-secondary btn-sm my-3" type="submit">Submit</button>
                    </div>
                </div>
                
            </form>        
        </div>
    </section>

@endsection

