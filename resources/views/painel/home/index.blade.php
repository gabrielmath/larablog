@extends('painel.templates.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s3">
                <a href=""><strong>Usuários</strong> - {{ $totalUsers }}</a>
            </div>
            <div class="col s3">
                <a href=""><strong>Regras</strong> - {{ $totalRoles }}</a>
            </div>
            <div class="col s3">
                <a href=""><strong>Permissões</strong> - {{ $totalPermissions }}</a>
            </div>
            <div class="col s3">
                <a href=""><strong>Posts</strong> - {{ $totalPosts }}</a>
            </div>
        </div>
    </div>
@endsection