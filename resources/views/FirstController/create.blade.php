@extends("layouts.template")

@section('content')
    <h1>Ajouter une musique</h1>

    @include('_errors')

    <form method="post" action="/songs" enctype="multipart/form-data">
    @csrf
        <input type="text" name='title' placeholder='Titre de la musique' required value="{{ old('title') }}">
        <input type="file" name='image' placeholder='image' required>
        <input type="submit">
    </form>

    @endsection