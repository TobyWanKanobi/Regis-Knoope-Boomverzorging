@extends('layouts.layout')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-7">
         @include('carousel')
      </div>
      <div class="col-5 top-right">
         @include('about')
      </div>
   </div>
</div>
<div class="container contact">
   <p>
      Tel:  06-46222677 | E-mail: <a href="">info@regisknoope.nl</a>
   </p>
</div>
<div class="container">
   <div class="row justify-content-md-center">
      <div class="col-6 text-center"> 
         <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#offer-collapse" aria-expanded="false" aria-controls="collapseExample">
         Gratis offerte aanvragen
         </button>
      </div>
   </div>
</div>
<div class="container">
   <div class="row justify-content-md-center">
      <div class="col-6 text-left collapse" id="offer-collapse">
         <div class="card card-body">
            @include('offer-create')
         </div>
      </div>
   </div>
</div>
</div>
<div class="container">
   <h1>Diensten</h1>
   <p>Snoeien & Kappen</p>
   <p>Van boom naar meubel</p>
</div>
<div class="container d-flex justify-content-center">
   <div class="row">
      <div class="col">
         <div class="card" style="width: 18rem;">
            <img src="images/design/big_7483812_0_300-225.jpg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">Houten kruk</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card" style="width: 18rem;">
            <img src="images/design/big_7484251_0_300-225.jpg" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">Lamp van hout</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card" style="width: 18rem;">
            <img src="images/design/big_7554523_0_300-225.JPG" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">Ronde kruk van hout</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container d-flex justify-content-center" style="margin-top:40px;">
   <div class="row">
      <div class="col"><a href="https://www.kpb-isa.nl/"><img src="images/network/logo_kpb-isa-5b7abe01.webp" /></a></div>
      <!--<div class="col" style="background:#999999;"><a href="https://www.mijnduurzaamhout.nl/" style="background:#999999;"><img src="images/network/vv-logo.png"/></a></div>-->
      <div class="col"><a href="https://www.mijnduurzaamhout.nl/"><img src="images/network/logo-steenloper.png"/></a></div>
      <div class="col"><a href="https://www.texelyurts.nl/"><img src="images/network/theme_logo.png" /></a></div>
      <div class="col"><a href="https://www.texelyurts.nl/"><img src="images/network/logo-website.gif" /></a></div>
   </div>
</div>
<div id="__contact" class="container">
   <p> 
      telefoon 06-46222677
      e-mail info@regisknoope.nl
   </p>
</div>
@endsection