@extends('layouts.template')
@section('content')

<h1> Bienvenue chez {{$user->name}}</h1>

@auth
        @if(Auth::id() != $user->id)
            @if(Auth::user()->ILikeThem->contains($user->id))
                <a href="/suivre/{{$user->id}}">Suivi par moi</a>
            @else
                <a href="/suivre/{{$user->id}}">Pas du tout suivi par moi</a>
            @endif
        @endif
    @endauth

<h2> {{$user->ILikeThem()->count()}}<span> Abonnements </span> </h2>
<h2> {{$user->theyLikeMe()->count()}}<span> Abonnés </span> </h2>
<h2>Propriétaire de {{$user->songs()->count()}} chansons</h2>

<h3> Mes chansons </h3>

@include("partials._songs", ["photos" => $user->songs])

<audio controls id="audio">

@endsection