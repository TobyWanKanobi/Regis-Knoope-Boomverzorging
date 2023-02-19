@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <p>
        <h1>Gebruikers</h1>
        </p>
    </div>
    <div class="container">
        <a href="/admin/users/create" class="btn btn-success"> Niewe gebruiker</a>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Gebruiker</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Aangemaakt</th>
                    <th scope="col">Laatst Geupdate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><a href="/admin/users/{{ $user->id }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-primary">Wijzigen</a>
                            <button class="btn btn-danger" data-rk-action="DELETE_USER"
                                data-rk-userid="{{ $user->id }}">Verwijderen</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
