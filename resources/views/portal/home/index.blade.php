@extends('painel.templates.template')

@section('content')
    <div class="container">
        <h2>Listagem De Posts</h2>
        <table class="highlight striped bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                @can('view_post', $post)
                    <tr>
                        <td><a href="{{ url("/post/$post->id/update") }}">{{ $post->id }}</a></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->user->name }}</td>
                    </tr>
                @endcan
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Nenhum post cadastrado</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{--@forelse($posts as $post)
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
        @endforelse--}}
    </div>
@endsection