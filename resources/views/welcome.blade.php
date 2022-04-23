@extends('template.template')

@section('content')
{{-- @if  ($errors->any())

<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>

@endif --}}
{{-- menampilkan error cara ke 1 --}}



<div class="paddingnya">
<form action="{{ route('store') }}" method="POST">
<!--@csrf security dibuat oleh laravel  //wajib pakai-->    
@csrf 
<h1>Masukan Data Product</h1>
<div class="form-floating mb-3">
  <label for="floatingInput" placeholder="select Categori"></label>
  <select name="category_id" id="" class="form-control">
    @foreach ($categories as $category);
      <option value="{{ $category->id }}">{{$category->name}}</option>
    @endforeach
  
  </select>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingNama" placeholder="nama product"  name="produk_name">
  <label for="floatingNama">Nama Product</label>
  @if ($errors->has('produk_name'))
  <span class="text-danger">{{ $errors->first('produk_name') }}</span>
@endif

  
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingPrice" placeholder="Price" name="price">
  <label for="floatingInput">Price</label>
  @if ($errors->has('price'))
  <span class="text-danger">{{ $errors->first('price') }}</span>
@endif
</div>
<div class="form-floating">
  <input type="number" class="form-control @error('stock') in-invalid @enderror" id="floatingStock" placeholder="Stock" name="stock">
  <label for="floatingInput">Stock</label>
  @error('stock') <span class="text-danger">{{$message}}</span>  @enderror
</div>
<button type="submit" class="mt-3 btn btn-success">Submit</button>
</form>
</div>

@endsection