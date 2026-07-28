@extends('layouts.home')

@section('title')
    Home Page
@endsection

@section('main')
    <div class="titre-centre">
        <i class="bi bi-lightning-charge"></i>
        <p class="">Conçu pour les étudiants de tout curcus</p>
    </div>
    <div class="centre section">
        <div>
            <h1 class="">Centralise ta scolarité.</h1>
            <h1 class="secondary">Avance avec méthode.</h1>
        </div>
        <div>
            <p class="text-muted">COMMIT remplace post-its, fichiers éparpillés , idées et tableurs bricolés. <br> Matières, projets, deadlines et objectifs, tout en une seule interface!</p>
        </div>
        <div class="btngrp-main">
            <button class="btn-sign">Crée mon compte <i class="bi bi-arrow-right"></i></button>
            <button class="btn-log">Se connecter</button>
        </div>

        <div>
            <img src="{{ asset('images/TempAppPage2.png') }}" alt="COMMIT template page" class="template-page">
        </div>

        <br><br><br>

        <div>
            <h2>Tout ce dont tu as besoin</h2>
            <p class="text-muted" >5 modules conçus pour couvrir tous les aspects de ta vie étudiante.</p>
            <div class="card-presentation">
                <div class="card">
                    <div>
                        <!-- TODO RAJOUTER UNE BOULE DE COULEUR -->
                        <img src=" {{ asset('images/icons/empty/dashboard.svg.svg') }} " alt="#"/>
                    </div>
                    <h6></h6>
                    <p></p>
                </div>
                <div class="card">
                    <div>
                        <!-- TODO RAJOUTER UNE BOULE DE COULEUR -->
                        <img src=" {{ asset('images/icons/empty/dashboard.svg.svg') }} " alt="#"/>
                    </div>
                    <h6></h6>
                    <p></p>
                </div>
                <div class="card">
                    <div>
                        <!-- TODO RAJOUTER UNE BOULE DE COULEUR -->
                        <img src=" {{ asset('images/icons/empty/dashboard.svg.svg') }} " alt="#"/>
                    </div>
                    <h6></h6>
                    <p></p>
                </div>
                <div class="card">
                    <div>
                        <!-- TODO RAJOUTER UNE BOULE DE COULEUR -->
                        <img src=" {{ asset('images/icons/empty/dashboard.svg.svg') }} " alt="#"/>
                    </div>
                    <h6></h6>
                    <p></p>
                </div>
                <div class="card">
                    <div>
                        <!-- TODO RAJOUTER UNE BOULE DE COULEUR -->
                        <img src=" {{ asset('images/icons/empty/dashboard.svg.svg') }} " alt="#"/>
                    </div>
                    <h6></h6>
                    <p></p>
                </div>
                <div class="card">
                    <div>
                        <!-- TODO RAJOUTER UNE BOULE DE COULEUR -->
                        <img src=" {{ asset('images/icons/empty/dashboard.svg.svg') }} " alt="#"/>
                    </div>
                    <h6></h6>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
@endsection
