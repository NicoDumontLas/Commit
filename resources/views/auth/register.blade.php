@extends('layouts.auth')

@section('title')
    Register
@endsection

@section('main')
    <div class="auth-form">
        <div class="reg-form-header">
            <h2>Créer un compte</h2>
            <p>Rejoins COMMIT et organise ta scolarité</p>
        </div>
        <div class="reg-form-main">
            <form method="post" action="{{ route('register.store') }}">
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
                <div class="formflex">
                    <div class="formflex-left">
                        <label for="first_name">Prénom</label>
                        <input type="text" id="first_name" name="first_name" minlength="2" maxlength="100" placeholder="Léa" value="{{ old('firstname') }}" required/>
                    </div>
                    <div class="formflex-right">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" minlength="2" maxlength="100" placeholder="Moreau" value="{{ old('name') }}" required/>
                    </div>
                </div>
                <div class="reg-form-mail">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" minlength="6" maxlength="254" placeholder="lea.moreau@student.fr" value="{{ old('email') }}" required/>
                </div>
                <div class="reg-form-pass">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" minlength="12" maxlength="128" placeholder="••••••••" value="{{ old('password') }}" required/>
                </div>
                <button class="btn-sign" type="submit">Créer mon compte <i class="bi bi-arrow-right"></i></button>
            </form>
        </div>
        <div class="reg-form-footer">
            <p>Déjà un compte ?</p>
            <a href="{{ route('login') }}">Se connecter</a>
        </div>
    </div>
@endsection
