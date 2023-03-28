
@include('partials.header')
<x-nav/>

<table class="table table-hover table-dark">
  <thead>
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">EMail</th>
      <th scope="col">Address</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
    @if (Session::has('success'))
          {{session::get('success')}}
    @endif

  @foreach ($customers as $customer)
  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td><button class="btn btn-primary" type="submit" href="#" role="button">Edit</button></td>
      <td><a class="btn btn-danger" href="/delete/{{$customer->id}}" role="button">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')