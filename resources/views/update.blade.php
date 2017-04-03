@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <strong><small>Author: {{ $post->user->name }}</small></strong>
    <br>
    <small><a href="{{ url("/home") }}">Voltar</a></small>
</div>
@endsection
