@extends('layout.app')
@section('title', 'Edit Kategori')
@section('content')
    {{-- <h1>Edit category</h1>  {{--   sudah digantikan dengan section tittle tambah kategori di atas^^^  <h1>Tambah Kategori</h1> --}}
    <form action="{{ route('category.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input class="form-control" type="text" name="category_name" value="{{ $edit->category_name }}">
        </div>
        <div class="form-group">
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection
