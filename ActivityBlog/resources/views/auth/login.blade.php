@extends('layouts.app')

@section('content')


        <main class="form-signin">
                    <form method="POST" action="{{ route('login') }}">
                        <!--  logo -->
                        <img class="logo" width="72" height="57" >
                        @csrf
                        <h1 class="h3 mb-3 nadpis-normal">Welcome & sign in</h1>
                        <!--  vstupy od uzivatela  -->
                        <label for="inputEmail" class="visually-hidden">Email address</label>
                        <input id="email" placeholder="Email address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="inputPassword" class="visually-hidden">Password</label>
                                <input id="password"  placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                    <!--  pamataj si ma  -->
                                <div class="checkbox mb-3">
                                    <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>


                                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        <!--  zavolaj metodu ked som zabudol heslo ak ju mame vytvorenu, to znamena ze je dostupna  -->
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    <!--  zavolaj metodu ked som zabudol heslo ak ju mame vytvorenu, to znamena ze je dostupna , registracia noveho uzivatela -->
                        @if (Route::has('register'))
                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Are you new ?') }}
                            </a>
                        @endif


                    </form>
        </main>


@endsection
