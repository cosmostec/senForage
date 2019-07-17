@extends('layout.default')
@section('title')
     Liste Gestionnaires
@endsection
@section('page')
<a class="navbar-brand" href="#">Liste des Gestionnaires</a>
@endsection

@section('content')
    @include('layout.gestionnaire.gestionnaires_list')
@endsection