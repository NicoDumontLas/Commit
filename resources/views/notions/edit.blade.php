<!-- ATTENTION PAGE GENERER PAR CLAUDE POUR TESTS DE RESOLUTIONS DE BUGS-->

@extends('layouts.main')

@section('title')
    Matières & Notions
@endsection

@section('requestPath')
    <span id="spanname">Matières & Notions  ></span> <span>Modifier une notion</span>
@endsection

@section('main')
    <div class="notions-create-layout">
        <div class="notions-create-top">
            <a href="{{ url()->previous() }}"><i class="bi bi-arrow-left"></i>Matières</a>
        </div>
        <div class="notions-create-form">
            <form method="POST" action="{{ route('subjects.notions.update', [$subject,$notion]) }}">
                @csrf
                @method('PUT')
                <h3>Modifier la notion :</h3>

                <label class="notions-create-label" for="section_name">Section</label>
                <input
                    type="text"
                    class="notions-create-input"
                    id="section_name"
                    name="section_name"
                    list="sections-list"
                    placeholder="Choisir ou créer une section"
                    value="{{ old('section_name', $notion->section->name) }}"
                />
                <datalist id="sections-list">
                    @foreach($subject->sections as $section)
                        <option value="{{ $section->name }}">
                    @endforeach
                </datalist>

                <label class="notions-create-label" for="name">Nom</label>
                <input type="text" class="notions-create-input" id="name" name="name" value="{{ $notion->name }}"/>

                <label class="notions-create-label" for="note">Note</label>
                <input type="text" class="notions-create-input" id="note" name="note" value="{{ $notion->note }}"/>

                <label class="notions-create-label" for="ressource">Ressource</label>
                <input type="text" class="notions-create-input" id="ressource" name="ressource" value="{{ $notion->ressource }}"/>

                <label class="notions-create-label" for="status">Status</label>
                <select class="notions-create-input" name="status" id="status">
                    <option value="Maîtrisé" {{ $notion->status === 'Maîtrisé' ? 'selected' : '' }} >Maîtrisé</option>
                    <option value="En cours" {{ $notion->status === 'En cours' ? 'selected' : '' }} >En cours</option>
                    <option value="À voir" {{ $notion->status === 'À voir' ? 'selected' : '' }} >À voir</option>
                </select>

                <button class="btn-sign" type="submit">Modifier</button>
            </form>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
