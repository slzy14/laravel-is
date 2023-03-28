@include('partials.header')


<form action="/store" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror

    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="name">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>

    <div class="mb-3">
      <label for="confirmpassword" class="form-label">Confirm Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password_confirmation">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <h6><a href={{"/login"}}>Already have an account? Sign in here.</a></h6>

  @include('partials.footer')