<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>Régis Knoope Boomverzorging</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link href="/css/normalize.css" rel="stylesheet">
      <link href="/css/bootstrap.css" rel="stylesheet" />
      <link href="/css/app.css" rel="stylesheet">
      <script src="/js/bootstrap.bundle.js" type="text/javascript"></script>
      <script type="module" src="/js/offer-form.js"></script>
      <script type="module "src="/js/application.js"></script>
      <style>
         body {
         font-family: 'Nunito', sans-serif;
         }
      </style>
   </head>
   <body>
      <div id="__menu" class="container">
         <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
               <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
               <li class="nav-item"><a href="#" class="nav-link">Diensten</a></li>
               <li class="nav-item"><a href="/boomverzorging" class="nav-link">Boomverzorging</a></li>
               <li class="nav-item"><a href="/van-boom-tot-meubel" class="nav-link">Van boom tot meubel</a></li>
               <li class="nav-item"><a href="/winkel" class="nav-link">Winkel</a></li>
               <li class="nav-item"><a href="/faq" class="nav-link">FAQs</a></li>
               <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
               <li class="nav-item"><a href="/admin/dashboard" class="nav-link">Admin</a></li>
            </ul>
         </header>
      </div>
      <div class="container-fluid">
        @yield('content')
      </div>
      <footer id="footer" class="footer">
         <ul class="footer__menu">
            <li><a href="">Algemene voorwaarden</a></li>
            <li><a href="">Privacy </a></li>
            <li><a href="">Cookies</a></li>
         </ul>
         <p class="footer__copyright">&#169; 1999-2023 Régis Knoope Boomverzorging.</p>
      </footer>

      <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Offerte</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Offerte verstuurd!
    </div>
  </div>
</div>

   </body>
</html>