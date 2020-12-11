@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
    
    <img src="/images/tdn-logo.jpg" alt="TDN Logo">

    <p>Built with &hearts; by LES TEACHER DU NET.</p>

    <p><a href="{{ route('home')}} ">Revenir à la page d'accueil</a></p>    
@endsection