@extends('template.template')


@section('content')

<!-- ADD DATA -->
<div class="paddingnya"  style="padding:100px">
  <form action="{{ route('category1') }}" method="POST">
  <!--@csrf security dibuat oleh laravel  //wajib pakai-->    
  @csrf 
  <h1>Masukan Data Product</h1>
  
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingNama" placeholder="nama product" name="name">
    <label for="floatingInput">Nama Categori</label>
  </div>
  <button type="submit" class="mt-3 btn btn-success">Submit</button>
  </form>
  </div>
  
  
  
  <div class="padding-product " >
  <table class="table">
    <thead>
      <tr class="bg-dark" style="color:white;">
        <th scope="col">id</th>
        <th scope="col">Nama kategory</th> 
        <th scope="col" style="width: 100px;">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($category as $categori)
        <tr>
            
            <td>{{$loop->iteration }}</td>
            <td>{{$categori->name }}</td>
            <td style="display: flex; gap:20px">
                <a href="/edit_category/{{$categori->id }}" class="btn btn-warning">Edit</a>
                <form action="/delete_category/{{$categori->id}}" method="POST">
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