<?php //TODO faire la page + layout ?>
@extends('layouts.main')

@section('title')
    Matières
@endsection

@section('requestPath')
    Matières
@endsection

@section('main')
    <div class="subj-layout">
        <div class="subj-content-top">
            <h2>Ajouter un nouvelle matière</h2>
        </div>
        <div class="subj-content-mid-create">
            <form method="post" action="{{ route('subjects.update', $subject->id) }}">
                @csrf
                @method('PUT')
                <div class="subj-input-info">
                    <h3>Nom</h3>
                    <input name="name" id="name" value="{{old('name', $subject->name)}}"/>
                </div>

                <h3>Couleur</h3>
                <div class="subj-input-color">
                    <label class="c1" for="c1">
                        <input type="radio" id="c1" name="color" value="#FF0000"
                            {{ old('color', $subject->color) === '#FF0000' ? 'checked' : '' }}>
                    </label>

                    <label class="c2" for="c2">
                        <input type="radio" id="c2" name="color" value="#FF7F00"
                            {{ old('color', $subject->color) === '#FF7F00' ? 'checked' : '' }}>
                    </label>

                    <label class="c3" for="c3">
                        <input type="radio" id="c3" name="color" value="#FFD700"
                            {{ old('color', $subject->color) === '#FFD700' ? 'checked' : '' }}>
                    </label>

                    <label class="c4" for="c4">
                        <input type="radio" id="c4" name="color" value="#ADFF2F"
                            {{ old('color', $subject->color) === '#ADFF2F' ? 'checked' : '' }}>
                    </label>

                    <label class="c5" for="c5">
                        <input type="radio" id="c5" name="color" value="#00C853"
                            {{ old('color', $subject->color) === '#00C853' ? 'checked' : '' }}>
                    </label>

                    <label class="c6" for="c6">
                        <input type="radio" id="c6" name="color" value="#00CED1"
                            {{ old('color', $subject->color) === '#00CED1' ? 'checked' : '' }}>
                    </label>

                    <label class="c7" for="c7">
                        <input type="radio" id="c7" name="color" value="#00BFFF"
                            {{ old('color', $subject->color) === '#00BFFF' ? 'checked' : '' }}>
                    </label>

                    <label class="c8" for="c8">
                        <input type="radio" id="c8" name="color" value="#1E3A8A"
                            {{ old('color', $subject->color) === '#1E3A8A' ? 'checked' : '' }}>
                    </label>

                    <label class="c9" for="c9">
                        <input type="radio" id="c9" name="color" value="#4B0082"
                            {{ old('color', $subject->color) === '#4B0082' ? 'checked' : '' }}>
                    </label>

                    <label class="c10" for="c10">
                        <input type="radio" id="c10" name="color" value="#8A2BE2"
                            {{ old('color', $subject->color) === '#8A2BE2' ? 'checked' : '' }}>
                    </label>

                    <label class="c11" for="c11">
                        <input type="radio" id="c11" name="color" value="#FF00FF"
                            {{ old('color', $subject->color) === '#FF00FF' ? 'checked' : '' }}>
                    </label>

                    <label class="c12" for="c12">
                        <input type="radio" id="c12" name="color" value="#FF69B4"
                            {{ old('color', $subject->color) === '#FF69B4' ? 'checked' : '' }}>
                    </label>

                    <label class="c13" for="c13">
                        <input type="radio" id="c13" name="color" value="#A0522D"
                            {{ old('color', $subject->color) === '#A0522D' ? 'checked' : '' }}>
                    </label>

                    <label class="c14" for="c14">
                        <input type="radio" id="c14" name="color" value="#808080"
                            {{ old('color', $subject->color) === '#808080' ? 'checked' : '' }}>
                    </label>

                    <label class="c15" for="c15">
                        <input type="radio" id="c15" name="color" value="#D4AF37"
                            {{ old('color', $subject->color) === '#D4AF37' ? 'checked' : '' }}>
                    </label>
                </div>

                <h3>Icons</h3>
                <div class="subj-input-icon">
                    <div class="subj-input-icon-top">
                        <label for="i1">
                            <input type="radio" id="i1" name="icon_path" value="algorithm"
                                {{ old('icon_path', $subject->icon_path) === 'algorithm' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/algorithm.png')}}"/>
                        </label>

                        <label for="i2">
                            <input type="radio" id="i2" name="icon_path" value="calculator"
                                {{ old('icon_path', $subject->icon_path) === 'calculator' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/calculator.png')}}"/>
                        </label>

                        <label for="i3">
                            <input type="radio" id="i3" name="icon_path" value="coding"
                                {{ old('icon_path', $subject->icon_path) === 'coding' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/coding.png')}}"/>
                        </label>

                        <label for="i4">
                            <input type="radio" id="i4" name="icon_path" value="compliant"
                                {{ old('icon_path', $subject->icon_path) === 'compliant' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/compliant.png')}}"/>
                        </label>

                        <label for="i5">
                            <input type="radio" id="i5" name="icon_path" value="cyber-attack"
                                {{ old('icon_path', $subject->icon_path) === 'cyber-attack' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/cyber-attack.png')}}"/>
                        </label>

                        <label for="i6">
                            <input type="radio" id="i6" name="icon_path" value="database-file"
                                {{ old('icon_path', $subject->icon_path) === 'database-file' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/database-file.png')}}"/>
                        </label>

                        <label for="i7">
                            <input type="radio" id="i7" name="icon_path" value="economic"
                                {{ old('icon_path', $subject->icon_path) === 'economic' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/economic.png')}}"/>
                        </label>

                        <label for="i8">
                            <input type="radio" id="i8" name="icon_path" value="eng"
                                {{ old('icon_path', $subject->icon_path) === 'eng' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/eng.png')}}"/>
                        </label>
                    </div>
                    <div class="subj-input-icon-btm">
                        <label for="i9">
                            <input type="radio" id="i9" name="icon_path" value="lesson"
                                {{ old('icon_path', $subject->icon_path) === 'lesson' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/lesson.png')}}"/>
                        </label>

                        <label for="i10">
                            <input type="radio" id="i10" name="icon_path" value="local-area-network"
                                {{ old('icon_path', $subject->icon_path) === 'local-area-network' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/local-area-network.png')}}"/>
                        </label>

                        <label for="i11">
                            <input type="radio" id="i11" name="icon_path" value="networking"
                                {{ old('icon_path', $subject->icon_path) === 'networking' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/networking.png')}}"/>
                        </label>

                        <label for="i12">
                            <input type="radio" id="i12" name="icon_path" value="online-lesson"
                                {{ old('icon_path', $subject->icon_path) === 'online-lesson' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/online-lesson.png')}}"/>
                        </label>

                        <label for="i13">
                            <input type="radio" id="i13" name="icon_path" value="protected"
                                {{ old('icon_path', $subject->icon_path) === 'protected' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/protected.png')}}"/>
                        </label>

                        <label for="i14">
                            <input type="radio" id="i14" name="icon_path" value="stamp"
                                {{ old('icon_path', $subject->icon_path) === 'stamp' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/stamp.png')}}"/>
                        </label>

                        <label for="i15">
                            <input type="radio" id="i15" name="icon_path" value="system"
                                {{ old('icon_path', $subject->icon_path) === 'system' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/system.png')}}"/>
                        </label>

                        <label for="i16">
                            <input type="radio" id="i16" name="icon_path" value="tools"
                                {{ old('icon_path', $subject->icon_path) === 'tools' ? 'checked' : '' }}>
                            <img class="isubj" src="{{ asset('images/subjects/icons/tools.png')}}"/>
                        </label>
                    </div>
                </div>
                <div class="subj-input-btns">
                    <a class="btn-log" href="{{ url()->previous() }}">retour</a>
                    <button class="btn-sign" type="submit">Modifier</button>
                </div>
            </form>
        </div>
        <div class="subj-content-bottom">

        </div>
    </div>
@endsection
