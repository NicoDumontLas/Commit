<?php //TODO faire la page + layout ?>
@extends('layouts.main')

@section('title')
    Matières & Notions
@endsection

@section('requestPath')
    Matières & Notions
@endsection

@section('main')
    <div class="subj-layout">
        <div class="subj-content-top">
            <div class="subj-ct-left">
                <h2>Vos matières</h2>
                <!--TODO : AFFICHER LES STATS POUR LES NOTIONS Ex : Maitrisés , en cours , total-->
            </div>
            <div class="subj-ct-right">
                <a href="{{route('subjects.create')}}">
                    <button class="btn-sign">+ Ajouter une nouvelle matière</button>
                </a>
            </div>
        </div>
        <div class="subj-content-mid">
            @foreach($subjects as $subject)
                    <div class="subject">
                        <a class="subj-overlay" href="{{ route('notions', $subject->id) }}"></a>
                        <div class="subject-infos">
                            <span
                                class="subject-colorbar"
                                style="background-color: {{ $subject->color }};">
                            </span>
                            <img class="subj-icon" src="images/subjects/icons/{{ $subject->icon_path }}.png" alt="subject icon"/>
                            <div class="subj-info-txt">
                                <h3>{{ $subject->name }}</h3>
                            </div>
                        </div>
                        <div class="subject-content">
                            <!--TODO : COMPLETER UNE FOIS LES NOTIONS FINIES-->
                            <p>TODO : STATS NOTIONS</p>
                        </div>
                        <div class="subject-actions">
                            <a href="{{ route('subjects.edit', $subject->id) }}">
                                <button class="btn-log">Edit</button>
                            </a>
                            <!--TODO : MODIFIER LES BOUTONS-->
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn-sign" type="submit" onclick="return confirm('are you sure to delete ?')"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="subj-content-bottom">
        </div>
    </div>
@endsection
