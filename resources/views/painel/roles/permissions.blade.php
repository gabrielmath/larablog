@extends('painel.templates.template')

@section('content')
    <div class="container">
        <h2>PERMISSIONS: {{ $role->name }}</h2>
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
            @forelse($permissions as $permission)
                <tr>
                    <td><a href="{{ url("/painel/permissions/$permission->id/update") }}">{{ $permission->id }}</a></td>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->label }}</td>
                    <td>
                        <a href="{{ url("/painel/permission/$permission->id/roles") }}" class="waves-effect waves-light btn red">
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