@extends('layouts.template')
@section('content')

<h3> Les musiques </h3>

@include('partials._songs', ['photos' => $photos])

<h3> Les utilisateurs </h3>

@foreach($users as $u)
        <li><a href="/utilisateur/{{$u->id}}">{{$u->name}}</a></li>
        <span>{{$u->theyLikeMe()->count()}}</span>
        <span>{{$u->ILikeThem()->count()}}</span>
        <span>{{$u->songs()->count()}}</span>
@endforeach

@endsection
