@extends('layouts.header-footer')

@section('content')

    <section class="pt-5">
        <div class="container pt-5">
            <form method="POST" action="{{route('auth.login', ['provider' => $provider])}}">
                @csrf

                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <h4>Login</h4>
                    </div>
                </div>

                <div class="row justify-content-md-center mt-3">
                    <div class="col-6">
                        <label class="col-sm-2 col-form-label">E-mail</label>
                        <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" name="email" placeholder="someemail@email.com">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-md-center mt-3">
                    <div class="col-6">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>        
                </div>

                <div class="row justify-content-md-center mt-3">
                    <div class="col-6 text-end">
                        <button class="btn btn-secondary btn-sm mt-3" type="submit">Submit</button>
                    </div>
                </div>
                
            </form>
        </div>
    </section>

@endsection