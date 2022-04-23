@extends('admin.templates.default')

@section('content')
<div class="box">
   <div class="box-header">
      <h3 class="box-title">Tambah Data Buku</h3>
   </div>
   <div class="box-body">
      <form action="{{ route('admin.book.update', $book) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="form-group @error('title') has-error @enderror">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title ?? old('title') }}"
               placeholder="Masukkan judul buku">
            @error('title')
            <span class="help-block">{{ $message }}</span>
            @enderror
         </div>
         <div class="form-group @error('description') has-error @enderror">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" rows="3" class="form-control"
               placeholder="Tuliskan deskripsi buku">{{ $book->description ?? old('description') }}</textarea>
            @error('description')
            <span class="help-block">{{ $message }}</span>
            @enderror
         </div>
         <div class="form-group @error('author_id') has-error @enderror">
            <label for="author_id">Penulis</label>
            <select name="author_id" id="author_id" class="form-control select2">
               @foreach ($authors as $author)
               <option value="{{ $author->id }}" @if ($author->id == $book->author_id)
                  selected
               @endif>
                  {{ $author->name }}
               </option>
               @endforeach
            </select>
            @error('author_id')
            <span class="help-block">{{ $message }}</span>
            @enderror
         </div>
         <div class="form-group @error('cover') has-error @enderror">
            <label for="cover">Sampul</label>
            <input type="file" name="cover" id="cover" class="form-control">
            @error('cover')
            <span class="help-block">{{ $message }}</span>
            @enderror
         </div>
         <div class="form-group @error('qty') has-error @enderror">
            <label for="qty">Jumlah</label>
            <input type="text" name="qty" id="qty" class="form-control" value="{{ $book->qty ?? old('qty') }}"
               placeholder="Masukkan jumlah buku">
            @error('qty')
            <span class="help-block">{{ $message }}</span>
            @enderror
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
         </div>
      </form>
   </div>
</div>
@endsection
@push('select2css')
<link rel="stylesheet" href="{{ asset('/assets/bower_components/select2/dist/css/select2.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('/assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
   $('.select2').select2();
</script>
@endpush