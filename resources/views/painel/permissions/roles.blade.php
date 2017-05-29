@extends('painel.templates.template')

@section('content')
    <div class="container">
        <h2>ROLES: {{ $permission->name }}</h2>
        <table class="highlight striped bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Label</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($roles as $role)
                <tr>
                    <td><a href="{{ url("/painel/permissions/$role->id/update") }}">{{ $role->id }}</a></td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->label }}</td>
                    <td>
                        <a href="{{ url("/painel/permission/$role->id/roles") }}" class="waves-effect waves-light btn red">
                            <i class="material-icons">lock_open</i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Nenhuma permissão cadastrada</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection