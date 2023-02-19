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
      <link href="/css/admin.css" rel="stylesheet">
      <script type="module" src="/js/event-manager.js"></script>
      <script type="module" src="/js/backend.js"></script>
      <script type="module" src="/js/offer-repository.js"></script>
      <script src="/js/bootstrap.js" type="text/javascript"></script>
      @yield('javascript')
   </head>
   <body>
      <div class="container-fluid">
         <h1>Admin Panel</h1>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-2">
               <div class="logo">
                  <img src="/images/regisknoope.jpg" class="rounded mx-auto d-block logo__image" />
               </div>
               @include('admin.side-nav')
            </div>
            <div class="col-10">
               @yield('content')
            </div>
         </div>
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
               <!-- <img src="..." class="rounded me-2" alt="...">-->
               <strong class="me-auto">Bootstrap</strong>
               <small>11 mins ago</small>
               <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
               Hello, world! This is a toast message.
            </div>
         </div>
      </div>
   </body>
</html>