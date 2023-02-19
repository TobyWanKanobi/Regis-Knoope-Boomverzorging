@extends('admin.layouts.layout')
@section('content')
<div class="container">
    <p>
        <h1>Offer</h1>
</p>
</div>
<div class="container">
<div class="alert alert-danger print-error-msg" style="display:none">
   <ul></ul>
</div>
<form id="offer-request-form" action="/offers" method="POST">
   @csrf
   @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
   <div class="row">
      {{$offer->firstname}} {{$offer->lastname}}
   </div>
   <div class="row">
            {{$offer->street}} {{$offer->house_number}} {{$offer->street_addition}}
   </div>
   <div class="row">
      <div class="col-6">
         <div class="mb-3">
            <label for="city" class="form-label">{{$offer->city}}</label>
            <input type="text" name="city" class="form-control" aria-describedby="emailHelp">
         </div>
      </div>
      <div class="col-6">
         <div class="mb-3">
            <label for="zip_code" class="form-label">{{$offer->zip_code}}</label>
            <input type="text" name="zip_code" class="form-control" aria-describedby="emailHelp">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
         <div class="mb-3">
            <label for="email" name="email" class="form-label">{{$offer->email}}</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
      </div>
      <div class="col-6">
         <div class="mb-3">
            <label for="phone_number" class="form-label">{{$offer->phone_number}}</label>
            <input type="text" name="phone_number" class="form-control" />
         </div>
      </div>
   </div>
   <div class="mb-3">
      <label for="task_description" class="form-label">{{$offer->task_description}}</label>
      <textarea name="task_description" class="form-control"></textarea>
   </div>
   <button type="submit" class="btn btn-primary">Aanvragen</button>
</form>
</div>
@endsection