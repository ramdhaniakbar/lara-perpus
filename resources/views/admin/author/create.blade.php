@extends('admin.templates.default')

@section('content')
<div class="box">
   <div class="box-header">
      <h3 class="box-title">Tambah Data Penulis</h3>
   </div>
   <div class="box-body">
      <form action="{{ route('admin.author.store') }}" method="POST">
         @csrf
         <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="name" id="nama" class="form-control" placeholder="Masukkan nama penulis">
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Tambah</button>
         </div>
      </form>
   </div>
</div>
@endsection