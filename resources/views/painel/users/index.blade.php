@extends('painel.templates.template')

@section('content')
    <div class="container">
        <h2>Listagem De Permissiões</h2>
        <table class="highlight striped bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                @can('view_post', $user)
                    <tr>
                        <td><a href="{{ url("/roles/$user->id/update") }}">{{ $user->id }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ url("/role/$user->id/permissions") }}" class="waves-effect waves-light btn red">
                                <i class="material-icons">lock_open</i>
                            </a>
                        </td>
                    </tr>
                @endcan
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Nenhuma permissão cadastrada</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection