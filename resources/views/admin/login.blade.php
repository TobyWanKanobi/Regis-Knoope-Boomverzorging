<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Régis Knoope Boomverzorging</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link href="/css/normalize.css" rel="stylesheet">
      <link href="/css/bootstrap.css" rel="stylesheet" />
      <link href="/css/admin.css" rel="stylesheet">
      <style>
         body {
         font-family: 'Nunito', sans-serif;
         }
      </style>
   </head>
   <body>
      <div class="container-fluid">
         <h1>Admin Panel</h1>
      </div>
      <div class="login container-fluid">
         <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
               <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-xl-10">
                     <div class="card rounded-3 text-black">
                        <div class="row g-0">
                           <div class="col-lg-6">
                              <div class="card-body p-md-5 mx-md-4">
                                    <a href="/"><img src="/images/regisknoope.jpg" class="rounded mx-auto d-block" /></a>
                                    <!--<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                       style="width: 185px;" alt="logo">-->
                                    <h4 class="mt-1 mb-5 pb-1">Régis Knoope Boomverzorging</h4>
                                 <form action="/login" method="POST">
                                    @csrf
                                    <p>Login om toegang te krijgen tot het admin paneel</p>
                                    <div class="form-outline mb-4">
                                       <input type="text" id="name" name="name" class="form-control" placeholder="Gebruikersnaam" value="admin" />
                                       <label class="form-label login__input" for="form2Example11">Gebruikersnaam</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                       <input type="password" id="password" name="password"  class="form-control login__input" value="admin" />
                                       <label class="form-label" for="form2Example22">Wachtwoord</label>
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                       <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 login__submit" type="submit" value="Login">
                                       <a class="text-muted" href="#!">Wachtwoord vergeten?</a>
                                    </div>
                                 </form>
                                 @isset($error)
                                 {{$error}}
                                 @endisset
                              </div>
                           </div>
                           <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                 <h4 class="mb-4">We are more than just a company</h4>
                                 <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <footer id="footer" class="footer">
         <ul class="footer__menu">
            <li><a href="">Algemene voorwaarden</a></li>
            <li><a href="">Privacy </a></li>
            <li><a href="">Cookies</a></li>
         </ul>
         <p class="footer__copyright">&#169; 1999-2023 Régis Knoope Boomverzorging.</p>
      </footer>
   </body>
</html>