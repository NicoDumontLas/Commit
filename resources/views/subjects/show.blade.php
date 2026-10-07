<?php
//TODO faire la page + layout ?>
@extends('layouts.main')

@section('title')
    Matières & Notions
@endsection

@section('requestPath')
    <!--TODO : RAJOUTER OU MODIFIER POUR LE CHEMIN DEPUIS LA NAVBAR CELON LE NOM OU ID-->
    <span id="spanname">Matières & Notions  ></span> {{ $subject->name }}
@endsection

@section('main')
    <div class="section-layout">
        <div class="sect-top">
            <div class="sect-top-left"><a href="{{ route('subjects.index') }}"><i class="bi bi-arrow-left"></i> Matières</a>
            </div>
        </div>
        <div class="sect-subj-info">
            <div class="sect-subj-left">
                <span
                    class="subject-info-colorbar"
                    style="background-color: {{ $subject->color }};">
                </span>
            </div>
            <div class="sect-subj-right">
                <div class="sect-subj-right-top">
                    <img class="subj-icon" src="../images/subjects/icons/{{ $subject->icon_path }}.png"
                         alt="subject icon"/>
                    <h3>{{ $subject->name }}</h3>
                </div>
                <div class="sect-subj-right-rest">
                    @foreach($sections as $section)
                        @foreach($section->notions as $notion)
                            <p>{{ $notion->status }}</p>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        <div class="sections">
            <div class="sect-show-top">
                <div class="sect-show-left">
                    <p>Clique sur le status d'une notion pour la faire avancer</p>
                </div>
                <div class="sect-show-right">
                    <a href="{{ route('subjects.notions.create', $subject->id) }}" class="btn-sign">+ Ajouter une notion</a>
                </div>
            </div>
            <div class="sect-show-content">
                @forelse($sections as $section)
                    <details class="sectiondiv">
                        <summary class="sum-sect-layout">
                            <div class="sum-sect-left">
                                {{ $section->name }}
                            </div>
                            <div class="sum-sect-right">
                                <div class="sct-info-right2">
                                    <a href="{{ route('sections.edit', $section) }}" ><i class="bi bi-pencil"></i></a><!--TODO : RAJOUTER LIEN POUR EDIT NOTIONS-->
                                    <form action="{{ route('sections.destroy', $section) }}" method="POST"><!--TODO : RAJOUTER LIEN POUR DESTROY NOTIONS-->
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-not"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </div>
                        </summary>
                        <div class="section-more">
                            @foreach($section->notions as $notion)
                                <div class="section-info">
                                    <div class="sct-info-left">
                                        <button class="btn-status">{{ $notion->status }}</button>
                                        <div>
                                            <h4>{{ $notion->name }}</h4>
                                            <p>{{ $notion->note }}</p>
                                        </div>
                                    </div>
                                    <div class="sct-info-right">
                                        <div class="sct-info-right1">
                                            <a href="{{ url('https://' . $notion->ressource) }}"><i class="bi bi-box-arrow-up-right"></i>Ressource</a>
                                        </div>
                                        <div class="sct-info-right2">
                                            <a href="{{ route('subjects.notions.edit', [$subject,$notion]) }}" ><i class="bi bi-pencil"></i></a><!--TODO : RAJOUTER LIEN POUR EDIT NOTIONS-->
                                            <form action="{{ route('subjects.notions.destroy', [$subject,$notion]) }}" method="POST"><!--TODO : RAJOUTER LIEN POUR DESTROY NOTIONS-->
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-not"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </details>
                @empty

                @endforelse
            </div>
        </div>
    </div>
@endsection
