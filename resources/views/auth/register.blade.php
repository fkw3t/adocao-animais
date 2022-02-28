@extends('layouts.header-footer')

@section('title', 'User Registration')

@section('content')

    <section class="pt-5">
        <div class="container pt-5">
        @if($provider == "user")

            <form method="POST" action="{{route('user.store')}}">
                @csrf

                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <h4>Personal Information</h4>
                    </div>
                </div>

                <div class="row justify-content-md-center mt-3">                    
                    <div class="col-4">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <input class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nicolas Cage">
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>   

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">User</label>
                        <input class="form-control form-control-sm @error('user') is-invalid @enderror" type="text" name="user" placeholder="user123">
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
                        <input class="form-control form-control-sm @error('document') is-invalid @enderror" type="text" name="document" placeholder="11122233344">
                        @error('document')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Birthdate</label>
                        <input class="form-control form-control-sm @error('birth_date') is-invalid @enderror" type="date" name="birth_date">
                        @error('birth_date')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <input class="form-control form-control-sm @error('phone_number') is-invalid @enderror" type="text" name="phone_number" placeholder="(11) 9 9999-1235">
                        @error('phone_number')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>                    
                </div>

                <div class="row justify-content-md-center mt-3">
                    <div class="col-3">
                        <label class="col-sm-2 col-form-label">E-mail</label>
                        <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" name="email" placeholder="someemail@email.com">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="col-3">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>                
                </div>

                {{-- <h5>Location</h5> --}}

                <div class="row justify-content-md-center">
                    <div class="col-5 text-end">
                        <button class="btn btn-secondary btn-sm mt-3" type="submit">Submit</button>
                    </div>
                </div>

            </form>

        @elseif($provider == "ong")

            <form method="POST" action="{{route('ong.store')}}">
                @csrf

                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <h4>Organization Information</h4>
                    </div>
                </div>

                <div class="row justify-content-md-center mt-3">                    
                    <div class="col-3">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <input class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" name="name" placeholder="Animal Planet Organization">
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>   

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Document</label>
                        <input class="form-control form-control-sm @error('document') is-invalid @enderror" type="text" name="document" placeholder="11122233344">
                        @error('document')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <input class="form-control form-control-sm @error('phone_number') is-invalid @enderror" type="text" name="phone_number" placeholder="(11) 9 9999-1235">
                        @error('phone_number')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>  
                </div>
                
                {{-- <div class="row justify-content-md-center mt-3">
                    <div class="col-2">
                        <label class="col-sm-2 col-form-label">Birthdate</label>
                        <input class="form-control form-control-sm @error('birth_date') is-invalid @enderror" type="date" name="birth_date">
                        @error('birth_date')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div> --}}

                <div class="row justify-content-md-center mt-3">
                    <div class="col-4">
                        <label class="col-sm-2 col-form-label">E-mail</label>
                        <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" name="email" placeholder="someemail@email.com">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="col-3">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>                
                </div>

                {{-- <h5>Location</h5> --}}

                <div class="row justify-content-md-center">
                    <div class="col-5 text-end">
                        <button class="btn btn-secondary btn-sm mt-3" type="submit">Submit</button>
                    </div>
                </div>
                
            </form>    

        @endif
        </div>
    </section>
    
@endsection
