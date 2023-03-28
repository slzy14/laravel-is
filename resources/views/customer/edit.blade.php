@include('partials.header')
<x-nav/>
  <style>
  .container {
    padding: 75px;
    
  }
  </style>
<div class="container">
<form action="/updateCustomer" method="POST">
{{ csrf_field() }}


<div class="mb-3">
    <input type="hidden" id="Id" name="id" value="{{$customer->id}}">
<label for="lastName" class="form-label">Last Name</label>
    <input type="text" class="form-control" value="{{$customer->lastName}}" name="lastName"/>
  </div>
  <div class="mb-3">
<label for="firstName" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$customer->firstName}}" name="firstName"/>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{$customer->email}}"/>
  </div>
  <div class="mb-3">
    <label for="
    " class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{$customer->address}}"/>
  </div>
  <button type="submit" class="btn btn-primary">Save Customer</button>
</form>
</div>
@include('partials.footer')