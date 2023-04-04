@include('partials.header')
<x-nav/>
@if(Session::has('success'))
{{Session::get('success')}}
@endif
<div class="container">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">PRICE</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>₱{{$product->price}}</td>
      <td><a href="editProduct/{{$product->id}}">Edit</a></td>
      <td><a href="deleteProduct/{{$product->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
@include('partials.footer')