@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <h1>Gebruiker aanmaken</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/admin/users" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">User</label>
                <input type="text" name="name" class="form-control"
                    @isset($user)
                value="{{ $user->name }}"
            @endisset />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control"
                    @isset($user)
                value="{{ $user->email }}"
            @endisset />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Wachtwoord</label>
                <input type="password" name="password" class="form-control"
                    @isset($user)
                value="{{ $user->password }}"
            @endisset />
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
