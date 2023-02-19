<div id="offer-request-form">
   <div class="alert alert-danger print-error-msg" style="display:none">
      <ul></ul>
   </div>
   <form action="/admin/offers" method="POST">
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
         <div class="col-4">
            <div class="mb-3">
               <label for="firstname" class="form-label">Voornaam</label>
               <input type="text" name="firstname" class="form-control">
            </div>
         </div>
         <div class="col-4">
            <div class="mb-3">
               <label for="lastname" class="form-label">Achternaam</label>
               <input type="text" name="lastname" class="form-control" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-4">
            <div class="mb-3">
               <label for="street" class="form-label">Straat</label>
               <input type="text" name="street" class="form-control" />
            </div>
         </div>
         <div class="col-2">
            <div class="mb-3">
               <label for="house_number" class="form-label">Huisnummer</label>
               <input type="text" name="house_number" class="form-control" aria-describedby="emailHelp">
            </div>
         </div>
         <div class="col-2 offset-md-1">
            <div class="mb-3">
               <label for="street_addition" class="form-label">Toevoeging</label>
               <input type="text" name="street_addition" class="form-control">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-6">
            <div class="mb-3">
               <label for="city" class="form-label">Woonplaats</label>
               <input type="text" name="city" class="form-control" aria-describedby="emailHelp">
            </div>
         </div>
         <div class="col-2">
            <div class="mb-3">
               <label for="zip_code" class="form-label">Postcode</label>
               <input type="text" name="zip_code" class="form-control" aria-describedby="emailHelp">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-6">
            <div class="mb-3">
               <label for="email" name="email" class="form-label">Email address</label>
               <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
         </div>
         <div class="col-6">
            <div class="mb-3">
               <label for="phone_number" class="form-label">Telefoon</label>
               <input type="text" name="phone_number" class="form-control" />
            </div>
         </div>
      </div>
      <div class="mb-3">
         <label for="task_description" class="form-label">Opdrachtbeschrijving</label>
         <textarea name="task_description" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Aanvragen</button>
   </form>
</div>
