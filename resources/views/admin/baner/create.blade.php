@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1>Form Gambar Baner</h1>
    <form method="POST" action="/admin/baners" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label @error('gambar') class="text-danger" @enderror>Gambar @error('gambar')
    {{$message}} @enderror</label>
    <input type="file" value="" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Masukan Kategori</label>
    <select value="{{old('kategori')}}" class="form-control @error('style') is-invalid @enderror" id="kategori" placeholder="masukan style" name="kategori">
    <option value="Gaun">Gaun</option>
    <option value="Makeup">Makeup</option>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    </div>
</div>
@endsection