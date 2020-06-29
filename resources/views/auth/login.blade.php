
@extends('layouts.app')
@section('content')

    <section class="login-content">

        <div class="logo">
            <h1>Help</h1>
        </div>


            <div class="login-box">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
                        @csrf
                        <div class="form-group">
                            <label for="email" class="control-label" >{{ __('E-MAIL') }}</label>
                            <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label class="control-label">{{ __('SENHA') }}</label>

                            <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>-->
                            <!--<input class="form-control" type="password" placeholder="Senha">-->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <div class="utility">
                                <div class="animated-checkbox">

                                        <!--<input type="checkbox"><span class="label-text">Lembre Me</span>-->
                                        <!--<input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label  class="checkbox" for="remember">
                                            {{ __('Lembrar-Me') }}
                                    </label>-->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox"><span class="label-text">Lembre-Me</span>
                                        </label>
                                    </div>
                        </div>
                            @if (Route::has('password.request'))
                                <!--<p class="semibold-text mb-2"><a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}-->


                                    <p class="semibold-text mb-2"><a class="btn btn-link" href="{{ route('password.request') }}" data-toggle="flip">
                                            {{ __('Esqueceu a Senha?') }}

                                        </a></p>


                                @endif



                            </div>
                        </div>




                        <div class="form-group btn-container">
                            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i> {{ __('Entrar') }}</button>
                        </div>


                    </form>
                </div>

        @extends('layouts.app')
    </section>


@endsection
