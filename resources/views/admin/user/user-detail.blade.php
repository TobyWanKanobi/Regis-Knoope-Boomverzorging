@extends('admin.layouts.layout')
@section('content')
    <div class="container">
      <h1>Gebruiker</h1>
        <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-primary">Wijzigen</a>
        Name: {{ $user->name }} <br />
        E-mail: {{ $user->email }} <br />
        Created at: {{ $user->created_at }}<br />
        Last modified: {{ $user->updated_at }}
    </div>
@endsection
