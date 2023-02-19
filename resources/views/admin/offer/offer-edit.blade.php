@extends('admin.layouts.layout')
@section('content')
<h1>Offerte wijzigen</h1>
<div id="offer-request-form">
   <div class="alert alert-danger print-error-msg" style="display:none">
      <ul></ul>
   </div>
   <form action="/admin/offers/{{$offer->offer_id}}" method="POST">
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
      <input type="hidden" name="_method" class="form-control" value="PUT">
      <input type="hidden" name="offer_id" class="form-control" value="{{$offer->offer_id}}">
      <div class="row">
         <div class="col-2">
            <div class="mb-2">
               <label for="firstname" class="form-label">Voornaam</label>
               <input type="text" name="firstname" class="form-control" value="{{$offer->firstname}}">
            </div>
         </div>
         <div class="col-2">
            <div class="mb-2">
               <label for="lastname" class="form-label">Achternaam</label>
               <input type="text" name="lastname" class="form-control" value="{{$offer->lastname}}" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-3">
            <div class="mb-3">
               <label for="street" class="form-label">Straat</label>
               <input type="text" name="street" class="form-control" value="{{$offer->street}}" />
            </div>
         </div>
         <div class="col-1">
            <div class="mb-3">
               <label for="house_number" class="form-label">Huisnummer</label>
               <input type="text" name="house_number" class="form-control" value="{{$offer->house_number}}">
            </div>
         </div>
         <div class="col-1">
            <div class="mb-3">
               <label for="street_addition" class="form-label">Toevoeging</label>
               <input type="text" name="street_addition" class="form-control" value="{{$offer->street_addition}}">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-3">
            <div class="mb-3">
               <label for="city" class="form-label">Woonplaats</label>
               <input type="text" name="city" class="form-control" value="{{$offer->city}}">
            </div>
         </div>
         <div class="col-1">
            <div class="mb-3">
               <label for="zip_code" class="form-label">Postcode</label>
               <input type="text" name="zip_code" class="form-control" value="{{$offer->zip_code}}">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-2">
            <div class="mb-3">
               <label for="email" name="email" class="form-label">Email address</label>
               <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$offer->email}}">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
         </div>
         <div class="col-2">
            <div class="mb-3">
               <label for="phone_number" class="form-label">Telefoon</label>
               <input type="text" name="phone_number" class="form-control" value="{{$offer->phone_number}}" />
            </div>
         </div>
      </div>
      <div class="mb-3">
         <label for="task_description" class="form-label">Opdrachtbeschrijving</label>
         <textarea name="task_description" class="form-control">{{$offer->task_description}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Opslaan</button>
   </form>
</div>
@endsection