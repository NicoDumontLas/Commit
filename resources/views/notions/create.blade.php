<?php //TODO faire la page + layout ?>
@extends('layouts.main')

@section('title')
    Matières & Notions
@endsection

@section('requestPath')
    <span id="spanname">Matières & Notions  ></span> <span>Ajouter une notion</span>
@endsection

@section('main')
    <div class="notions-create-layout">
        <div class="notions-create-top">
            <a href="{{ url()->previous() }}"><i class="bi bi-arrow-left"></i>Matières</a>
        </div>
        <div class="notions-create-form">
            <form method="POST" action="{{ route('subjects.notions.store', $subject->id) }}">
                @csrf
                <h3>Ajouter une nouvelle notion :</h3>

                <label class="notions-create-label" for="section_name">Section</label>
                <input
                    type="text"
                    class="notions-create-input"
                    id="section_name"
                    name="section_name"
                    list="sections-list"
                    placeholder="Choisir ou créer une section"
                    value="{{ old('section_name') }}"
                />
                <datalist id="sections-list">
                    @foreach($subject->sections as $section)
                        <option value="{{ $section->name }}">
                    @endforeach
                </datalist>

                <label class="notions-create-label" for="name">Nom</label>
                <input type="text" class="notions-create-input" id="name" name="name" value="{{ old('name') }}"/>

                <label class="notions-create-label" for="note">Note</label>
                <input type="text" class="notions-create-input" id="note" name="note" value="{{ old('note') }}"/>

                <label class="notions-create-label" for="ressource">Ressource</label>
                <input type="text" class="notions-create-input" id="ressource" name="ressource" value="{{ old('ressource') }}"/>

                <label class="notions-create-label" for="status">Status</label>
                <select class="notions-create-input" name="status" id="status" >
                    <option value="">--Choisir un status--</option>
                    <option value="Maîtrisé">Maîtrisé</option>
                    <option value="En cours">En cours</option>
                    <option value="À voir">À voir</option>
                </select>

                <button class="btn-sign" type="submit">Ajouter</button>
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
