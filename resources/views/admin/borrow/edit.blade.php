@extends('admin.templates.default')

@section('content')
<div class="box">
   <div class="box-header">
      <h3 class="box-title">Edit Data Penulis</h3>
   </div>
   <div class="box-body">
      <form action="{{ route('admin.author.update', $author) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group @error('name') has-error @enderror"">
            <label for="nama">Nama</label>
            <input type="text" name="name" id="nama" class="form-control" placeholder="Masukkan nama penulis" value="{{ old('name') ?? $author->name }}">
            @error('name')
               <span class="help-block">{{ $message }}</span>
            @enderror
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah</button>
         </div>
      </form>
   </div>
</div>
@endsection