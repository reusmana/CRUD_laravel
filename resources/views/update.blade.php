@extends('template.template')


@section('content')
<div class="paddingnya"  style="padding:100px">
  <form action="/update/{{$produk->id}}" method="POST">
      @csrf
      @method('PATCH')
  <h1>Ubah Data Product</h1>
  <div class="form-floating mb-3">
    <label for="floatingInput" placeholder="select Categori" ></label>
    <select name="category_id" id="" class="form-control" >
      @foreach ($categories as $category);
        <option value="{{ $category->id }}" >{{$category->name}}</option>
      @endforeach
    
    </select>
  </div>
  <div class="form-floating mb-3">
    <input value="{{$produk->produk_name}}" type="text" class="form-control" id="floatingNama" placeholder="nama product" name="produk_name" >
    <label for="floatingInput">Nama Product</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingPrice" placeholder="Price" value="{{$produk->price}}" name="price" >
    <label for="floatingInput">Price</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingStock" placeholder="Stock" value="{{$produk->stock}}" name="stock" >
    <label for="floatingInput">Stock</label>
  </div>
  <button type="submit" class="mt-3 btn btn-success">Submit</button>
  </form>
  </div>
  <!--
      <h1>HOME</h1>
      <a href="{{ route('product') }}">Product</a> || <a href="/contact">Contact</a> || 
      <a href="{{ route('about') }}">About</a>
  --> 
  @endsection