@extends('layouts.main')


@section('title')
    Dashboard
@endsection

@section('requestPath')
    {{ request()->routeIs('dashboard') ? 'Dashboard' : '' }}
@endsection

@section('main')
    <!--
        TODO : RATJOUTER CONTENU UNE FOIS TOUTES LES AUTRES PAGES FAITES
    -->
@endsection

