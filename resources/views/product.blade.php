@extends('template.template')

@section('content')

<div class="padding-product " >
  <table class="table">
    <thead>
      <tr class="bg-dark" style="color:white;">
        <th scope="col">id</th>
        
        <th scope="col">id Category</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok Barang</th>
        <th scope="col" style="width: 100px;">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product as $produk)
      <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$produk->category->name}}</td>
          <td>{{$produk->produk_name}}</td>
          <td>{{$produk->price}}</td>
          <td>{{$produk->stock}}</td>
          <td style="display: flex"><a href="/update/{{ $produk->id}}" class="btn btn-success">Edit</a> <hr>
          <form action="/delete/{{$produk->id}}" method="POST">
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </td>
      </tr>
  
      @endforeach
    </tbody>
  </table>
  </div>

  @endsection