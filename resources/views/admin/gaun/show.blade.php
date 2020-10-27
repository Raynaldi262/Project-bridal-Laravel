@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Admin Gaun</h1>
    <table class="table">
  <tbody>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">jenis</th>
      <th scope="col">nama gambar</th>
      <th scope="col">gambar</th>
      <th scope="col">Tombol</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$gaun->id}}</th>
      <td>{{$gaun->nama}}</td>
      <td>{{$gaun->jenis}}</td>
      <td>{{$gaun->gambar}}</td>
      <td><img class="img-thumbnail" src="{{asset('storage')}}/images/imggaun/{{$gaun->gambar}}"></td>
      <td>
      <a href=" {{url($gaun->id)}}/edit" class="btn btn-primary">edit</a>
      <form action="/admin/{{$gaun->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">delete</button>
    </form>
      </td>
    </tr>
  </tbody>
</table>
<a href="/admin/ukuran/{{$gaun->id}}" class="badge badge-info">Tambah Data Ukuran</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ukuran</th>
      <th scope="col">deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
 
  <tbody>
   @foreach ($ukurangaun as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->ukuran}}</td>
      <td>{{$row->deskripsi}}</td>
      <td>
      <a href=" /admin/editukuran/{{$row->id}}" class="btn btn-primary">edit</a>
      <form action="/admin/ukurangaun/{{$row->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">delete</button>
    </form>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

    </div>
    </div>
</div>
@endsection