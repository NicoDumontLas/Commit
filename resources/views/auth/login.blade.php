@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('main')
    <div class="auth-form">
        <div class="log-form-header">
            <h2>Bon retour !</h2>
            <p>Connecte-toi pour retrouver ton espace</p>
        </div>
        <div class="log-form-main">
            <form method="post" action=" {{ route('login.attempt') }} ">
                @csrf
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="log-form-mail">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" minlength="6" maxlength="254" placeholder="lea.moreau@student.fr" value="lea.moreau@student.fr" required/>
                </div>
                <div class="log-form-pass">
                    <label for="password">Mot de passe</label>  <!-- TODO ENLEVER LES values POUR LA LOG RAPPIDE ; blade ! ancien : old('password') -->
                    <input type="password" id="password" name="password" minlength="12" maxlength="128" placeholder="••••••••" value="passwordtest" required/>
                </div>
                <button class="btn-sign" type="submit">Se connecter<i class="bi bi-arrow-right"></i></button>
            </form>
        </div>
        <div class="log-form-footer">
            <p>Pas encore de compte ?</p>
            <a href="{{ route('register') }}">S'inscrire</a>
        </div>
    </div>
@endsection
