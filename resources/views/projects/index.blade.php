<?php //TODO faire la page + layout ?>
@extends('layouts.main')

@section('title')
    Projets & Taches
@endsection

@section('requestPath')
    Projets & Taches
@endsection

@section('main')
    <div class="proj-layout">
        <div class="proj-content-top">
            <div class="proj-ct-left">
                <h2>Vos Projets</h2>
            </div>
            <div class="proj-ct-left">
                <a href="{{ route("projects") }}">
                    <button>
                    </button>
                </a>
            </div>
        </div>
        <div class="proj-content-mid">

        </div>
        <div class="proj-content-bot">

        </div>
    </div>
@endsection
