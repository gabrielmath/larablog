@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    @forelse($posts as $post)
        @can('view_post', $post)
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->description }}</p>
                <strong><small>Author: {{ $post->user->name }}</small></strong>
                <br>
                <a href="{{ url("/post/$post->id/update") }}">Editar</a>
                <hr>
        @endcan
        @empty
            <p>Nenhum post cadastrado</p>
    @endforelse
</div>
@endsection
