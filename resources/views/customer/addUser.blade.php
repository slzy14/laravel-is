@include('partials.header')
<x-nav/>
  <style>
  .container {
    padding: 75px;
    
  }
  </style>
<div class="container">
<form action="/save" method="POST">
{{ csrf_field() }}


<div class="mb-3">
<label for="lastName" class="form-label">Last Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="lastName">
  </div>
  <div class="mb-3">
<label for="firstName" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstName">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>
  <div class="mb-3">
    <label for="
    " class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address">
  </div>
  <button type="submit" class="btn btn-primary">Save Customer</button>
</form>
</div>
@include('partials.footer')