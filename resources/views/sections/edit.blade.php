<?php //TODO faire la page + layout ?>
@extends('layouts.main')

@section('title')
    Matières & Notions
@endsection

@section('requestPath')
    Matières & Notions
@endsection

@section('main')
    <!--TODO : RAJOUTER UN FORM POUR SIMPLEMENT MODIFIER LE NOM DU SUBJECT ET UPDATE-->
    <form action="{{ route('sections.update',$section) }}" method="POST" >
        @csrf
        @method('PUT')
        <label for="name">Nom</label>
        <input type="text" class="notions-create-input" id="name" name="name" value="{{ $section->name }}"/>
        <div>
            <a href="{{ url()->previous() }}">retour</a>
            <button type="submit" class="btn-sign" >Enregistrer</button>
        </div>
    </form>
@endsection
