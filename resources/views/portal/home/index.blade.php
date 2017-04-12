@extends('painel.templates.template')

@section('content')
    <div class="container">
        @forelse($posts as $post)
            @can('view_post', $post)
                <h2>{{ $post->title }}</h2>
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